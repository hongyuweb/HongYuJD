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
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/exshangexin.css" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/group_buy.css" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
</head>
<body style="background:#FFF">
      
      <div class="tab_nav">
        <div class="header">
          <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
          <div class="h-mid">积分商城</div>
          <div class="h-right">
            <aside class="top_bar">
              <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more" ><a href="javascript:;"></a> </div>
            </aside>
          </div>
        </div>
      </div>
       	<?php echo $this->fetch('library/up_menu.lbi'); ?> 

<?php if ($this->_var['wap_exchange_ad']): ?>
<div id="scrollimg" class="scrollimg">
  <div class="bd">
    <ul>
          <?php $_from = $this->_var['wap_exchange_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_exchange_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_exchange_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_exchange_ad']['iteration']++;
?>
          <li><a href="<?php echo $this->_var['ad']['url']; ?>"><img src="<?php echo $this->_var['ad']['image']; ?>" width="100%" /></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  <div class="hd">
    <ul></ul>
  </div>
</div>
<script type="text/javascript">
        TouchSlide({ 
          slideCell:"#scrollimg",
          titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
          mainCell:".bd ul", 
          effect:"leftLoop", 
          autoPage:true,//自动分页
          autoPlay:true //自动播放
        });
      </script>
<?php endif; ?>
 <?php if ($this->_var['goods_list']): ?>

<div id="tbh5v0">
  <section class="innercontent"> 
  	<div class="main">
    <?php if ($this->_var['hot_goods']): ?>
    	
    <h3 class="sg_box_tit">火爆兑换</h3>

<ul class="product_list" id="good_list"> 
	 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>

 <li> 
 <a class="url" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"> <img src="<?php echo $this->_var['goods']['thumb']; ?>">   </a><a href="<?php echo $this->_var['goods']['url']; ?>"  class="info_wrap"> <div class="fn good"><?php echo $this->_var['goods']['name']; ?></div> <div class="price_wrap" style="border:0"> 
  <span class="price" style="display:;"><?php echo $this->_var['goods']['exchange_integral']; ?>积分</span>  </div></a>
  	<a  href="<?php echo $this->_var['goods']['url']; ?>" class="bid_btn">
                    立即兑换
                </a>
  </li>

 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
</ul>

    <?php endif; ?> 
    	<?php if (isset ( $this->_var['goods_list'] )): ?>
            <h3 class="sg_box_tit">全部兑换商品</h3>
  		<?php echo $this->fetch('library/exchange_list.lbi'); ?> 
  		<?php endif; ?> 
    </div>
  </section>
</div>
<?php else: ?>
<div class="touchweb-com_searchListBox" id="goods_list">
  <p class="goods_title">抱歉暂时没有相关商品!</p>
 
</div>
<?php endif; ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</div>
</body>

</html>