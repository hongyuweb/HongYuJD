<div class="my_comment_pre">
    <div class="tab_title"> 
    	<span>商品评价</span>
    </div>
    <div class="goods_info_con">
	<ul class="clearfix">
    	<li class="hpd"><div><?php echo $this->_var['rank_num']['rank_pa']; ?>%</div><p>好评度</p></li>
        <li class="pre">
        	<dl class="clearfix"><dt>好评<span>(<?php echo $this->_var['rank_num']['rank_pa']; ?>%)</span></dt><dd><div style="width:<?php echo $this->_var['rank_num']['rank_pa']; ?>%"></div></dd></dl>
            <dl class="clearfix"><dt>中评<span>(<?php echo $this->_var['rank_num']['rank_pb']; ?>%)</span></dt><dd><div style="width:<?php echo $this->_var['rank_num']['rank_pb']; ?>%"></div></dd></dl>
            <dl class="clearfix"><dt>差评<span>(<?php echo $this->_var['rank_num']['rank_pc']; ?>%)</span></dt><dd><div style="width:<?php echo $this->_var['rank_num']['rank_pc']; ?>%"></div></dd></dl>
        </li>
        <?php if ($this->_var['comment_tags']): ?>
        <li class="tag" style="border-right:solid #e4e4e4 1px">
        	<dl>
            	<dt>买家印象：</dt>
                <dd class="clearfix">
                	<?php $_from = $this->_var['comment_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('tag_key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['tag_key'] => $this->_var['value']):
?>
                	<span onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1,'<?php echo $this->_var['value']['tag_name']; ?>')"><a><?php echo $this->_var['value']['tag_name']; ?>(<?php echo $this->_var['value']['tag_num']; ?>)</a></span>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </dd>
            </dl>
        </li>
        <?php endif; ?>
        <!--
         <li class="pre" style="border-right:none;width:130px">
        	<a href="user.php?act=my_comment" target="_blank" class="pinglun">我要评论</a>
        </li>
        -->
    </ul>
    </div>
</div>
<div class="blank"></div>
<div class="my_comment_tab">
	<ul class="clearfix">
    	<li id="mct_0" onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1)" class="cur">全部评价<span>(<?php echo $this->_var['rank_num']['rank_total']; ?>)</span></li>
    	<li id="mct_1" onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,1,1)">好评<span>(<?php echo $this->_var['rank_num']['rank_a']; ?>)</span></li>
    	<li id="mct_2" onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,2,1)">中评<span>(<?php echo $this->_var['rank_num']['rank_b']; ?>)</span></li>
    	<li id="mct_3" onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,3,1)">差评<span>(<?php echo $this->_var['rank_num']['rank_c']; ?>)</span></li>
    	<li id="mct_4" onClick="ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,4,1)">用户晒单<span>(<?php echo $this->_var['rank_num']['shaidan_num']; ?>)</span></li>
    </ul>
</div>
<div class="blank"></div>
<div class="my_comment_list" id="ECS_MYCOMMENTS">

</div>

<script language="javascript">
function ShowMyComments(goods_id, type, page)
{
	for (var i = 0; i <= 4 ; i ++)
	{
		document.getElementById("mct_"+i).className = (type == i) ? 'cur' : '';
	}
	Ajax.call('goods_comment.php?act=list_json', 'goods_id=' + goods_id + '&type=' + type + '&page='+page, ShowMyCommentsResponse, 'GET', 'JSON');
}

function ShowMyCommentsResponse(result)
{
  if (result.error)
  {

  }

  try
  {
    var layer = document.getElementById("ECS_MYCOMMENTS");
    layer.innerHTML = result.content;
  }
  catch (ex) {}
}


function show_good(comment_id)
{
	Ajax.call('goods_comment.php?act=good_json', 'comment_id=' + comment_id, show_goodResponse, 'GET', 'JSON');
}
function show_goodResponse(result)
{
	if (result.error == 1)
	{
		alert("您已经评过分了哦！");
	}
	else
	{
		var layer = document.getElementById("good_num_"+result.comment_id);
		layer.innerHTML = result.good_num;
	}
}
document.getElementById('mct_0').click();
</script>