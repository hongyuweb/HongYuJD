<?php if ($this->_var['best_goods']): ?>
<div class="m" id="i-right">
  <div id="hotsale" class="hot-sales-main">
    <div class="hd">热卖推荐</div>
    <div class="mc list-h">
      <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['best_goods']['iteration']++;
?>
      <dl>
        <dt><a target="_blank" href='<?php echo $this->_var['goods']['url']; ?>'><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="100" height="100" alt='<?php echo htmlspecialchars($this->_var['goods']['name']); ?>' /></a></dt>
        <dd>
          <div class="p-name"><a target="_blank" href='<?php echo $this->_var['goods']['url']; ?>'><?php echo sub_str($this->_var['goods']['name'],20); ?></a></div>
          <div class="p-price" >特价：<font class="shop_price" style="font-size:14px; color:#DD0000; font-weight:bold;">
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <?php echo $this->_var['goods']['promote_price']; ?>
            <?php else: ?>
            <?php echo $this->_var['goods']['shop_price']; ?>
            <?php endif; ?>
            </font></div>
          <div class="btns"><a href='<?php echo $this->_var['goods']['url']; ?>'>查看详情</a></div>
        </dd>
      </dl>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
  <div id="market" class="hot-sales-act">
    <div class="hd"> 促销活动</div>
    <div class="mc">
      <ul>
        <?php if ($this->_var['promotion_info']): ?>
        <?php $_from = $this->_var['promotion_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
        <?php if ($this->_foreach['name']['iteration'] < 8): ?>
        <li>·
          <?php if ($this->_var['item']['type'] == "snatch"): ?>
          <a href="snatch.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['snatch_promotion']; ?></a>
          <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
          <a href="group_buy.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['group_promotion']; ?></a>
          <?php elseif ($this->_var['item']['type'] == "auction"): ?>
          <a href="auction.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['auction_promotion']; ?></a>
          <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
          <a href="activity.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['favourable_promotion']; ?></a>
          <?php elseif ($this->_var['item']['type'] == "package"): ?>
          <a href="package.php" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?>"><?php echo $this->_var['lang']['package_promotion']; ?></a>
          <?php endif; ?>
          <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="background:none; padding-left:0px;"><?php echo $this->_var['item']['act_name']; ?></a> </li>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>
