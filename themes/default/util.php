<?php
/**
 * ģ����ȡ�������
 * @param  string     $page       ���������ҳ��
 * @param  string     $what       �������
 * @param  bool       $getlike    �Ƿ�ر�ģ����ȡ
 * @param  integer    $media_type �������
 * @return array
 */	
function get_adv($page='', $what='',$getlike=true,$media_type=0)
{
	$name = '';
	if($page != '')
	{
		$name .= $page;
	}
	if($what != '')
	{
		$name .=  '_' . $what;
	}
	$data = get_adv_content($name,$getlike,$media_type);
	
	if($data)
	{
		foreach($data as $key=>$val)
		{
			if($media_type==0)
			{
				$data[$key]['ad_code'] = 'data/afficheimg/' . $data[$key]['ad_code'];
			}
			$adname = explode('|', $val['ad_name']);
			$data[$key]['name'] = $name . $key;
			if($adname[1] !='')
			{
				$data[$key]['ad_name'] = $adname[1];
			}
			else
			{
				$data[$key]['ad_name'] = '';
			}
		}
	}
	return $data;
	
}

/**
 * ͨ���ض������ƻ�ȡ�������
 * @param  string $name      �������
 * @param  bool   $getlike   �Ƿ�����ģ����ȡ
 * @return array
 */	
function get_adv_content($name='',$getlike=true,$media_type=0)
{
	$sql = "SELECT ap.ad_width, ap.ad_height, ad.ad_name, ad.ad_code, ad.ad_link FROM " . $GLOBALS['ecs']->table('ad_position') .           " AS ap LEFT JOIN " . $GLOBALS['ecs']->table('ad') . " AS ad ON ad.position_id = ap.position_id WHERE ad.ad_name";
	if($getlike==true)
	{
		$sql .= " LIKE '" . $name . "%'";
	}
	else
	{
		$sql .= "='" . $name . "'";
	}
	$sql .= " AND ad.media_type=" . $media_type . " AND UNIX_TIMESTAMP()>ad.start_time AND UNIX_TIMESTAMP()<ad.end_time AND ad.enabled=1 ORDER BY ad.ad_name ASC, ad.ad_id ASC";
	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

//ȡ�ý���ͼ��������
function get_flash_xml()
{
    $flashdb = array();
    if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
    {
        // ����v2.7.0����ǰ�汾
        if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
        {
            preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
        }

        if (!empty($t))
        {
            foreach ($t as $key => $val)
            {
                $val[4] = isset($val[4]) ? $val[4] : 0;
                $flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
            }
        }
    }
    return $flashdb;
}

function get_subcate($pid)
{
	$sql = "select cat_id,cat_name from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid;

	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

function get_brandcate($bid)
{
	$sql = "select cat.cat_id,cat.cat_name from ".$GLOBALS['ecs']->table('category')." as cat where cat.cat_id in (select distinct cat_id from ".$GLOBALS['ecs']->table('goods')." where brand_id = ".$bid.")";
	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

//ȡ����Ʒ������Ϣ
function get_goods_field($pid,$field_name)
{
	$sql = "select ".$field_name." from ".$GLOBALS['ecs']->table('goods')." where goods_id='".$pid."'";
	return $GLOBALS['db']->getOne($sql);
}

/**
 * ȡ����ҳ�Ƽ����� 
 * @param  integer $num    ����Ĭ��0��ȡ��ȫ��
 * @param  string  $rtype  Ĭ��ȡ�������Ƽ����ͣ���ѡ������best,new,hot
 * @return array
 */
function get_hotcate($num=0, $rtype='')
{
	$sql = "SELECT cat_id,cat_name,parent_id FROM " . $GLOBALS['ecs']->table('category') . " WHERE cat_id in (SELECT DISTINCT cat_id FROM " . $GLOBALS['ecs']->table('cat_recommend') . " WHERE is_show=1 ";
	if($rtype=='best')
	{
		$sql .= "AND recommend_type=1)";
	}
	elseif($rtype=='new')
	{
		$sql .= "AND recommend_type=2)";
	}
	elseif($type=='hot')
	{
		$sql .= "AND recommend_type=3)";
	}
	else
	{
		$sql .= "AND recommend_type in (1,2,3))";
	}
	$sql .= " ORDER BY sort_order ASC";
	if($num>0)
	{
		$sql .= " LIMIT " . $num;
	}
	$res = $GLOBALS['db']->getAll($sql);
	foreach($res as $key=>$val)
	{
		$arr[$key]['id']   = $val['cat_id'];
		$arr[$key]['name'] = $val['cat_name'];
		$arr[$key]['url']  = build_uri('category', array('cid' => $val['cat_id']), $val['cat_name']);
	}
	return $arr;
}


/**
 * �Զ�����ʾ��ʽ����ʾ�Ƽ�������
 * @param   string $rtype  Ĭ��ȡ�������Ƽ����ͣ���ѡ������best,new,hot
 * @return  array
 */
function get_hotcate_tree($rtype='')
{
    $parent_id = 0;

    /*
     �жϵ�ǰ������ȫ���Ƿ��ǵ׼����࣬
     �����ȡ���׼������ϼ����࣬
     �������ȡ��ǰ���༰���µ��ӷ���
    */
    $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$parent_id' AND is_show = 1 ";
    if ($GLOBALS['db']->getOne($sql) || $parent_id == 0)
    {
        /* ��ȡ��ǰ���༰���ӷ��� */
        $sql = 'SELECT cat_id,cat_name ,parent_id,is_show ' .
                'FROM ' . $GLOBALS['ecs']->table('category') .
                "WHERE parent_id = '$parent_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";

        $res = $GLOBALS['db']->getAll($sql);

        foreach ($res AS $row)
        {
            if ($row['is_show'])
            {
                $cat_arr[$row['cat_id']]['id']   = $row['cat_id'];
                $cat_arr[$row['cat_id']]['name'] = $row['cat_name'];
                $cat_arr[$row['cat_id']]['url']  = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
                if (isset($row['cat_id']) != NULL)
                {
					$hotcat = get_hotcate(0,$rtype);
					if($hotcat)
					{
						foreach($hotcat as $key=>$val)
						{
							$pid = get_top_parentid($val['id'],'index');
							$hpid = $pid['cate_parentid'];
							if($hpid == $cat_arr[$row['cat_id']]['id'] && $val['id'] != $cat_arr[$row['cat_id']]['id'])
							{
								$cat_arr[$row['cat_id']]['cat_id'][$key] = $val;
							}
						}
					}
                }
            }
        }
    }
    if(isset($cat_arr))
    {
        return $cat_arr;
    }
}


/**
 * ͨ�����������url�ж��Ƿ�ΪĿ¼���࣬�Ӷ���ȡ�Ӳ˵�
 * @param string $url
 */
function get_subcate_byurl($url)
{
	$rs = strpos($url,"category");
	if($rs!==false)
	{
		preg_match("/\d+/i",$url,$matches);
		$cid = $matches[0];
		$cat_arr = array();
		$sql = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$cid." and is_show=1";
		$res = $GLOBALS['db']->getAll($sql);
		
		foreach($res as $idx => $row)
		{
			$cat_arr[$idx]['id']   = $row['cat_id'];
            $cat_arr[$idx]['name'] = $row['cat_name'];
            $cat_arr[$idx]['url']  = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
			$cat_arr[$idx]['children'] = get_clild_list($row['cat_id']);
		}

		return $cat_arr;
	}
	else 
	{
		return false;
	}
}

function get_clild_list($pid)
{
   //��ʼ��ȡ�ӷ���
    $sql_sub = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid." and is_show=1";

	$subres = $GLOBALS['db']->getAll($sql_sub);
	if($subres)
	{
		foreach ($subres as $sidx => $subrow)
		{
			$children[$sidx]['id']=$subrow['cat_id'];
			$children[$sidx]['name']=$subrow['cat_name'];
			$children[$sidx]['url']=build_uri('category', array('cid' => $subrow['cat_id']), $subrow['cat_name']);
		}
	}
	else 
	{
		$children = null;
	}
			
	return $children;
}

/**
 * ͨ������ID�Ż��ƷID��ȡ������ĸ���ID
 * @param integer  $id   ����ID���ƷID
 * @param string   $type ҳ������
 * return array
*/
function get_top_parentid($id=0, $type='')
{
	if($id>0 && $type!='')
	{
		if($type == 'goods')
		{
			$sql = "SELECT cat_id FROM " . $GLOBALS['ecs']->table('goods') . " WHERE goods_id=" . $id;
			$id = $GLOBALS['db']->getOne($sql);
			$res['goods_parentid'] = $id;
		}
		while($id) 
		{
			$sql = "SELECT	cat_id,parent_id FROM " . $GLOBALS['ecs']->table('category'). " WHERE cat_id=" . $id;
			$cat = $GLOBALS['db']->getRow($sql);
			$id = $cat['parent_id'];
		}
		$res['cate_parentid']  = $cat['cat_id'];
		return $res;
	}
	else
	{
		return false;
	}
}

//ȡ�õ�ǰҳ����
function getbasename()
{    /* �ж��Ƿ���д��ȡ���ļ��� */
    $cur_url = basename(PHP_SELF);
    if (intval($GLOBALS['_CFG']['rewrite']))
    {
        $filename = strpos($cur_url,'-') ? substr($cur_url, 0, strpos($cur_url,'-')) : substr($cur_url, 0, -4);
    }
    else
    {
        $filename = substr($cur_url, 0, -4);
    }
	return $filename;
}

/**
 * ��ȡ��������
 */
function get_new_comment($type,$count)
{
	$sql = "select * from ".$GLOBALS['ecs']->table('comment')." where comment_type = ".$type." and status=1 order by add_time desc limit ".$count;
	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

/**
 * ��Ʒ��ϸҳ����ʹ�õĹ�����Ʒ(�����ƹ�������)
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function detail_get_linked_goods($goods_id)
{
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                'g.market_price, g.promote_price, g.promote_start_date, g.promote_end_date ' .
            'FROM ' . $GLOBALS['ecs']->table('link_goods') . ' lg ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = lg.link_goods_id ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                    "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            "WHERE lg.goods_id = '$goods_id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0";
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$row['goods_id']]['goods_id']     = $row['goods_id'];
        $arr[$row['goods_id']]['goods_name']   = $row['goods_name'];
        $arr[$row['goods_id']]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
            sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $arr[$row['goods_id']]['goods_thumb']  = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['market_price'] = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']   = price_format($row['shop_price']);
        $arr[$row['goods_id']]['url']          = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);

        if ($row['promote_price'] > 0)
        {
            $arr[$row['goods_id']]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $arr[$row['goods_id']]['formated_promote_price'] = price_format($arr[$row['goods_id']]['promote_price']);
        }
        else
        {
            $arr[$row['goods_id']]['promote_price'] = 0;
        }
    }

    return $arr;
}

/**
 * ȡ��Ʒ��
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function get_brands_text($num=0)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('brand') . " WHERE is_show=1";
	$sql .= " ORDER BY sort_order ASC";
	if($num>0)
	{
		$sql .= " LIMIT " . $num;
	}
	$res = $GLOBALS['db']->getAll($sql);
	foreach($res as $key=>$val)
	{
		$arr[$key]['id']   = $val['brand_id'];
		$arr[$key]['name'] = $val['brand_name'];
		$arr[$key]['url']  = build_uri('brand', array('bid' => $val['brand_id']), $val['brand_name']);
	}
	return $arr;
}

function get_hotscate($num=0)
{
	$sql = "SELECT cat_id,cat_name,parent_id FROM " . $GLOBALS['ecs']->table('category') . " WHERE cat_id in (SELECT DISTINCT cat_id FROM " . $GLOBALS['ecs']->table('cat_recommend') . " WHERE is_show=1 AND recommend_type=3) ";
	$sql .= " ORDER BY sort_order ASC";
	if($num>0)
	{
		$sql .= " LIMIT " . $num;
	}
	$res = $GLOBALS['db']->getAll($sql);
	foreach($res as $key=>$val)
	{
		$arr[$key]['id']   = $val['cat_id'];
		$arr[$key]['parent_id']   = $val['parent_id'];
		$arr[$key]['name'] = $val['cat_name'];
		$arr[$key]['url']  = build_uri('category', array('cid' => $val['cat_id']), $val['cat_name']);
	}
	return $arr;
}

function get_comments($num)
 {
    $sql = 'SELECT a.*,b.goods_id,b.goods_thumb,b.goods_name FROM '. $GLOBALS['ecs']->table('comment') .
             ' AS a,'. $GLOBALS['ecs']->table('goods') .'AS b WHERE a.status = 1 AND a.parent_id = 0 and a.comment_type=0 and a.id_value=b.goods_id '.
             ' ORDER BY a.add_time DESC';
   if ($num > 0)
   {
    $sql .= ' LIMIT ' . $num;
   }
   //echo $sql;
         
   $res = $GLOBALS['db']->getAll($sql);
   $comments = array();
   foreach ($res AS $idx => $row)
   {
    $comments[$idx]['add_time']       = substr(local_date($GLOBALS['_CFG']['time_format'], $row['add_time']),0,10);
    $comments[$idx]['content']       = $row['content'];
    $comments[$idx]['id_value']       = $row['id_value'];
    $comments[$idx]['goods_thumb']  = get_image_path($row['goods_id'], $row['goods_thumb'], true);
    $comments[$idx]['goods_name']       = $row['goods_name'];
   }
   return $comments;
 }
function get_cat_articlessss($cat_id, $page = 1, $size = 20 ,$requirement='')
{
    //ȡ�����з�0������
    if ($cat_id == '-1')
    {
        $cat_str = 'cat_id > 0';
    }
    else
    {
        $cat_str = get_article_children($cat_id);
    }
    //��������������������������ݾͽ�������    
    if ($requirement != '')
    {
        $sql = 'SELECT article_id, title, author, add_time, file_url, open_type' .
               ' FROM ' .$GLOBALS['ecs']->table('article') .
               ' WHERE is_open = 1 AND title like \'%' . $requirement . '%\' ' .
               ' ORDER BY article_type DESC, article_id DESC';
    }
    else 
    {
        
        $sql = 'SELECT article_id, title, author, add_time, file_url, open_type' .
               ' FROM ' .$GLOBALS['ecs']->table('article') .
               ' WHERE is_open = 1 AND ' . $cat_str .
               ' ORDER BY article_type DESC, article_id DESC';
    }

    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page-1) * $size);

    $arr = array();
    if ($res)
    {
        while ($row = $GLOBALS['db']->fetchRow($res))
        {
            $article_id = $row['article_id'];

            $arr[$article_id]['id']          = $article_id;
            $arr[$article_id]['title']       = $row['title'];
            $arr[$article_id]['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ? sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];
            $arr[$article_id]['author']      = empty($row['author']) || $row['author'] == '_SHOPHELP' ? $GLOBALS['_CFG']['shop_name'] : $row['author'];
            $arr[$article_id]['url']         = $row['open_type'] != 1 ? build_uri('article', array('aid'=>$article_id), $row['title']) : trim($row['file_url']);
            $arr[$article_id]['add_time']    = substr(date($GLOBALS['_CFG']['date_format'], $row['add_time']),5,9);
        }
    }

    return $arr;
}
?>

