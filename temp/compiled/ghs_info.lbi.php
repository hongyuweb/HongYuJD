
<div id="brand-bar-pop"> 
<input type="hidden" id="chat_supp_id" value="<?php echo $this->_var['suppid']; ?>" />
  <?php if ($this->_var['shopname']): ?>
  <dl id="ghs_shop" style="border-bottom:1px solid #ddd; padding-bottom:5px; text-align:center;padding-top:13px;padding-bottom:12px;*padding-top:12px;*padding-bottom:9px;">
    <dt class="shop_title">卖家：<a href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>" target="_blank" style="color:#333333"> <?php echo $this->_var['shopname']; ?></a></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php endif; ?>
  
  <dl id="hotline">
    <dt>好评率&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><span class="hot_grey"><span class="hot_red" style="width:<?php if ($this->_var['haoping'] > 0): ?><?php echo $this->_var['haoping']; ?>%<?php else: ?>100%<?php endif; ?>;"></span></span></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <ul class="score_detail">
  	<li style="border-left:0;">
    	<span>描述</span>
        <span class="scores"><?php if ($this->_var['c_rank'] > 0): ?><?php echo $this->_var['c_rank']; ?><?php else: ?>5.0<?php endif; ?></span>
    </li>
    <li>
    	<span>服务</span>
        <span class="scores"><?php if ($this->_var['serv_rank'] > 0): ?><?php echo $this->_var['serv_rank']; ?><?php else: ?>5.0<?php endif; ?></span>
    </li>
    <li>
    	<span>物流</span>
        <span class="scores"><?php if ($this->_var['shipp_rank'] > 0): ?><?php echo $this->_var['shipp_rank']; ?><?php else: ?>5.0<?php endif; ?></span>
    </li>
  </ul>
  <?php if ($this->_var['suppliername']): ?>
  <dl id="hotline" style="padding-top:10px;">
    <dt >商家名称&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['suppliername']; ?></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php endif; ?>
    <?php if ($this->_var['userrank']): ?>
  <dl id="hotline">
    <dt >商店等级：<?php echo $this->_var['userrank']; ?></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php endif; ?> 
  <?php if ($this->_var['serviceqq']): ?>
  <dl id="hotline">
    <dt >客 服 QQ&nbsp;&nbsp;&nbsp;&nbsp;<em><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['serviceqq']; ?>&site=qq&menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['serviceqq']; ?>:4" height="16" border="0" alt="QQ" /></a></em></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php endif; ?>
  <?php if ($this->_var['serviceww']): ?>
  <dl id="hotline">
    <dt >客服旺旺&nbsp;&nbsp;&nbsp;&nbsp;<em><a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo $this->_var['serviceww']; ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo $this->_var['serviceww']; ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /></a></em></dt>
    <dd > </dd>
    <div class="ghs_clear"></div>
  </dl>
  <?php endif; ?>
 <!-- <?php if ($this->_var['serviceemail']): ?>
  <dl id="hotline">
    <dt>客服邮件&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><?php echo $this->_var['serviceemail']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>--><?php if ($this->_var['servicephone']): ?>
  <dl id="hotline">
    <dt>客服电话&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><?php echo $this->_var['servicephone']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>
  <?php if ($this->_var['region']): ?>
  <dl id="hotline">
    <dt>所在地区&nbsp;&nbsp;&nbsp;&nbsp;</dt>
    <dd><?php echo $this->_var['region']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>
  <!--<?php if ($this->_var['createtime']): ?>
  <dl id="hotline">
    <dt>创店时间：</dt>
    <dd><?php echo $this->_var['createtime']; ?></dd>
    <dd class="ghs_clear"></dd>
  </dl>
  <?php endif; ?>-->
  <div id="enter-shop"> 
  	<div class="shop_follow_item clearfix">
    <a class="btn_flat1 btn_goto_shop" href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>" target="_blank">
        进入商店
    </a>
    <a class="btn_flat1 btn_shop_add" href="javascript:guanzhu(<?php echo $this->_var['goods']['supplier_id']; ?>);">
        关注本店
    </a>
	</div>
    <div id="attention-shop">
    	<p>扫一扫，手机访问店铺</p>
	<img src="erweima_supplier.php?sid=<?php echo $this->_var['suppid']; ?>" width="120" height="120" />
    </div>
  </div>
<script>
function guanzhu(sid){
	Ajax.call('supplier.php', 'go=other&act=add_guanzhu&suppId=' + sid, selcartResponse, 'GET', 'JSON');
}

function selcartResponse(result){
	alert(result.info);
}
</script>