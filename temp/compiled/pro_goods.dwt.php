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
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/pro_goods.css" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/pshow.css" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/script.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/common_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.9.1.min.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js,json2.js')); ?>
</head>
<body>
<div id="site-nav"> <?php echo $this->fetch('library/page_header.lbi'); ?>
  <STYLE type=text/css>
#deal-intro .deal-price {
	DISPLAY: block; VISIBILITY: visible; TOP: 0px
}
.my_comment_list dd {
	border: solid #d0e4c2 1px;
	border-left: none;
	width: 797px;
	float: right;
	padding: 0 15px 15px 15px;
}
.root61 .right{width:960px}
.my_comment_list dt{width:100px}
.my_comment_list dl{

	background: transparent url("themes/68ecshopcom_360buy/images/my_comment_list_bg.gif") no-repeat scroll 130px top;
}
.my_comment_list dt{
	width:122px;
}
#content{
	background:#fff;
}
</STYLE>
  <div id="bdw" class="bdw">
    <div id="bd">
      <div id="content" class="right">
        <div id="deal-intro" class="cf">
          <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
          <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUYs" id="ECS_FORMBUYs" >
            <div class="main">
              <div class="deal-buy">
                <div class="deal-pc-tag"></div>
                <p class="deal-price"> <strong> 
                  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
                  <?php echo $this->_var['goods']['promote_price']; ?> 
                  <?php endif; ?> 
                  </strong> 
                  <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                  <span class="maiguang"><a href="javascript:void(0);"></a></span> 
                  <?php else: ?> 
                  <span class="tg_pic"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"></a></span> 
                  <?php endif; ?> 
                </p>
              </div>
              <table class="deal-discount">
                <tr>
                  <th>原价</th>
                  <th>折扣</th>
                  <th>节省</th>
                </tr>
                <tr>
                  <td >¥<?php echo $this->_var['goods']['shop_price']; ?></td>
                  <td ><?php echo $this->_var['zhekou']; ?></td>
                  <td >¥<?php echo $this->_var['jiesheng']; ?></td>
                </tr>
              </table>
              <div class="deal-box deal-timeleft deal-on" > <span>剩余时间
                <input name="number" type="text"  id="number" value="1" style=" display:none;" />
                </span> <span id="leftTime"><?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?><?php echo $this->_var['lang']['please_waiting']; ?></span> </div>
              <div class="deal-box deal-status"> <span><strong><?php echo $this->_var['order_num']; ?></strong> 人已购买</span> 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                <span class="no">卖光啦！请购买其他宝贝</span> 
                <?php else: ?> 
                <span class="secc">团购成功！ 可继续购买 </span> 
                <?php endif; ?> 
              </div>
            </div>
            <div class="side">
              <div class="deal-buy-cover-img"> <img src="<?php echo $this->_var['goods']['original_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>" width="293" height="293" /> </div>
              <div id="deal-share">
                <div class="deal-share-top">
                  <div class="deal-share-links"> 
                    
                    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone">QQ空间</a> <a class="bds_tsina">新浪微博</a> <a class="bds_tqq">腾讯微博</a> <a class="bds_renren">人人网</a> <a class="bds_t163">网易微博</a> </div>
                    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=603029" ></script> 
                    <script type="text/javascript" id="bdshell_js"></script> 
                    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script> 
                     
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div id="deal-stuff">
          <div class="clearfix box box-split">
            <div class="box-content ">
              <div class="main">
                <H2 id=detail>本单详情</H2>
                <div class="detaildesc"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
                <?php if ($this->_var['goods']['goods_number'] != 0): ?>
                <div id="bottom_tj"> <span class="but"> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" title="<?php echo $this->_var['goods']['goods_name']; ?>">立即购买</a> </span> 团购价<span> 
                  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
                  <?php echo $this->_var['goods']['promote_price']; ?> 
                  <?php endif; ?> 
                  </span>元，数量有限下单要快 </div>
                <?php endif; ?>
                <div class="clr"></div>
              </div>
            </div>
          </div>
          <div class="box-bottom1"></div>
        </div>
        <div class="clearfix"></div>
        <?php echo $this->fetch('library/my_comments.lbi'); ?>
        <div class="clearfix"></div>
      </div>
      <div class="r">
      <?php if ($this->_var['promotion_goods']): ?> 
        <div class="rm" id="hott">
          <div class="rmt">同类团购推荐</div>
          <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_0_77367900_1446387144');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_0_77367900_1446387144']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
          <div class="rmc">
            <div class="tcon2 tcon">
              <div class="title"> <a href="pro_goods.php?id=<?php echo $this->_var['goods_0_77367900_1446387144']['id']; ?>" target="_blank" title="<?php echo $this->_var['goods_0_77367900_1446387144']['name']; ?>"><?php echo $this->_var['goods_0_77367900_1446387144']['name']; ?></a></div>
              <div class="pic"> <a href="pro_goods.php?id=<?php echo $this->_var['goods_0_77367900_1446387144']['id']; ?>" target="_blank"> <img  src="<?php echo $this->_var['goods_0_77367900_1446387144']['thumb']; ?>" alt=""> </a> </div>
              <div class="price"><span class="qg"><a href="pro_goods.php?id=<?php echo $this->_var['goods_0_77367900_1446387144']['id']; ?>" target="_blank" title="抢购">抢购</a></span> <span> 
                <?php if ($this->_var['goods_0_77367900_1446387144']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_0_77367900_1446387144']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_0_77367900_1446387144']['shop_price']; ?> 
                <?php endif; ?> 
                </span>元<span><?php echo $this->_var['goods_0_77367900_1446387144']['valid_goods']; ?></span>人已购买</div>
            </div>
            <div class="clr"></div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
      </div>
      <div class="clr"></div>
      <?php endif; ?> 
    </div>
    <div class="blank"></div>
  </div>
  <?php echo $this->fetch('library/help.lbi'); ?> 
  <?php echo $this->fetch('library/page_footer.lbi'); ?> 
  <?php echo $this->fetch('library/site_bar.lbi'); ?> 
</div>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
  Compare.init();
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUYs']);
  var qty = document.forms['ECS_FORMBUYs'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUYs'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
