<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $this->_var['page_title']; ?></title>
  <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
  <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
  <link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/group_buy.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>

<script >
var Tday = new Array();
var daysms = 24 * 60 * 60 * 1000
var hoursms = 60 * 60 * 1000
var Secondms = 60 * 1000
var microsecond = 1000
var DifferHour = -1
var DifferMinute = -1
var DifferSecond = -1

function clock11(key)
{
   var time = new Date()
   var hour = time.getHours()
   var minute = time.getMinutes()
   var second = time.getSeconds()
   var timevalue = ""+((hour > 12) ? hour-12:hour)
   timevalue +=((minute < 10) ? ":0":":")+minute
   timevalue +=((second < 10) ? ":0":":")+second
   timevalue +=((hour >12 ) ? " PM":" AM")
   var convertHour = DifferHour
   var convertMinute = DifferMinute
   var convertSecond = DifferSecond
   var Diffms = Tday[key].getTime() - time.getTime()
   DifferHour = Math.floor(Diffms / daysms)
   Diffms -= DifferHour * daysms
   DifferMinute = Math.floor(Diffms / hoursms)
   Diffms -= DifferMinute * hoursms
   DifferSecond = Math.floor(Diffms / Secondms)
   Diffms -= DifferSecond * Secondms
   var dSecs = Math.floor(Diffms / microsecond)
  
	if(convertHour != DifferHour) e="<span class=hour>"+DifferHour+"</span>天";
   if(convertMinute != DifferMinute) f="<span class=min>"+DifferMinute+"</span>时";
   if(convertSecond != DifferSecond) g="<span class=sec>"+DifferSecond+"</span>分";
     h="<span class=msec>"+dSecs+"</span>秒";
	 

	 
	 
     if (DifferHour>0) {e=e}
     else {e=''}
	 
	 
      document.getElementById("jstimerBox"+key).innerHTML = e + f + g + h; 
}

</script>
</head>
<body style="background:#FFF;">
   
      <div class="tab_nav">
        <div class="header">
          <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
          <div class="h-mid">今日团购</div>
          <div class="h-right">
            <aside class="top_bar">
              <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
            </aside>
          </div>
        </div>
      </div>
       	<?php echo $this->fetch('library/up_menu.lbi'); ?> 
        
        
 
  <?php $_from = $this->_var['wap_group_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_group_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_group_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_group_ad']['iteration']++;
?>
<div class="u-brand">
  <div class="p-relative"> <a href="<?php echo $this->_var['ad']['url']; ?>" class="u-brand-pic J_item-list"> <img src="<?php echo $this->_var['ad']['image']; ?>" class="BrandMer_star"> </a>
  <?php if ($this->_var['ad']['link_email']): ?><div class="u-brand-pms"><?php echo $this->_var['ad']['link_email']; ?></div><?php endif; ?>
  </div>
  <div class="u-brand-msg e-border-b clearfix">
    <p class="u-brand-name f-left"><span class="u-brand-discount"><span class="salebg2"><?php echo $this->_var['ad']['link_man']; ?></span></span><?php echo $this->_var['ad']['name']; ?></p>
    <div class="u-brand-time f-right">剩<?php echo $this->_var['ad']['ss_time']; ?></div>
  </div>
</div>

    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 



<h3 class="sg_box_tit">今日团购</h3>

<ul class="product_list" id="good_list"> 
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
<?php if ($this->_var['goods']['goods_id']): ?>
 <li> 
 <a class="url" href="<?php echo $this->_var['goods']['url']; ?>"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>">   </a>
 <a href="<?php echo $this->_var['goods']['url']; ?>"  class="info_wrap">
  <div class="fn good"><?php echo $this->_var['goods']['goods_name']; ?></div>
  <div class="price_wrap"> 
 <i class="discount"  style="display:;"><?php echo $this->_var['goods']['zhekou']; ?>折</i> <span class="price" style="display:;"><?php echo $this->_var['goods']['promote_price']; ?></span> <del class="old_price"  style="display:;"><?php echo $this->_var['goods']['shop_price']; ?></del> 
 </div> 
 <div class="bottom_info">
 <span class="remain_num" style="display:;">已售<?php echo $this->_var['goods']['count1']; ?>件</span>
  <?php if ($this->_var['goods']['goods_number'] > 0): ?> <span class="sg_g_time last_g_time" id="jstimerBox<?php echo $this->_var['key']; ?>"></span><?php endif; ?></div> 
  </a>  
  
  <?php if ($this->_var['goods']['goods_number'] <= 0): ?>
 <i class="icon_state"></i> 
 <?php endif; ?> </li>
      <script>
Tday[<?php echo $this->_var['key']; ?>] = new Date("<?php echo $this->_var['goods']['gmt_end_time']; ?>");  
window.setInterval(function()    
{clock11(<?php echo $this->_var['key']; ?>);}, 1000);  
</script> 
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
</ul>
<?php echo $this->fetch('library/pages.lbi'); ?>

<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a> 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</body>
</html>