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
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/<?php echo $this->_var['cat_style']; ?>" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery_006.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/search_goods.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/base-2011.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-lazyload.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<div id="site-nav"> 
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="first-show"> 
  <?php echo $this->fetch('library/ad.lbi'); ?>
    <div class="w">
      <div id="main-nav" class="mainnav">
        <div class="navbox">
          <div class="float-list" id="float-list"> 
            <?php $_from = get_categories_tree(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat0']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat0']['iteration']++;
?> 
            <?php if ($this->_var['current_cat_pr_id'] == $this->_var['cat']['id']): ?> 
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
            <?php if ($this->_foreach['namechild']['iteration'] < 14): ?> 
            <dl style="background: none repeat scroll 0% 0% rgb(240, 240, 240);" id="webf<?php echo $this->_foreach['namechild']['iteration']; ?>">
              <dt> 
                <p>
                	<a class="child" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                    <span>
                    <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['childer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childer']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['childer']['iteration']++;
?> 
                    <?php if ($this->_foreach['childer']['iteration'] < 3): ?> 
                 	 <a href="<?php echo $this->_var['childer']['url']; ?>" title="<?php echo $this->_var['childer']['name']; ?>"><?php echo $this->_var['childer']['name']; ?></a> 
                    <?php endif; ?> 
                  	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </span>
                </p>
                <b class="arrow-right"></b> 
              </dt>
              <dd style="top: 0px; min-height:108px;">
                <ul class="secondlist">
                  <li> 
                    <div class="float-list-cont"> 
                      <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> 
                      <a href="<?php echo $this->_var['childer']['url']; ?>" class="" title="<?php echo $this->_var['childer']['name']; ?>"><?php echo $this->_var['childer']['name']; ?></a> 
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                  </li>
                </ul>
              </dd>
            </dl>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </div>
        </div>
      </div>
      <script type="text/javascript" src="themes/68ecshopcom_360buy/js/categories_nav.js"></script>
      <div id="brand-reco" style="display:none">
      	<script type="text/javascript">
$(document).ready(function(){
  var a = $(".mc ul").children("li");
  var b = $("#brand-reco"); 
  if($(a).length > 0){ 
		b.css({"display":"block"});

	} 
	else{ 
		b.css({"display":"none"});
	} 
});
</script>
        <div class="mt">
                    <div class="m-title fl">
                       <img width="210" height="40" alt="品牌推荐" src="themes/68ecshopcom_360buy/images/upgrade_ad/caregory_index_ad1.jpg" >
                    </div>
                </div>        
        <div class="mc">
                    <ul class="fore0">
                     <?php
		 				$GLOBALS['smarty']->assign('index_image1',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片1', 1));
	  				 ?>
      					<?php $_from = $this->_var['index_image1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
                         <li class="fore0">
                             <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" >
                                  <img width="248" height="484" data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" >
                             </a>
                         </li>
                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                          <?php
		 				$GLOBALS['smarty']->assign('index_image2',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片2', 1));
	  				 ?>
      					<?php $_from = $this->_var['index_image2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
                         <li class="fore1">
                             <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" >
                                  <img width="248" height="484" data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif">
                             </a>
                         </li>
                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                         </li>
                    </ul>
                    <ul class="fore1">
                    <?php
		 				$GLOBALS['smarty']->assign('index_image3',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片3', 6));
	  				 ?>
      					<?php $_from = $this->_var['index_image3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
                         <li class="fore<?php echo ($this->_foreach['index_image']['iteration'] - 1); ?>">
                                    <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank">
                                        <img width="247" height="241" data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif">
                                    </a>
                         </li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                       </ul>
                </div>
      </div>  
    </div>
  </div>
  <div class="blank10"></div>
  
  <?php $_from = $this->_var['childcat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
  <div id="trends" class="m m3 floorWrapper floorWrapper<?php echo $this->_foreach['name']['iteration']; ?>">
      <div class="mt">
      <h2><?php echo $this->_foreach['name']['iteration']; ?>F<span><?php echo $this->_var['cat']['cat_name']; ?></span></h2>
      <?php
			$GLOBALS['smarty']->assign('child_cat',get_subcat_list($GLOBALS['smarty']->_var['cat']['cat_id']));
	    ?>
      <div class="key"> 
        <?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat1');$this->_foreach['name112'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name112']['total'] > 0):
    foreach ($_from AS $this->_var['cat1']):
        $this->_foreach['name112']['iteration']++;
?> 
        <?php if ($this->_foreach['name112']['iteration'] < 6): ?> 
        <a target="_blank" href="<?php echo $this->_var['cat1']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat1']['cat_name']); ?></a><?php if (($this->_foreach['name112']['iteration'] == $this->_foreach['name112']['total'])): ?><?php else: ?>&nbsp;⋅&nbsp;<?php endif; ?> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank" title="更多<?php echo $this->_var['cat']['cat_name']; ?>" class="category_more">更多&nbsp;&gt;</a> 
      </div>
    </div>        
        <div class="mc">
         <?php
$GLOBALS['smarty']->assign('index_xiao_you',get_advlist('频道页面-小分类ID'.$GLOBALS['smarty']->_var['cat']['cat_id'].'-广告', 1));
?>
           <ul class="fore0">
                        <li class="fore0">
                        <?php $_from = $this->_var['index_xiao_you']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?> 
        					<a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title=""><img data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" alt="" width="492" height="484"/></a> 
        				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        </li>
           </ul>
           <ul class="lh fore1">
                    <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'catgoods');$this->_foreach['cat_children'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_children']['total'] > 0):
    foreach ($_from AS $this->_var['catgoods']):
        $this->_foreach['cat_children']['iteration']++;
?>
                        <li class="fore<?php echo ($this->_foreach['cat_children']['iteration'] - 1); ?>" id="li_<?php echo $this->_var['catgoods']['goods_id']; ?>">
                           <a class="add_to_cart" href="javascript:addToCart(<?php echo $this->_var['catgoods']['goods_id']; ?>)" title="加入购物车"></a>
                           <a href="<?php echo $this->_var['catgoods']['url']; ?>" title='<?php echo htmlspecialchars($this->_var['catgoods']['goods_name']); ?>' target="_blank">
                               <img width="150" height="150" alt="<?php echo htmlspecialchars($this->_var['catgoods']['goods_name']); ?>"  data-original="<?php echo $this->_var['catgoods']['goods_thumb']; ?>"  src="themes/68ecshopcom_360buy/images/loading.gif"  class="pic_img_<?php echo $this->_var['catgoods']['goods_id']; ?>" >
                           </a>
                           <p>
                           	   <a href="<?php echo $this->_var['catgoods']['url']; ?>" title='<?php echo htmlspecialchars($this->_var['catgoods']['goods_name']); ?>' target="_blank" class="itemName"> <?php echo $this->_var['catgoods']['goods_id']; ?><?php echo $this->_var['catgoods']['goods_name']; ?></a>
                           </p> 
         			       <div class="priceSection">
            					<div class="priceNumber"> 
                                	<span class="mainPrice"> 
                                    <?php if ($this->_var['catgoods']['promote_price'] > 0): ?>
              						<?php echo $this->_var['catgoods']['promote_price']; ?>
              						<?php else: ?>
              						<?php echo $this->_var['catgoods']['shop_price']; ?>
              						<?php endif; ?>
                                    </span> 
                                    <span class="subPrice"><del><?php echo $this->_var['catgoods']['market_price']; ?></del></span> 
            				</div>
                            </div>
                        </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </ul>
        </div>
  </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="blank"></div>
<?php echo $this->fetch('library/history.lbi'); ?>
<div class="blank"></div>
<?php echo $this->fetch('library/help.lbi'); ?> 
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<?php echo $this->fetch('library/site_bar.lbi'); ?>
</div>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/lib-v1.js"></script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
}
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
<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script>
</body>
</html>