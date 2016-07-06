<?php if ($this->_var['best_goods']): ?>
<div class="clearfix"></div> 
<div class="goods_best">
	<div class="mt">
    	<h2>推荐精品</h2>
    </div>
    <div class="colList"> 
     <a id="btn-left1"  class="prev" title="上一个" onclick="top4()"><img src="themes/68ecshopcom_360buy/images/upgrade_ad/goods_best_l.png" /></a>
      <div class="slider1 colFrame" >
		<ul>
      	<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78773500_1446387094');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_78773500_1446387094']):
        $this->_foreach['best_goods']['iteration']++;
?>
    		<li>
            	<div class="p-img"><a href="<?php echo $this->_var['goods_0_78773500_1446387094']['url']; ?>" title="<?php echo $this->_var['goods_0_78773500_1446387094']['name']; ?>"><img width="160" height="160" alt="<?php echo $this->_var['goods_0_78773500_1446387094']['name']; ?>"  src="<?php echo $this->_var['goods_0_78773500_1446387094']['thumb']; ?>"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	<?php if ($this->_var['goods_0_78773500_1446387094']['promote_price'] != 0): ?> 
              	<?php echo $this->_var['goods_0_78773500_1446387094']['formated_promote_price']; ?> 
              	<?php else: ?> 
              	<?php echo $this->_var['goods_0_78773500_1446387094']['shop_price']; ?> 
              	<?php endif; ?> 
              	</strong>
                </div>
                <div class="rate"><a href="<?php echo $this->_var['goods_0_78773500_1446387094']['url']; ?>" title="<?php echo $this->_var['goods_0_78773500_1446387094']['name']; ?>"><?php echo sub_str($this->_var['goods_0_78773500_1446387094']['name'],12); ?></a></div>
                </div>
            </li>
      	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    	</ul>
      </div>
     <a id="btn-right1" class="next" title="下一个" onclick="bottom4()"><img src="themes/68ecshopcom_360buy/images/upgrade_ad/goods_best_r.png" /></a> 
    </div>
    <script type="text/javascript">
 var _scrolling="";
var a=1;
var $slider1 = $('.slider1 ul');
var $slider1_child_l = $('.slider1 ul li').length;
var $slider1_width = $('.slider1 ul li').width();
$slider1.width($slider1_child_l * $slider1_width);

var slider1_count = 0;
if ($slider1_child_l <=6) {
	$('#btn-right1').css({cursor: 'auto'});
	$('#btn-right1').removeClass("dasabled");
}
var time="";
function bottom3(){
	if (slider1_count >= $slider1_child_l - 6){
		a=0;
		top1();
	}else{
		slider1_count++;
		$slider1.animate({left: '-=' + $slider1_width + 'px'}, 'slow');	
		slider1_pic();
		time = setTimeout("bottom3()",5000);
	}
}
function top3(){
	if (slider1_count <= 0) {
		a=1;
		bottom1();	
	}else{
		slider1_count--;
		$slider1.animate({left: '+=' + $slider1_width + 'px'}, 'slow');
		slider1_pic();
		time = setTimeout("top3();",5000);
	}
}
function bottom4(){
	if (slider1_count >= $slider1_child_l - 6){
		return false;
	}else{
		slider1_count++;
		$slider1.animate({left: '-=' + $slider1_width + 'px'}, 'slow');	
		slider1_pic();
	}
}
function top4(){
	if (slider1_count <= 0) {
		return false;
	}else{
		slider1_count--;
		$slider1.animate({left: '+=' + $slider1_width + 'px'}, 'slow');
		slider1_pic();
	}
}

function slider1_pic() {
	if (slider1_count >= $slider1_child_l - 6) {
		$('#btn-right1').css({cursor: 'auto'});
		$('#btn-right1').addClass("dasabled");
	}
	else if (slider1_count > 0 && slider1_count <= $slider1_child_l - 6) {
		$('#btn-left1').css({cursor: 'pointer'});
		$('#btn-left1').removeClass("dasabled");
		$('#btn-right1').css({cursor: 'pointer'});
		$('#btn-right1').removeClass("dasabled");
	}
	else if (slider1_count <= 0) {
		$('#btn-left1').css({cursor: 'auto'});
		$('#btn-left1').addClass("dasabled");
	}
}

</script>
</div>
<?php endif; ?> 