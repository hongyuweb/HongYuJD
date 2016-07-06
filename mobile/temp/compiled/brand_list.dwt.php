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
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css">
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/brand_list.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js')); ?>
</head>
<body>

<header class="header">
  <div class="tab_nav">
    <div class="header">
      <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
      <div class="h-mid">品牌街</div>
      <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        </aside>
      </div>
    </div>
  </div>
</header>
<?php echo $this->fetch('library/up_menu.lbi'); ?>  
 

 
<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
    	<?php if ($this->_var['brand_data']['brand_img']): ?>
<div class="u-brand">
  <div class="p-relative"> <a href="<?php echo $this->_var['brand_data']['url']; ?>"> <img src="<?php echo $this->_var['brand_data']['brand_img']; ?>"> </a></div>
  <div class="u-brand-msg e-border-b clearfix">
    <p class="u-brand-name"><span class="u-brand-discount"><span class="salebg2"><?php echo $this->_var['brand_data']['brand_name']; ?></span></span><?php echo $this->_var['brand_data']['wap_brand_desc']; ?></p>
  </div>
</div>
<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 



<div class="ccontainer">
  <div class="brand-title">
    <h3 >推荐品牌</h3>
  </div>
  <?php
          $child_cat_index = 0;
          $GLOBALS['smarty']->assign('child_cat_index', $child_cat_index);
?>
  <div class="jxyh_logo clearfix"> <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
    <?php if ($this->_var['brand_data']['brand_logo'] && ! $this->_var['brand_data']['brand_img']): ?>
    <?php
$child_cat_index = $child_cat_index +1;
$GLOBALS['smarty']->assign('child_cat_index', $child_cat_index);
	?>
    <a href="<?php echo $this->_var['brand_data']['url']; ?>" <?php if ($this->_var['child_cat_index'] % 4 != 0): ?>class="brandLink"<?php else: ?>class="brandRightLink"<?php endif; ?>> <img src="<?php echo $this->_var['brand_data']['brand_logo']; ?>" alt="<?php echo $this->_var['brand_data']['brand_name']; ?>" width="100%"> </a> <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
  <?php
          $child_cat_index = 0;
          $GLOBALS['smarty']->assign('child_cat_index1', $child_cat_index);
?>
  <div class="brand_bd clearfix"> <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
    <?php if (! $this->_var['brand_data']['brand_logo'] && ! $this->_var['brand_data']['brand_img']): ?>
    <?php
$child_cat_index = $child_cat_index1 +1;
$GLOBALS['smarty']->assign('child_cat_index1', $child_cat_index);
	?>
    <a href="<?php echo $this->_var['brand_data']['url']; ?>" <?php if ($this->_var['child_cat_index1'] % 4 != 0): ?>class="brandLink"<?php else: ?>class="brandRightLink"<?php endif; ?>><?php echo $this->_var['brand_data']['brand_name']; ?></a> <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
</div>

<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a> 

<div style="height:12px; line-height:12px; clear:both;"></div>
<footer> <?php echo $this->fetch('library/page_footer.lbi'); ?> <?php echo $this->fetch('library/footer_nav.lbi'); ?> </footer>
</body>
</html>