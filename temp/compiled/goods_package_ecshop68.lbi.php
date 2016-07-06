<?php if ($this->_var['package_goods_list_120']): ?>
<div class="package">
	<div class="pa_tit" id="package_tit">
	<?php $_from = $this->_var['package_goods_list_120']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_item');$this->_foreach['pa_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list']['total'] > 0):
    foreach ($_from AS $this->_var['pa_item']):
        $this->_foreach['pa_list']['iteration']++;
?>
	<h2 <?php if ($this->_foreach['pa_list']['iteration'] == 1): ?>class="current"<?php endif; ?>>优惠套餐<?php echo $this->_foreach['pa_list']['iteration']; ?></h2>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="pa_box clearfix" >		
		<?php $_from = $this->_var['package_goods_list_120']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_item');$this->_foreach['pa_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list']['total'] > 0):
    foreach ($_from AS $this->_var['pa_item']):
        $this->_foreach['pa_list']['iteration']++;
?>
		<div id="package_box_<?php echo ($this->_foreach['pa_list']['iteration'] - 1); ?>" <?php if (($this->_foreach['pa_list']['iteration'] - 1) > 0): ?>class="none"<?php endif; ?>>
		<ul >
			<?php $_from = $this->_var['pa_item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_goods');$this->_foreach['pa_list_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list_goods']['total'] > 0):
    foreach ($_from AS $this->_var['pa_goods']):
        $this->_foreach['pa_list_goods']['iteration']++;
?>
			<li <?php if (($this->_foreach['pa_list_goods']['iteration'] == $this->_foreach['pa_list_goods']['total'])): ?>class="last"<?php endif; ?>>
			<a href="goods.php?id=<?php echo $this->_var['pa_goods']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['pa_goods']['goods_name']; ?>">
			<img src="<?php echo $this->_var['pa_goods']['goods_thumb']; ?>" class="B_eee" >
			</a>
			<a href="goods.php?id=<?php echo $this->_var['pa_goods']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['pa_goods']['goods_name']; ?>">
			<?php echo sub_str($this->_var['pa_goods']['goods_name'],12); ?><?php echo $this->_var['pa_goods']['goods_attr_str']; ?>
			</a>
			
			<font color=#e4393c><?php echo $this->_var['pa_goods']['rank_price_zk_format']; ?>  </font>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div class="buypack">
			<?php echo $this->_var['lang']['old_price']; ?><font class="f_yuan" id="price_yuan_<?php echo ($this->_foreach['pa_list']['iteration'] - 1); ?>"><?php echo $this->_var['pa_item']['subtotal']; ?></font><br />
			<strong><font class="f_pack1" >套餐价：</font></strong><font class="f_pack" id="price_pack_<?php echo ($this->_foreach['pa_list']['iteration'] - 1); ?>"><?php echo $this->_var['pa_item']['package_price']; ?></font><br />
			<?php echo $this->_var['lang']['then_old_price']; ?><font class="f_save" id="price_save_<?php echo ($this->_foreach['pa_list']['iteration'] - 1); ?>"><?php echo $this->_var['pa_item']['saving']; ?> </font><br />
			<a class="btn_pack" onClick="javascript:addPackageToCart(<?php echo $this->_var['pa_item']['act_id']; ?>, <?php echo ($this->_foreach['pa_list']['iteration'] - 1); ?>)" title="购买此套餐">购买此套餐</a>	
		</div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>	   
</div>
<div class="blank"></div>
<script type="text/javascript">
reg_package();
</script>
<?php endif; ?>