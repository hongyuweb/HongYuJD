<div id="brand-bar-pop">
  <dl id="zy_shop" style="border-bottom:1px solid #ddd; text-align:center;padding-top:13px;padding-bottom:12px;*padding-top:12px;*padding-bottom:9px;">
    <dt class="shop_title">卖家：<span style="color:#333333">平台自营</span></dt>
    <div class="ghs_clear"></div>
    <dd></dd>
  </dl>
  <dl id="hotline" style="padding-top:5px;">
    <dt >商家名称&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['shop_name']; ?></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <dl id="hotline">

    <dt >客 服 QQ&nbsp;&nbsp;&nbsp;&nbsp;<em>

     <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
<?php if ($this->_var['im']): ?>
    <a href="http://wpa.qq.com/msgrd?V=1&amp;uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /></a>
<?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </em></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <dl id="hotline">

    <dt >客服旺旺&nbsp;&nbsp;&nbsp;&nbsp;<em>

    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
<?php if ($this->_var['im']): ?>
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /></a>
<?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </em></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php if ($this->_var['service_email']): ?>
  <dl id="hotline">
    <dt>客服邮件&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><?php echo $this->_var['service_email']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>
  <?php if ($this->_var['service_phone']): ?>
  <dl id="hotline">
    <dt>客服电话&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><?php echo $this->_var['service_phone']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>
  <dl id="hotline">
    <dt>所在地区：</dt>
    <dd><?php echo $this->_var['shop_address']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
    
  
  
  <div id="enter-shop"> 
      <div id="attention-shop" style="border-top: 1px dotted #C6C6C6;margin: 0px 10px;">
    	<p>扫一扫，手机访问微商城</p>
	<img src="erweima_supplier.php?sid=0" width="120" height="120" />
    </div>
 </div>
</div>
