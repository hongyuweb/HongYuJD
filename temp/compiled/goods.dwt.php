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
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/common_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.7.2_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/script.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/gw_totop.js" ></script>
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/pshow.css" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/goods.css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
	
	var Ajax = {
    	call: function(url, param, callback){
    		$.post(url+"?"+param, {}, callback, "json");
    	}
    };

</script>
</head>
<body>

<input type="hidden" id="chat_goods_id" value="<?php echo $this->_var['goods_id']; ?>" />
<div id="bg" class="bg" style="display:none;"></div>
<?php echo $this->fetch('library/pricecut_notice.lbi'); ?>
<?php echo $this->fetch('library/arrive_notice.lbi'); ?>
<div id="site-nav"> <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank"></div>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="w">
    <div id="product-intro" class="goods_photo"> 
       
      <script type='text/javascript'>var warestatus = 1; </script>
      <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
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
                  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
                  <span class="price">促销价</span><strong class="p-price" id="ECS_GOODS_AMOUNT"></strong> 
                  <?php else: ?> 
                  <span class="price">售价</span><strong class="p-price" id="ECS_GOODS_AMOUNT"></strong> 
                  <?php endif; ?> 
                  <span class="depreciate"><a href="javascript:showDiv(<?php echo $this->_var['goods']['goods_id']; ?>);" style="color:#ffffff;text-decoration:none;">降价通知</a></span> </p>
              </div>
              <div class="show_price" style="z-index:101"> 
                <?php if ($this->_var['cfg']['show_marketprice']): ?>
                <div class="market_prices_t"> <span class="price">市场价</span><font class="market_price"><?php echo $this->_var['goods']['market_price']; ?></font> </div>
                <?php endif; ?> 
                <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                <div class="market_prices_t"><?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?> <i></i><font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font> </div>
                <?php endif; ?> 
                <?php if ($this->_var['rank_prices']): ?>
                <div class="rank_prices">
                  <div id="vip1" onmouseover="hidevip1()"> <span class="rmbPrice">会员等级价格<i></i></span> </div>
                  <div class="hover" style="display:none;" id="vip2" onmouseover="hidevip1()" onmouseout="showvip1()"> <span class="rmbPrice">会员等级价格<i></i></span> 
                    <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?> 
                    </br>
                    <span class="rmbPrice"> <?php echo $this->_var['rank_price']['rank_name']; ?>：<?php echo $this->_var['rank_price']['price']; ?></span> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                  </div>
                  <script type="text/javascript">
function hidevip1()
{ 
document.getElementById('vip1').style.display="none";
document.getElementById('vip2').style.display="block";
}
function showvip1()
{ 
document.getElementById('vip1').style.display="block";
document.getElementById('vip2').style.display="none";
}
</script> 
                </div>
                <?php endif; ?> 
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
              <?php if ($this->_var['cfg']['use_integral']): ?>
              <li class="padd1">
                <div class="dt">可使积分</div>
                <div class="dd"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></div>
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
            </ul>
            <div id="summary-qita" class="clearfix">
              <ul class="qita">
                <li>
                  <p>累积评价<span><a href="<?php echo $this->_var['url']; ?>#os_pinglun"><?php echo $this->_var['review_count']; ?>人评价</a></span></p>
                </li>
                <li>
                  <p>累计销量<span><?php echo $this->_var['goods']['count']; ?></span></p>
                </li>
                <?php if ($this->_var['goods']['give_integral_2'] == '-1'): ?>
                <li style="border:none">
                  <p>赠送积分<span><font id="ECS_GOODS_AMOUNT_jf"><?php echo $this->_var['goods']['give_integral']; ?></font></span></p>
                  <?php elseif ($this->_var['goods']['give_integral_2'] > 0): ?>
                <li style="border:none">
                  <p>赠送积分<span><?php echo $this->_var['goods']['give_integral']; ?></span></p>
                </li>
                <?php else: ?>
                <li style="border:none">
                  <p>赠送积分<span>0</span></p>
                </li>
                <?php endif; ?>
              </ul>
            </div>
            <ul id="summary">
              <script type="text/javascript">
$(document).ready(function(){
  var a = $("#summary").children("li");
  var b = $("#summary"); 
  if($(a).length > 0){ 
		b.css({"display":"block"});

	} 
	else{ 
		b.css({"display":"none"});
	} 
});
</script> 
              <?php if ($this->_var['promotion']): ?>
              <li class="padd padd-promotion clearfix"> <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?> 
                <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>
                <div class="dt">促销信息</div>
                <?php else: ?>
                <div class="dt">&nbsp;</div>
                <?php endif; ?> 
                <?php if ($this->_var['item']['type'] == "snatch"): ?>
                <div class="dd"> <a class="activity-68 activity_4" href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#fff; text-decoration:none;"><?php echo $this->_var['lang']['snatch']; ?></a> <a href="snatch.php" title="<?php echo $this->_var['item']['act_name']; ?>" class="activity_con"><?php echo sub_str($this->_var['item']['act_name'],30); ?></a> </div>
                <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                <div class="dd"> <a class="activity-68 activity_4" href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#fff; text-decoration:none;"><?php echo $this->_var['lang']['group_buy']; ?></a> <a href="group_buy.php" title="<?php echo $this->_var['$item']['act_name']; ?>" class="activity_con"><?php echo sub_str($this->_var['item']['act_name'],30); ?></a> </div>
                <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                <div class="dd"> <a class="activity-68 activity_4" href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#fff; text-decoration:none;"><?php echo $this->_var['lang']['auction']; ?></a> <a href="auction.php" title="<?php echo $this->_var['item']['act_name']; ?>" class="activity_con"><?php echo sub_str($this->_var['item']['act_name'],30); ?></a> </div>
                <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                <div id="manzeng" class="dd <?php if ($this->_var['item']['gift'] == array ( )): ?><?php else: ?>J_MenuItem<?php endif; ?>" style="position:relative;"> <a class="activity-68 <?php if ($this->_var['item']['gift'] == array ( )): ?>activity_1<?php else: ?>activity_2<?php endif; ?>" href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>"><?php echo $this->_var['item']['act_type']; ?></a> <a id="zeng" href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" class="activity_con"><?php echo $this->_var['item']['act_name']; ?><?php if ($this->_var['item']['gift'] == array ( )): ?><?php else: ?><i></i><?php endif; ?></a> <?php if ($this->_var['item']['gift'] !== array ( )): ?>
                  <div id="aa" class="zengpin" style="display:none;"> <b class="tip_flag"></b> <?php if ($this->_var['item']['act_range'] == 0): ?>
                    <h3>优惠范围：全部商品</h3>
                    <?php elseif ($this->_var['item']['act_range'] == 1): ?>
                    <h3>优惠范围：全部分类</h3>
                    <?php elseif ($this->_var['item']['act_range'] == 2): ?>
                    <h3>优惠范围：品牌</h3>
                    <?php elseif ($this->_var['item']['act_range'] == 3): ?>
                    <h3>优惠范围：商品</h3>
                    <?php endif; ?>
                    <ul>
                      <?php $_from = $this->_var['item']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?>
                      <li> <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" style="display:block;"> <img src="<?php echo $this->_var['gift']['thumb']; ?>" title="<?php echo $this->_var['gift']['name']; ?>" alt="<?php echo sub_str($this->_var['gift']['name'],6); ?>" /> </a>
                        <p><?php echo $this->_var['gift']['price']; ?>元</p>
                      </li>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                  </div>
                  <?php endif; ?> </div>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <script type="text/javascript">
$(document).ready(function(){
	$( ".J_MenuItem" ).each( function( index ){
		var zindex = $(this).css("z-index");    
		$(this).mouseover( function(){	
			$(this).css("z-index", ""+(zindex+2) );		
			$( ".zengpin" ).eq( index ).show();			 
			
		});
		$(this).mouseleave( function(){
			$(this).css("z-index", ""+(zindex-2) );
			$( ".zengpin" ).eq( index ).hide();    
			
		});
	});
});
</script> 
                <?php if ($this->_var['goods']['bonus_money']): ?>
                <div class="dt">&nbsp;</div>
                <div class="dd"> <a class="activity-68 activity_3" href="user.php?act=bonus" >红包</a> <a href="user.php?act=bonus" title="" class="activity_con">购买此商品可获得红包&nbsp;<font style="color:#f52648"><?php echo $this->_var['goods']['bonus_money']; ?></font></a> </div>
                <?php endif; ?> 
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['volume_price_list']): ?>
              <li class="padd"> <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                  <tr>
                    <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                    <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
                  </tr>
                  <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </table>
              </li>
              <?php endif; ?>
              <style type="text/css">
			  li.padd1{width:45%;float:left}
			  #product-intro li.padd1 .dt{width:27%}
			  #product-intro li.padd1 .dd{width:73%}
			  </style>
              
              <?php if ($this->_var['goods']['is_shipping']): ?>
              <li class="padd1" style="width:100%;text-indent:10px;"> <?php echo $this->_var['lang']['goods_free_shipping']; ?></li>
              <?php endif; ?>
            </ul>
            <ul id="choose" class="choose_bor">
              <li style="padding:0 0 7px 0px; overflow:visible;z-index:2; position:relative">
                <div class="pickup_point_wrap">
                  <div class="dt" style="padding: 5px 0;">自提：</div>
                  <div id="pickup_point" onmouseenter="show_list()" onmouseleave="hide_list()">自提点列表</div>
                  <div id="area_label" onmouseenter="show_area()" onmouseleave="hide_area()">所在区域</div>
                  <div id="pickup_point_list" onmouseenter="show_list()" onmouseleave="hide_list()"> </div>
                  <div id="area_list_wrap" onmouseenter="show_area()" onmouseleave="hide_area()">
                    <div id="area_menu"> <a id="province" href="javascript:void(0);">省</a> <a id="city" href="javascript:void(0);">市</a> <a class="hover" id="district" href="javascript:void(0);">区</a>
                      <div style="clear:both"></div>
                    </div>
                    <ul id="area_list">
                    </ul>
                  </div>
                  <div style="clear:both"></div>
                </div>
              </li>
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
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
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"  />
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
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
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
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
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
               
              
              <li id="choose-amount">
                <div class="dt">数量：</div>
                <div class="dd">
                  <div class="wrap-input"> 
                    <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script> 
                    <a class="btn-reduce" href="javascript:;" onclick="goods_cut();changePrice();">减少数量</a>
                    <input name="number" type="text" class="text"  id="number" value="1" onblur="changePrice();"/>
                    <a class="btn-add" href="javascript:;" onclick="goods_add();changePrice();">增加数量</a> 
                    <?php if ($this->_var['cfg']['show_goodsnumber']): ?>
                                                         （库存<font id="shows_number"><?php echo $this->_var['goods']['goods_number']; ?> </font>）
                    <?php else: ?>
                        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
                            &nbsp;&nbsp;缺货
                        <?php else: ?>
                            &nbsp;&nbsp;有货
                        <?php endif; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </li>
              <?php if ($this->_var['tag'] == 1): ?>
              <li class="padd1">
                <div>
                  <div class="dt">限购数量：</div>
                  <div class="dd"><?php echo $this->_var['goods']['buymax']; ?></div>
                </div>
              </li>
              <?php endif; ?>
            </ul>
            <div class="buyNub-buy-wrap">
            
             <div id="choose-btns1" class="buyNub-buy" style="display:none"> 
               
                <a onclick="tell_me(<?php echo $this->_var['goods']['goods_id']; ?>)" class="tell_me"/><i></i>到货通知</a>
                
                <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-coll <?php if ($this->_var['goods']['is_collet'] == 1): ?>btn-coll-t<?php endif; ?>"><?php if ($this->_var['goods']['is_collet'] == 1): ?>已<?php endif; ?>收藏</a>   
              </div>
     
              <div id="choose-btns" class="buyNub-buy"> 
                <?php if ($this->_var['goods_n'] > 0): ?> 
                <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,1)" name="bi_addToCart" class="u-buy1">立即购买</a> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" name="bi_addToCart" class="u-buy2">加入购物车</a> 
                <?php else: ?> 
                <a onclick="tell_me(<?php echo $this->_var['goods']['goods_id']; ?>)" class="tell_me"/><i></i>到货通知</a>
                <?php endif; ?> 
                <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-coll <?php if ($this->_var['goods']['is_collet'] == 1): ?>btn-coll-t<?php endif; ?>"><?php if ($this->_var['goods']['is_collet'] == 1): ?>已<?php endif; ?>收藏</a> <a id="phone" class="btn-phone" style="position:relative;cursor:pointer">去手机购买
                <div id="phone_tan" style="display:none"> <span class="arr"></span>
                  <div class="m-qrcode-wrap"> <img src="erweima_png.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" width="100" height="100" /> </div>
                </div>
                </a>  
              </div>
              <script type="text/javascript">
		$("#phone").mouseover( function(){	
			$( "#phone_tan" ).show();
		});
		$("#phone").mouseleave( function(){
			$( "#phone_tan" ).hide();
		});
</script> 
            </div>
          </div>
           
          <span class="clr"></span> </div>
      </form>
      <div id="preview">
        <div  class="goods_img" id="li_<?php echo $this->_var['goods']['goods_id']; ?>"> <a href="<?php if ($this->_var['pictures']['0']['img_original']): ?><?php echo $this->_var['pictures']['0']['img_original']; ?><?php else: ?><?php echo $this->_var['goods']['original_img']; ?><?php endif; ?>" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
          <?php if ($this->_var['pictures']): ?> 
          <img  src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="378" height="378" style="border:#DDDDDD 1px solid; width:378px; height:378px;" /> 
          <?php else: ?> 
          <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="378" height="378" style="border:#DDDDDD 1px solid;width:378px; height:378px;" /> 
          <?php endif; ?> 
          </a> </div>
        <div style="height:10px; line-height:10px; clear:both;"></div>
         
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
        
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
      <div id="supp_info"> 
        <?php if ($this->_var['goods']['supplier_id']): ?> 
        <?php echo $this->fetch('library/ghs_info.lbi'); ?> 
        <?php else: ?> 
        <?php echo $this->fetch('library/ziying_info.lbi'); ?> 
        <?php endif; ?> 
      </div>
       
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
      
      <?php
			  $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['goods']['cat_id']);
			 $GLOBALS['smarty']->assign('cat_name',$cat_info['cat_name']);
    ?>
      <?php if ($this->_var['hot_goods']): ?>
      <div id="ranklist" class="m m2">
        <div class="mt">
          <h2><?php echo $this->_var['cat_name']; ?>排行榜</h2>
        </div>
        <script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTabglo(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
con.style.display=i==cursel?"block":"none";
menu.className=i==cursel?"curr":"";
}
}
//-->
</script>
        <div class="mc">
          <ul class="tab">
            <li data-widget="tab-item" class="curr"  id="glo1" onmouseover="setTabglo('glo',1,3)">同类别</li>
            <li data-widget="tab-item" id="glo2" onmouseover="setTabglo('glo',2,3)">同品牌</li>
            <li data-widget="tab-item"  id="glo3" onmouseover="setTabglo('glo',3,3)">同价位</li>
          </ul>
          <ul class="tabcon"  id="con_glo_1" >
            <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50"/></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <ul class="tabcon" id="con_glo_2" style="display:none;" >
            <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, $GLOBALS['smarty']->_var['goods']['brand_id']));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" /></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <ul class="tabcon" id="con_glo_3"  style="display:none;">
            <?php
		 $price_arr = get_goods_min_max_price($GLOBALS['smarty']->_var['goods']['goods_id']);
		   
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, 0, $price_arr['min'], $price_arr['max']));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" /></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?> 
      <?php echo $this->fetch('library/goods_new.lbi'); ?> <?php echo $this->fetch('library/goods_related.lbi'); ?> <?php echo $this->fetch('library/goods_fittings.lbi'); ?> <?php echo $this->fetch('library/bought_goods.lbi'); ?>  <?php echo $this->fetch('library/ad_position.lbi'); ?> 
      <div style="height:8px; line-height:8px;"></div>
       <?php echo $this->fetch('library/ad_position.lbi'); ?>  </div>
    
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
              <?php if ($this->_var['cfg']['show_goodsnumber']): ?>
              <li>库存： 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                <?php echo $this->_var['lang']['stock_up']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
                <?php endif; ?> 
              </li>
              <?php endif; ?>
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
  <div style="height:20px; line-height:20px; clear:both"></div>
  <?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> <?php echo $this->fetch('library/site_bar.lbi'); ?> </div>
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
var suppid = <?php echo $this->_var['goods']['supplier_id']; ?>;
</script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/compare.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/json2.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
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
					$(this).css('background-position', '0 -24px');
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


//changePrice();
changePriceAll();
fixpng();
ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1);
try {onload_leftTime();}
catch (e) {}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
	if(res.qty==0)
	{
		document.getElementById('choose-btns').style.display = 'none';
    	document.getElementById('choose-btns1').style.display = 'block';
	}
    alert(res.err_msg);
	document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
 }
  else
  {
	  document.getElementById('choose-btns').style.display = 'block';
     document.getElementById('choose-btns1').style.display = 'none';
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT')){
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	  if (res.result_jf){
		document.getElementById('ECS_GOODS_AMOUNT_jf').innerHTML = res.result_jf;
	  }
    }
    if(document.getElementById('shows_number')){
	document.getElementById('shows_number').innerHTML = res.attr_num;
    }
    if(document.getElementById('mark_price')){
	document.getElementById('mark_price').innerHTML = res.result1;
    }
  }

  
}

/**
* 获取商品范围价格
*/
function changePriceAll()
{
	var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
	Ajax.call('goods.php', 'act=allprice&id=' + goodsId + '&attr=' + attr + '&number=1', changePriceResponse, 'GET', 'JSON');
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
<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" type="text/javascript"></script>
<script>
Ajax.call('goods.php', 'act=get_pickup_info&province='+remote_ip_info.province+'&city='+remote_ip_info.city+'&district='+remote_ip_info.district+'&suppid='+suppid,
	function(res){
		if(res.error == 0) {
			var result = '<ul>';
			for(var i=0; i<res.result.length; i++)
			{
				result += '<li>店名：'+res.result[i].shop_name+'<br>联系人：'+res.result[i].contact+'&nbsp;&nbsp;联系方式：'+res.result[i].phone + '<br>地址：'+res.result[i].address+'</li>';
			}
			result += '</ul>';
			if(res.result.length > 0){
				document.getElementById('pickup_point_list').innerHTML = result;
				
			}
			else{
				document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';
				
			}
			hide_area();
			show_list();
			document.getElementById('province').innerHTML = res.city_info.province;
			document.getElementById('province').onclick = function(){
				get_area_list(<?php echo $this->_var['shop_country']; ?>, '');
			}
			document.getElementById('city').innerHTML = res.city_info.city;
			document.getElementById('city').onclick = function(){
				get_area_list(res.city_info.province_id, res.city_info.province);
			}

			
			document.getElementById('area_label').innerHTML = res.city_info.province + '&nbsp;' + res.city_info.city;
			get_area_list(res.city_info.city_id, res.city_info.city);
		}
	}, 'GET', 'JSON');
function show_list()
{
	document.getElementById('pickup_point').style.borderBottom = "1px solid #fff";
	document.getElementById('pickup_point_list').style.display = "block";
}
function hide_list()
{
	document.getElementById('pickup_point').style.borderBottom = "1px solid #ccc";
	document.getElementById('pickup_point_list').style.display = "none";
}
function get_area_list(parent_id, name)
{
	Ajax.call('goods.php', 'act=get_area_list&parent_id='+parent_id, function(res) {
		var result = '';
		for(var i=0; i<res.length; i++)
		{
			result += '<li';
			if(res[i].region_name.length>5)
				result += ' style="widht:170px;"';
			result += '><a href="javascript:void(0)" ';
			if(res[i].region_type == 3)
				result += 'onclick="get_pickup_point_list('+res[i].region_id+', this)">';
			else
				result += 'onclick="get_area_list('+res[i].region_id+', \''+res[i].region_name+'\')">';
			result+=res[i].region_name+'</a></li>';
		}
		result += '';
		document.getElementById('area_list').innerHTML = result;
		
		switch(res[0].region_type)
		{
			case '1':
				document.getElementById('province').onclick = function(){get_area_list(parent_id, name);};
				document.getElementById('city').innerHTML = '市';
				document.getElementById('district').innerHTML = '区';
				switch_hover('province');
				break;
			case '2':
				document.getElementById('city').onclick = function(){get_area_list(parent_id, name);};
				document.getElementById('province').innerHTML = name;
				//document.getElementById('city').innerHTML = '市';
				document.getElementById('district').innerHTML = '区';
				switch_hover('city');
				break;
			case '3':
				document.getElementById('city').innerHTML = name;
				document.getElementById('district').innerHTML = '区';
				switch_hover('district');
				break;
		}
		hide_list();
		//show_area();
	}, 'GET', 'JSON');
}

function switch_hover(sel)
{
	if(sel == 'province')
	{
		document.getElementById('city').className = '';
		document.getElementById('district').className = '';
		document.getElementById('province').className = 'hover';
	}
	else if(sel == 'city')
	{
		document.getElementById('city').className = 'hover';
		document.getElementById('district').className = '';
		document.getElementById('province').className = '';
	}
	else
	{
		document.getElementById('city').className = '';
		document.getElementById('district').className = 'hover';
		document.getElementById('province').className = '';
	}
}

function get_pickup_point_list(region_id, obj)
{
	var name = obj.innerHTML;
	document.getElementById('district').innerHTML = name;
	var label = document.getElementById('province').innerHTML + '&nbsp;' +
				document.getElementById('city').innerHTML + '&nbsp;' +
				document.getElementById('district').innerHTML;
	document.getElementById('area_label').innerHTML = label;
	
	Ajax.call('goods.php', 'act=get_pickup_point_list&district_id='+region_id+'&suppid='+suppid, function(res) {
		var result = '<ul>';
			if(res.length > 0)
			{
				for(var i=0; i<res.length; i++)
				{
					result += '<li>'+res[i].shop_name+'&nbsp;&nbsp;地址：'+res[i].address+
								'<br>联系人：'+res[i].contact+'&nbsp;&nbsp;联系方式：'+res[i].phone + '</li>';
				}
				result += '</ul>';
				document.getElementById('pickup_point_list').innerHTML = result;
				
			}
			else{
				document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';
				
			}
			hide_area();
			show_list();
			
			
	}, 'GET', 'JSON');
}
function show_area()
{
	document.getElementById('area_label').style.borderBottom = "1px #fff solid";
	document.getElementById('area_list_wrap').style.display = "block";
}
function hide_area()
{
	document.getElementById('area_label').style.borderBottom = "1px solid #ccc";
	document.getElementById('area_list_wrap').style.display = "none";
}
</script>
<script>
header_login();
</script>
</html>