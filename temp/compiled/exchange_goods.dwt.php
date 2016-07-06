<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://localhost/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/pshow.css" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/exchange_goods.css" />

<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.7.2_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/script.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/gw_totop.js" ></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" language="javascript">
var GB_ANIMATION = true;
$(document).ready(function(){
	$(".jqzoom").jqzoom();
	$("a.greybox").click(function(){
          var t = this.title || $(this).text() || this.href;
          GB_show(t,this.href,500,700);
          return false;
        });
});
</script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<div id="site-nav" > 
  <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank"></div>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="w">
    <div id="product-intro" class="goods_photo"> 
      <script type='text/javascript'>var warestatus = 1; </script>
      <form action="exchange.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" onsubmit="return check_attr_form('ECS_FORMBUY')">
        <div class="clearfix" style="width:591px; min-height:510px;">
          <div class="goods_info">
            <div id="name">
              <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
            </div>
            <?php if ($this->_var['goods']['goods_brief']): ?>
            <div class="goods_brief"><span><?php echo $this->_var['goods']['goods_brief']; ?></span></div>
            <?php endif; ?>
            <div id="summary-price" class="clearfix">
              <div class="mar_l">
                <p> 
                  <span class="price">积分</span><strong class="p-price"><?php echo $this->_var['goods']['exchange_integral']; ?></strong> 
                </p>
              </div>
            </div>
            <ul id="summary1">
              <?php if ($this->_var['cfg']['show_goodssn']): ?>
              <li class="padd1">
                <div class="dt">商品货号</div>
                <div class="dd"> <?php echo $this->_var['goods']['goods_sn']; ?> </div>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
              <li class="padd1">
                <div class="dt">商品品牌</div>
                <div class="dd"> <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></div>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_goodsweight']): ?>
              <li class="padd1">
                <div class="dt">商品重量</div>
                <div class="dd"> <?php echo $this->_var['goods']['goods_weight']; ?> </div>
                </dd>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_addtime']): ?>
              <li class="padd1">
                <div class="dt">上架时间</div>
                <div class="dd"> <?php echo $this->_var['goods']['add_time']; ?> </div>
                </dd>
              </li>
              <?php endif; ?>
               <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
              <li class="padd1"> 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?>
                <div class="dt">商品库存</div>
                <div color='dd'><?php echo $this->_var['lang']['stock_up']; ?></div>
                <?php else: ?>
                <div class="dt">商品库存</div>
                <div class="dd"><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></div>
                <?php endif; ?> 
              </li>
              <?php endif; ?>
            </ul>
            
            
            
            
            <ul id="choose">
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
              <li id="choose-version">
                <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                <div class="dd catt"> 
                   
                  <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                  <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
                    <input type="hidden" name="spec_attr_type" value="<?php echo $this->_var['spec_key']; ?>">
                  <input type="hidden" name="attr_types" id="spec_attr_type_<?php echo $this->_var['spec_key']; ?>" value="0">
                  <ul class="ys_xuan" id="xuan_<?php echo $this->_var['spec_key']; ?>">
                    <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>"> 
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                      <a onclick="show_attr_status(this,<?php echo $this->_var['goods']['goods_id']; ?>, <?php echo $this->_var['attr_id']; ?>);<?php if ($this->_var['spec_key'] == $this->_var['attr_id']): ?>get_gallery_attr(<?php echo $this->_var['id']; ?>, <?php echo $this->_var['value']['id']; ?>);<?php endif; ?>"  href="javascript:" name="<?php echo $this->_var['value']['id']; ?>" id="xuan_a_<?php echo $this->_var['value']['id']; ?>"  title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"> <?php if ($this->_var['value']['goods_attr_thumb']): ?>
                      <div style="float:left;cursor:pointer;"><img src="<?php echo $this->_var['value']['goods_attr_thumb']; ?>" width=40 height=40 title="<?php echo $this->_var['value']['label']; ?>" alt="<?php echo $this->_var['value']['label']; ?>" /></div>
                      <label style="float:left;cursor:pointer;line-height:40px;margin:0 10px 0 10px;color:#000;text-decoration:none;"><?php echo $this->_var['value']['label']; ?></label>
                      <?php else: ?>
                      <div style="padding:3px 7px;"><?php echo $this->_var['value']['label']; ?></div>
                      <?php endif; ?>
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="value_spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"  />
                      </a> 
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                  </ul>
                  <div class="clear"></div>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                  <?php else: ?>
                  <select name="spec_<?php echo $this->_var['spec_key']; ?>">
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  
                  <?php endif; ?> 
                  <?php else: ?> 
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                  <br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  
                  <?php endif; ?> 
                </div>
              </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    
      
	<script type="text/javascript">
var myString=new Array();

<?php $_from = $this->_var['prod_exist_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'prod');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['prod']):
?>
myString[<?php echo $this->_var['pkey']; ?>]="<?php echo $this->_var['prod']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</script>
	

              
            </ul>
            <div class="buyNub-buy-wrap">
              <div id="choose-btns" class="buyNub-buy"> 
              	 <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
                <input type="submit"  value="<?php echo $this->_var['lang']['exchange_goods']; ?>" class="u-buy1"/>
              </div>
            </div>
          </div>
           
         </div>
      </form>
      <div id="preview">
        <div style="position:relative;" class="goods_img"> <a href="<?php if ($this->_var['pictures']['0']['img_original']): ?><?php echo $this->_var['pictures']['0']['img_original']; ?><?php else: ?><?php echo $this->_var['goods']['original_img']; ?><?php endif; ?>" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
          <?php if ($this->_var['pictures']): ?> 
          <img  src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="goodsimg" id="goods_bimg" width="378" height="378" style="border:#DDDDDD 1px solid; width:378px; height:378px;" /> 
          <?php else: ?> 
          <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="goodsimg" id="goods_bimg" width="378" height="378" style="border:#DDDDDD 1px solid;width:378px; height:378px;" /> 
          <?php endif; ?> 
          </a></div>
        <div style="height:10px; line-height:10px; clear:both;"></div>
         
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
        
        <div style="height:10px; line-height:10px; clear:both;"></div>
        <div id="short-share">
          <div id="view-bigimg" class="fl" style="margin-right:20px;"><b></b><a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;" target="_blank">查看大图</a></div>
          <div class="share-list fl" style="margin-right:20px;"> 
            
            <div id="bdshare" class="bdshare_b" style="line-height: 12px; "> <img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg?cdnversion=20120831" /> </div>
            <script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=603029" ></script> 
            <script type="text/javascript" id="bdshell_js"></script> 
            <script type="text/javascript">
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
	  </script> 
             
            
          </div>
          <div class="fl com-pare"> <a class="compare-btn" data-goods="<?php echo $this->_var['goods']['goods_id']; ?>" data-type="<?php echo $this->_var['goods']['goods_type']; ?>" onclick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['goods_type']; ?>', '<?php echo $this->_var['goods']['goods_thumb']; ?>', '<?php if ($_SESSION['user_name']): ?><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?> <?php endif; ?><?php else: ?><?php echo $this->_var['goods']['market_price']; ?><?php endif; ?>')"></a> </div>
          <div class="clb"></div>
        </div>
      </div>
       
      <?php echo $this->fetch('library/exchange_new.lbi'); ?> 
    </div>
     
  </div>
  <div class="blank"></div>
  <div class="blank"></div>
  <div class="w"> <?php echo $this->fetch('library/goods_best.lbi'); ?>
    <div class="left">
      <div id="related-sorts" class="m m2">
        <div class="mt">
          <h2>相关分类</h2>
        </div>
        <div class="mc">
          <ul class="lh">
            <?php
		 $parent_cat_id = get_parent_cat_id($GLOBALS['smarty']->_var['goods']['cat_id']);
		 $GLOBALS['smarty']->assign('child_cat',get_child_cat($parent_cat_id));
		  ?>
            <?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['child_cat']['iteration']++;
?>
            <li><a href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo sub_str($this->_var['cat']['name'],6); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      
      <div id="related-brands" class="m m2">
        <div class="mt">
          <h2>同类品牌</h2>
        </div>
        <div class="mc">
          <ul class="lh">
            <?php $GLOBALS['smarty']->assign('get_cat_brands',get_cat_brands($this->_var['goods']['cat_id']));?>
            <?php $_from = $this->_var['get_cat_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_cat');$this->_foreach['get_cat_brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand_cat']):
        $this->_foreach['get_cat_brands']['iteration']++;
?>
            <li><a href="brand.php?id=<?php echo $this->_var['brand_cat']['id']; ?>" title="<?php echo $this->_var['brand_cat']['name']; ?>"><?php echo $this->_var['brand_cat']['name']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      

     </div>
    
    <div class="right goods_right"> <?php echo $this->fetch('library/goods_package_ecshop68.lbi'); ?>
      <div id="wrapper" class="m m1">
        <div class="mt" id="main-nav-holder">
          <ul class="tab" id="nav">
            <li class="boldtit_list h_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_canshu">规格参数</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_jieshao" >商品介绍</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_pinglun" >商品评价(<?php echo $this->_var['review_count']; ?>)</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_shouhou" >售后保障</a></li>
          </ul>
          <div style="width:170px;float:right; position:relative;left:0;top:0"> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" name="bi_addToCart"  class="right_add" >加入购物车</a>
            <div class="ce_right">
              <ul class="abs_ul">
                <li class="abs_active"><i></i><span>规格参数</span></li>
                <li><i></i><span>产品介绍</span></li>
                <li><i></i><span>商品评价</span></li>
                <li><i></i><span>包装清单</span></li>
                <li><i></i><span>售后服务</span></li>
                <li><i></i><span>常见问题</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="main_widget_1">
          <div class="mc" id="os_canshu">
            <ul class="detail-list">
              <li>商品名称：<?php echo $this->_var['goods']['goods_style_name']; ?></li>
              <li>商品编号：<?php echo $this->_var['goods']['goods_sn']; ?></li>
              <li>品牌：<a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
              <li>上架时间：<?php echo $this->_var['goods']['add_time']; ?></li>
              <li>商品毛重：<?php echo $this->_var['goods']['goods_weight']; ?></li>
              <li>库存： 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                <?php echo $this->_var['lang']['stock_up']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
                <?php endif; ?> 
              </li>
              <?php if ($this->_var['properties']): ?> 
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <li ><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?>
            </ul>
          </div>
          <div class="mc" id="os_jieshao">
            <div class="blank20"></div>
            <div class="detail-content"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
          </div>
          <div class="mc" id="os_pinglun">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/my_comments.lbi'); ?> </div>
            <div class="mc" id="os_advantage">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/packing_list.lbi'); ?> </div>
          <div class="mc" id="os_shouhou">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/baozhang.lbi'); ?> </div>
          <div class="mc" id="os_changjian">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/common_problem.lbi'); ?> </div>
        </div>
      </div>
      <script type="text/javascript">
		var obj11 = document.getElementById("main-nav-holder");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
function getTop(e){
	var offset = e.offsetTop;
	if(e.offsetParent != null) offset += getTop(e.offsetParent);
	return offset;
}
</script> 
      <script type="text/javascript">
	$(".ce_right").height($("#main_widget_1").height());
</script> 
    </div>
     
  </div>
  <div class="blank"></div>
  <?php echo $this->fetch('library/help.lbi'); ?> 
  <?php echo $this->fetch('library/page_footer.lbi'); ?> 
</div>
</body>
<script type="text/javascript">

onload = function()
{
  fixpng();
}
delete(Object.prototype.toJSONString);


/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
	return '';
}

function check_attr_form(formname){
	var spec_arr = new Array();
	var formBuy = document.forms['ECS_FORMBUY'];
	spec_arr = getSelectedAttributes(formBuy);
	if(isSelectAttr(spec_arr)){
		return true;
	}
	return false;
}

</script>

<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/compare.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/json2.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/common_www_ecshop68_com.js" ></script>
<script>
$(document).ready(function(e) {
	Compare.init();
    $('#compareBox .menu li').click(function(e) {
		$('#compareBox .menu li').each(function(index, element) {
			$(this).removeClass('current');
        });
		if($(this).attr('data-value') == 'compare')
		{
			$('#historyList').css('display', 'none');
			$('#compareList').css('display', 'block');
		}
		else
		{
			$('#historyList').css('display', 'block');
			$('#compareList').css('display', 'none');
		}
        $(this).addClass('current');
    });
	if($('#historyList li').length > 4)
	{
		$('#historyList ul').css('width', (226*$('#historyList li').length)+'px');
		$('#historyList #sc-prev').addClass('disable');
		var count = 0;
		$('#historyList #sc-next').click(function(e) {
			if(($('#historyList li').length-4) > count)
			{
				count++;
				$('#historyList #sc-prev').removeClass('disable');
				if(($('#historyList li').length-4) >= count)
					$('#historyList ul').animate({marginLeft:(-226*count)+'px'});
				if(($('#historyList li').length-4) == count)
					$('#historyList #sc-next').addClass('disable');
			}
        });
		$('#historyList #sc-prev').click(function(e) {
			if(count > 0)
			{
				count--;
				$('#historyList #sc-next').removeClass('disable');
				if(count >= 0)
					$('#historyList ul').animate({marginLeft:(-226*count)+'px'});
				if(count == 0)
					$('#historyList #sc-prev').addClass('disable');
			}
        });
	}
	else
	{
		$('#historyList #sc-prev').css('display', 'none');
		$('#historyList #sc-next').css('display', 'none');
	}
	var compareData = new Object();
	var compareCookie = document.getCookie('compareItems');
	var count = 0;
	if(compareCookie != null)
	{
		compareData = JSON.parse(compareCookie);
        for(var k in compareData)
        {
            if(typeof(compareData[k])=="function")
            	continue;
            $('.compare-btn').each(function(index, element) {
            	if(k == $(this).attr('data-goods'))
					$(this).css('background-position', '0 -99px');
        	});
			count ++;
        }
	}
	if(count>0)
	{
		$('#compareBox').css('display', 'block');
		$('.compareHolder').css('display', 'none');
	}
	
});
function toggle_compare_box()
{
	if($('#compareBox').css('display') == 'none')
	{
		$('#compareBox').css('display', 'block');
		$('.compareHolder').css('display', 'none');
	}
	else
	{
		$('#compareBox').css('display', 'none');
		$('.compareHolder').css('display', 'block');
	}
}
</script>
<div align="center" id="compareBox" style="display:none">
  <div class="menu">
    <ul>
      <li class="current" data-value='compare'>对比栏</li>
      <li data-value='history'>最近浏览</li>
    </ul>
    <a style="color:#005AA0;float: right; line-height: 32px; margin-right: 20px;" href="javascript:void(0)" onClick="toggle_compare_box()">隐藏</a>
    <div style="clear:both"></div>
  </div>
  <div id="compareList"></div>
  <div id="historyList" style="display:none;"><span id="sc-prev" class="sc-prev scroll-btn"></span><span id="sc-next" class="sc-next scroll-btn"></span>
    <div class="scroll_wrap"><?php 
$k = array (
  'name' => 'history_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
  </div>
</div>
<a class="compareHolder" href="javascript:void(0)" onClick="toggle_compare_box()">对比栏</a>


</html>
