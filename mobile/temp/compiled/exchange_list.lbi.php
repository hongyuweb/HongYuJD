
	<div class="tab">
    	<div class="tab_tit">
		<ul>
          <a href="exchange.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list"><li  class=<?php if ($this->_var['pager']['search']['sort'] == 'goods_id'): ?>curr<?php endif; ?>>上架<b></b></li></a>
          <a href="exchange.php?display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=exchange_integral&order=<?php if ($this->_var['pager']['sort'] == 'exchange_integral' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><li  class=<?php if ($this->_var['pager']['search']['sort'] == 'exchange_integral'): ?>curr<?php endif; ?>>积分<b></b></li></a>
         <a href="exchange.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list"> <li class=<?php if ($this->_var['pager']['search']['sort'] == 'last_update'): ?>curr<?php endif; ?>>更新<b></b></li></a>
          <A 
  href="exchange.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_count&order=<?php if ($this->_var['pager']['sort'] == 'click_count' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" ><li class=<?php if ($this->_var['pager']['search']['sort'] == 'click_count'): ?>curr<?php endif; ?>>人气</a><b></b></li>
        </ul>
    </div>
    </div>
<div class="layout_list">
		<?php if ($this->_var['goods_list']): ?>
        <ul class="clearfix">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_65094300_1446387283');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_65094300_1446387283']):
        $this->_foreach['goods_list']['iteration']++;
?>
      <?php if ($this->_var['goods_0_65094300_1446387283']['goods_id']): ?>
  		<li <?php if ($this->_foreach['goods_list']['iteration'] % 2 == 1): ?>class="layout_list_1"<?php endif; ?>>
        	<a href="<?php echo $this->_var['goods_0_65094300_1446387283']['url']; ?>"  class="layout_pic"><img class="err-product" src="<?php echo $this->_var['goods_0_65094300_1446387283']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_65094300_1446387283']['goods_name']); ?>"></a>
          	<div class="layout_cont">
            	<a class="layout_name"  href="<?php echo $this->_var['goods_0_65094300_1446387283']['url']; ?>"><?php echo $this->_var['goods_0_65094300_1446387283']['goods_style_name']; ?></a>
            	<div class="layout_price"><span><?php echo $this->_var['goods_0_65094300_1446387283']['exchange_integral']; ?>积分</span>
            	<a  href="<?php echo $this->_var['goods_0_65094300_1446387283']['url']; ?>" class="bid_btn">
                    立即兑换
                </a>
                </div>
          	</div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  	  </ul>
		<?php echo $this->fetch('library/pro_pages.lbi'); ?>
		<?php else: ?>
		<p class="empty"><?php echo $this->_var['lang']['goods_empty']; ?></p>
		<?php endif; ?>
	</div>