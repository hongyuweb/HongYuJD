<?php if ($this->_var['new_goods']): ?>
<div class="m m2 collect">
	<div class="mt">
    	<h2>最近上新</h2>
    </div>
    <div class="mc colList" style="max-height:512px;"> 
      <div class="slider colFrame" id="slider">
        <ul style="left: 0px;">
          <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_82237800_1446387094');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_82237800_1446387094']):
        $this->_foreach['new_goods']['iteration']++;
?>
           <li  <?php if ($this->_foreach['new_goods']['iteration'] == 1): ?> style="border-top:none;" <?php endif; ?> >
            <div class="p-img"><a href="<?php echo $this->_var['goods_0_82237800_1446387094']['url']; ?>"><img width="100" height="100" alt="<?php echo $this->_var['goods_0_82237800_1446387094']['name']; ?>"  src="<?php echo $this->_var['goods_0_82237800_1446387094']['thumb']; ?>"/></a></div>
            <div class="rate"><a href="<?php echo $this->_var['goods_0_82237800_1446387094']['url']; ?>" title="<?php echo $this->_var['goods_0_82237800_1446387094']['name']; ?>"><?php echo sub_str($this->_var['goods_0_82237800_1446387094']['name'],12); ?></a></div>
            <div class="p-price"><strong> 
              <?php if ($this->_var['goods_0_82237800_1446387094']['promote_price'] != 0): ?> 
              <?php echo $this->_var['goods_0_82237800_1446387094']['formated_promote_price']; ?> 
              <?php else: ?> 
              <?php echo $this->_var['goods_0_82237800_1446387094']['shop_price']; ?> 
              <?php endif; ?> 
              </strong></div>
            </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <a id="btn-left"  class="prev" title="上一个" onclick="top2()"></a>
      <a id="btn-right" class="next" title="下一个" onclick="bottom2()"></a> 
    </div>
    <script type="text/javascript">
 var _scrolling="";
var a=1;
var $slider = $('.slider ul');
var $slider_child_l = $('.slider ul li').length;
var $slider_height = $('.slider ul li').height();
$slider.height($slider_child_l * $slider_height);

var slider_count = 0;
if ($slider_child_l <=3) {
	$('#btn-right').css({cursor: 'auto'});
	$('#btn-right').removeClass("dasabled");
}
var time="";
function bottom1(){
	if (slider_count >= $slider_child_l - 3){
		a=0;
		top1();
	}else{
		slider_count++;
		$slider.animate({top: '-=' + $slider_height + 'px'}, 'slow');	
		slider_pic();
		time = setTimeout("bottom1()",5000);
	}
}
function top1(){
	if (slider_count <= 0) {
		a=1;
		bottom1();	
	}else{
		slider_count--;
		$slider.animate({top: '+=' + $slider_height + 'px'}, 'slow');
		slider_pic();
		time = setTimeout("top1();",5000);
	}
}
function bottom2(){
	if (slider_count >= $slider_child_l - 3){
		return false;
	}else{
		slider_count++;
		$slider.animate({top: '-=' + $slider_height + 'px'}, 'slow');	
		slider_pic();
	}
}
function top2(){
	if (slider_count <= 0) {
		return false;
	}else{
		slider_count--;
		$slider.animate({top: '+=' + $slider_height + 'px'}, 'slow');
		slider_pic();
	}
}

function slider_pic() {
	if (slider_count >= $slider_child_l - 3) {
		$('#btn-right').css({cursor: 'auto'});
		$('#btn-right').addClass("dasabled");
	}
	else if (slider_count > 0 && slider_count <= $slider_child_l - 3) {
		$('#btn-left').css({cursor: 'pointer'});
		$('#btn-left').removeClass("dasabled");
		$('#btn-right').css({cursor: 'pointer'});
		$('#btn-right').removeClass("dasabled");
	}
	else if (slider_count <= 0) {
		$('#btn-left').css({cursor: 'auto'});
		$('#btn-left').addClass("dasabled");
	}
}
$(function(){
	bottom1();
	$("#slider>ul").hover(function(){
		//鼠标移动DIV上停止
		clearTimeout(time);
	},function(){
		//离开继续调用
		if(a==1){
			bottom1();
		}else if(a==0){
			top1();
		}
	});
	
});

</script> 
</div>
<?php endif; ?>
