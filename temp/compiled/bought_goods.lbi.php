<?php if ($this->_var['bought_goods']): ?>
<div  class="m m2 related-buy">
  <div class="mt">
    <h2>购买了该商品的用户还购买了</h2>
  </div>
  <div class="mc">
    <ul>
      <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
      <li <?php if ($this->_foreach['bought_goods']['iteration'] == 1): ?>style="border-top:none;" <?php endif; ?>>
        <div class="p-img">
        	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>">
            	<img width="100" height="100" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"  src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>"/>
            </a>
        </div>
        <div class="rate"> 
        	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['bought_goods_data']['goods_name']); ?>"><?php echo $this->_var['bought_goods_data']['goods_name']; ?></a> 
        </div>
        <div class="p-price"><strong> 
          <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?> 
          <?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?> 
          <?php else: ?> 
          <?php echo $this->_var['bought_goods_data']['shop_price']; ?> 
          <?php endif; ?> 
          </strong></div>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
</div>
<?php endif; ?> 

