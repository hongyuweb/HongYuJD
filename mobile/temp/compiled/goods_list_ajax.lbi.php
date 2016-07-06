<?php if ($this->_var['goods']['goods_id']): ?>

<li>
<a href="<?php echo $this->_var['goods']['url']; ?>" class="item">
<div class="pic_box">
<div class="active_box">
<?php if ($this->_var['goods']['is_best'] == 1): ?>
<span style=" background-position:0px -70px">精品</span>
<?php elseif ($this->_var['goods']['is_new'] == 1): ?>
<span style=" background-position:0px -36px">新品</span>
<?php elseif ($this->_var['goods']['is_hot'] == 1): ?>
<span style=" background-position:0px 0px">热卖</span>
<?php endif; ?>
</div>

<img src="<?php echo $this->_var['goods']['goods_thumb']; ?>">
</div>
<div class="title_box">
<?php echo $this->_var['goods']['name']; ?>
</div>
<div class="price_box">
<span class="new_price">
<i><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></i>
</span>

</div>
<div class="comment_box">
已售<?php echo $this->_var['goods']['wap_count']; ?>
</div>
</a>

<div class="ui-number b"> 
<a class="decrease" onclick="goods_cut(<?php echo $this->_var['goods']['goods_id']; ?>);">-</a>
<input class="num" id="number_<?php echo $this->_var['goods']['goods_id']; ?>" type="text" onblur="changePrice();" value="1" onfocus="if(value=='1') {value=''}" size="4" maxlength="5"  />
<a class="increase" onclick="goods_add(<?php echo $this->_var['goods']['goods_id']; ?>);">+</a> 
</div>

<span class="bug_car" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
<i class="icon-shop_cart"></i>
</span>

</li>

<?php endif; ?>
	
