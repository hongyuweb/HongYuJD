<div class="box">
  <div id="filter">
    <form method="GET" name="listform" action="<?php echo $this->_var['actname']; ?>">
      <div class='fore1' style="border:none;">
        <dl class='order'>
          <dt>排序：</dt>
          <dd  class=<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['shangjian']; ?>">上架<b class="icon-order-<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>DESC<?php endif; ?>ending"></b></a></dd>
          <dd  class=<?php if ($this->_var['pager']['sort'] == 'salenum'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['xiaoliang']; ?>">销量<b class="icon-order-<?php if ($this->_var['pager']['sort'] == 'salenum'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>DESC<?php endif; ?>ending"></b></a></dd>
          <dd  class=<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['jiage']; ?>">价格<b class="icon-order-<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>DESC<?php endif; ?>ending"></b></a></dd>
          <dd  class=<?php if ($this->_var['pager']['sort'] == 'last_update'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['gengxin']; ?>">更新<b class="icon-order-<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>DESC<?php endif; ?>ending"></b></a></dd>
          <dd class=<?php if ($this->_var['pager']['sort'] == 'click_count'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['renqi']; ?>" rel='nofollow'>人气<b class="icon-order-<?php if ($this->_var['pager']['sort'] == 'click_count'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>DESC<?php endif; ?>ending"></b></a></dd>
	</dl>
    	
        <div class='pagin pagin-m'><span class='text'><font><?php echo $this->_var['pager']['page']; ?></font>/<?php echo $this->_var['pager']['page_count']; ?></span><?php if ($this->_var['pager']['page_prev']): ?> 
          <a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev" >&lt;</a> 
          <?php else: ?> 
          <span class="prev-disabled">&lt;</span> 
          <?php endif; ?> 
          <?php if ($this->_var['pager']['page_next']): ?> 
          <a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next" >&gt;</a> 
          <?php else: ?> 
          <span class="next-disabled">&gt;</span> 
          <?php endif; ?></div>
        <div class='total'><span>共<strong><?php echo $this->_var['pager']['record_count']; ?></strong>个商品</span></div>
        <div style="height:0px; line-height:0px; clear:both;"></div>
      </div>
      <div class='fore1 fore3'>
        <dl class='order goods_number'>
          <dt></dt>
          <dd class=<?php if ($this->_var['pager']['sort'] == 'goods_number'): ?>curr<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter=<?php echo $this->_var['filterid']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_number&order=<?php if ($this->_var['pager']['sort'] == 'goods_number' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" rel='nofollow'>仅显示有货</a></dd>
     	  <dd class="leixing">
	  		<?php $_from = $this->_var['filterinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter');if (count($_from)):
    foreach ($_from AS $this->_var['filter']):
?>
	  		<input type='radio' style="display:none" name='fff' onclick='top.location.href="<?php echo $this->_var['filter']['url']; ?>"' <?php if ($this->_var['filter']['selected']): ?> checked <?php endif; ?> ><a href="<?php echo $this->_var['filter']['url']; ?>" style="float:left <?php if ($this->_var['filter']['selected']): ?> ;color:red <?php endif; ?>"><?php echo $this->_var['filter']['name']; ?></a>
	  		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 	 </dd>
        </dl>
        <div class="display_mod">
        	 <a href="javascript:;" onClick="javascript:display_mode('list')" title="列表显示"><img src="themes/68ecshopcom_360buy/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')" title="表格显示"><img src="themes/68ecshopcom_360buy/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')" title="文本显示"><img src="themes/68ecshopcom_360buy/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>
        </div>
      </div>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </form>
  </div>
  <?php if ($this->_var['goods_list']): ?>
  <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList clearfix">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_29496700_1446387065');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_29496700_1446387065']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor" <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    	<li class="thumb">
		<a href="<?php echo $this->_var['goods_0_29496700_1446387065']['url']; ?>"><img src="<?php echo $this->_var['goods_0_29496700_1446387065']['goods_thumb']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_29496700_1446387065']['name']); ?>" class="pic_img_<?php echo $this->_var['goods_0_29496700_1446387065']['goods_id']; ?>"/></a>
		</li>
    	<li class="goodsName">
    		<a href="<?php echo $this->_var['goods_0_29496700_1446387065']['url']; ?>" class="f6">
        	<?php if ($this->_var['goods_0_29496700_1446387065']['goods_style_name']): ?>
        	<?php echo $this->_var['goods_0_29496700_1446387065']['goods_style_name']; ?><br />
        	<?php else: ?>
        	<?php echo $this->_var['goods_0_29496700_1446387065']['goods_name']; ?><br />
        	<?php endif; ?>
      		</a>
     		<?php if ($this->_var['goods_0_29496700_1446387065']['goods_brief']): ?>
    		<?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_29496700_1446387065']['goods_brief']; ?><br />
    		<?php endif; ?>
    	</li>
    	<li class="list_price">
    	<?php if ($this->_var['show_marketprice']): ?>
   		<?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_29496700_1446387065']['market_price']; ?></font><br />
    	<?php endif; ?>
    	<?php if ($this->_var['goods_0_29496700_1446387065']['promote_price'] != ""): ?>
    	<?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_29496700_1446387065']['promote_price']; ?></font><br />
    	<?php else: ?>
    	<?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_29496700_1446387065']['shop_price']; ?></font><br />
    	<?php endif; ?>
    	</li>
    	<li class="action">
         	<?php if ($this->_var['goods_0_29496700_1446387065']['goods_number'] == 0): ?><div class="shop_over" style="float:left">已售罄</div><?php endif; ?>
    		<a href="javascript:collect(<?php echo $this->_var['goods_0_29496700_1446387065']['goods_id']; ?>);" class="abg">收藏</a>
    		<a href="javascript:addToCart(<?php echo $this->_var['goods_0_29496700_1446387065']['goods_id']; ?>);" nctype="add_cart" class="adc" <?php if ($this->_var['goods_0_29496700_1446387065']['goods_number'] == 0): ?>style="background-color:#CCC; color:#EEE"<?php endif; ?>>加入购物车</a>
    	</li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="squares clearfix">
      <ul class="list_pic">
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_29604000_1446387065');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_29604000_1446387065']):
        $this->_foreach['name']['iteration']++;
?> 
        <?php if ($this->_var['goods_0_29604000_1446387065']['goods_id']): ?>
        <li class="item" <?php if ($this->_foreach['name']['iteration'] % 4 == 1): ?>style="margin-left:0px;"<?php endif; ?> id="li_<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>">
          <div class="goods-content" style="position:relative">
		<?php if ($this->_var['goods_0_29604000_1446387065']['is_hot'] == 1): ?><span class="little_pic">爆款</span><?php endif; ?> 
		<?php if ($this->_var['goods_0_29604000_1446387065']['is_best'] == 1): ?><span class="little_pic">精品</span><?php endif; ?>
		<?php if ($this->_var['goods_0_29604000_1446387065']['is_new'] == 1): ?><span class="little_pic">新品</span><?php endif; ?> 
            </span>
            <div class="goods-pic" ><a href="<?php echo $this->_var['goods_0_29604000_1446387065']['url']; ?>" target="_blank"  title="<?php echo htmlspecialchars($this->_var['goods_0_29604000_1446387065']['name']); ?>"><img data-original="<?php echo $this->_var['goods_0_29604000_1446387065']['goods_thumb']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" title="<?php echo htmlspecialchars($this->_var['goods_0_29604000_1446387065']['name']); ?>" class="pic_img_<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>"></a> </div>
		<?php if ($this->_var['goods_0_29604000_1446387065']['goods_number'] == 0): ?><a href="<?php echo $this->_var['goods_0_29604000_1446387065']['url']; ?>" class="shop_over1"></a><?php endif; ?>
            <div class="goods-info"> 
              <div class="goods-name"><a href="<?php echo $this->_var['goods_0_29604000_1446387065']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_29604000_1446387065']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_29604000_1446387065']['name']); ?><em></em></a></div>
              <div class="goods-price"> <em class="sale-price" title="本店价：<?php if ($this->_var['goods_0_29604000_1446387065']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_29604000_1446387065']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_29604000_1446387065']['shop_price']; ?><?php endif; ?>"><?php if ($this->_var['goods_0_29604000_1446387065']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_29604000_1446387065']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_29604000_1446387065']['shop_price']; ?><?php endif; ?></em> <em class="market-price" title=""><?php echo $this->_var['goods_0_29604000_1446387065']['market_price']; ?></em></div>
              <div class="sell-stat">
                <ul>
                  <li><a href="<?php echo $this->_var['goods_0_29604000_1446387065']['url']; ?>" target="_blank" class="status"><?php echo $this->_var['goods_0_29604000_1446387065']['count']; ?></a>
                    <p>商品销量</p>
                  </li>
                  <li><a href="<?php echo $this->_var['goods_0_29604000_1446387065']['url']; ?>#product-detail" target="_blank"><?php echo $this->_var['goods_0_29604000_1446387065']['comment_count']; ?></a>
                    <p>用户评论</p>
                  </li>
                  <li><em member_id="46"><a class="chat chat_offline" href="javascript:;"><?php echo $this->_var['goods_0_29604000_1446387065']['click_count']; ?></a>&nbsp;</em>
                    <p>关注人气</p>
                  </li>
                </ul>
              </div>
              <div class="store"> 
              	<a id="collect_<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>" href="javascript:collect(<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>); re_collect(<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>)" class="collet-btn<?php if ($this->_var['goods_0_29604000_1446387065']['is_collet'] == 1): ?> collet-btn-t<?php endif; ?>"></a> 
              	<a class="compare-btn shop-compare" data-goods="<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>" data-type="<?php echo $this->_var['goods_0_29604000_1446387065']['type']; ?>" onclick="Compare.add(<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods_0_29604000_1446387065']['name']); ?>','<?php echo $this->_var['goods_0_29604000_1446387065']['type']; ?>', '<?php echo $this->_var['goods_0_29604000_1446387065']['goods_thumb']; ?>', '<?php echo $this->_var['goods_0_29604000_1446387065']['shop_price']; ?>')"></a> </div>
              <div class="add-cart"> <a href="javascript:addToCart(<?php echo $this->_var['goods_0_29604000_1446387065']['goods_id']; ?>);"><i class="icon-shopping-cart"></i>加入购物车</a> </div>
            </div>
          </div>
        </li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList clearfix">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_29758200_1446387065');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_29758200_1446387065']):
        $this->_foreach['goods_list']['iteration']++;
?>
     <ul class="clearfix bgcolor" <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods_0_29758200_1446387065']['url']; ?>" class="f6 f5">
        <?php if ($this->_var['goods_0_29758200_1446387065']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_29758200_1446387065']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_29758200_1446387065']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods_0_29758200_1446387065']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_29758200_1446387065']['goods_brief']; ?><br />
    <?php endif; ?>
    </li>
    <li class="list_price">
    <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_29758200_1446387065']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods_0_29758200_1446387065']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_29758200_1446387065']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_29758200_1446387065']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    <li class="action">
		<?php if ($this->_var['goods_0_29758200_1446387065']['goods_number'] == 0): ?><div class="shop_over" style="float:left">已售罄</div><?php endif; ?>
		<a href="javascript:collect(<?php echo $this->_var['goods_0_29758200_1446387065']['goods_id']; ?>);" class="abg">收藏</a>
		<a href="javascript:addToCart(<?php echo $this->_var['goods_0_29758200_1446387065']['goods_id']; ?>);" nctype="add_cart" class="adc" <?php if ($this->_var['goods_0_29758200_1446387065']['goods_number'] == 0): ?>style="background-color:#CCC; color:#EEE"<?php endif; ?>>加入购物车</a>   
       </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
    <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>
  <?php else: ?> 
  <div style="padding:20px 0px; text-align:center" class="f5" >抱歉！没有搜索到您想要的结果……</div>
  <?php endif; ?> 
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

re_collect();

function re_collect(id)
{
  goods_id = (typeof(id) == "undefined" ? 0 : id);
  Ajax.call('user.php?act=re_collect', 'id=' + goods_id, re_collectResponse, 'GET', 'JSON');
}

function re_collectResponse(result)
{
  if (result.goods_id > 0)
  {
    document.getElementById("collect_" + result.goods_id).className = (result.is_collect == 1 ? "collet-btn collet-btn-t" : "collet-btn");
  }
  else
  {
    $("a[id^='collect_']").className = "collet-btn";
    for(i = 0; i < result.is_collect.length; i++)
    {
      document.getElementById("collect_" + result.is_collect[i]).className = "collet-btn collet-btn-t";
    }
  }
}

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29862400_1446387065');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29862400_1446387065']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_29862400_1446387065']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script> 
 
<script type="text/javascript" src="js/json2.js"></script> 
<script>
$(document).ready(function(e) {
    $('#compareBox .menu li').click(function(e) {
		$('#compareBox .menu li').each(function(index, element) {
			$(this).removeClass('current');
        });
		if($(this).attr('data-value') == 'compare')
		{
			$('#historyList').css('display', 'none');
			$('#compareList').css('display', 'block');
		}
		else
		{
			$('#historyList').css('display', 'block');
			$('#compareList').css('display', 'none');
		}
        $(this).addClass('current');
    });
	if($('#historyList li').length > 4)
	{
		$('#historyList ul').css('width', (226*$('#historyList li').length)+'px');
		$('#historyList #sc-prev').addClass('disable');
		var count = 0;
		$('#historyList #sc-next').click(function(e) {
			if(($('#historyList li').length-4) > count)
			{
				count++;
				$('#historyList #sc-prev').removeClass('disable');
				if(($('#historyList li').length-4) >= count)
					$('#historyList ul').animate({marginLeft:(-226*count)+'px'});
				if(($('#historyList li').length-4) == count)
					$('#historyList #sc-next').addClass('disable');
			}
        });
		$('#historyList #sc-prev').click(function(e) {
			if(count > 0)
			{
				count--;
				$('#historyList #sc-next').removeClass('disable');
				if(count >= 0)
					$('#historyList ul').animate({marginLeft:(-226*count)+'px'});
				if(count == 0)
					$('#historyList #sc-prev').addClass('disable');
			}
        });
	}
	else
	{
		$('#historyList #sc-prev').css('display', 'none');
		$('#historyList #sc-next').css('display', 'none');
	}
	var compareData = new Object();
	var compareCookie = document.getCookie('compareItems');
	var count = 0;
	if(compareCookie != null)
	{
		compareData = JSON.parse(compareCookie);
        for(var k in compareData)
        {
            if(typeof(compareData[k])=="function")
            	continue;
            $('.compare-btn').each(function(index, element) {
            	if(k == $(this).attr('data-goods'))
					$(this).css('background-position', '0 -99px');
        	});
			count ++;
        }
	}
	if(count>0)
	{
		$('#compareBox').css('display', 'block');
		$('.compareHolder').css('display', 'none');
	}
	
});
function toggle_compare_box()
{
	if($('#compareBox').css('display') == 'none')
	{
		$('#compareBox').css('display', 'block');
		$('.compareHolder').css('display', 'none');
	}
	else
	{
		$('#compareBox').css('display', 'none');
		$('.compareHolder').css('display', 'block');
	}
}
</script>
<div align="center" id="compareBox" style="display:none">
  <div class="menu">
    <ul>
      <li class="current" data-value='compare'>对比栏</li>
      <li data-value='history'>最近浏览</li>
    </ul>
    <a style="color:#005AA0;float: right; line-height: 32px; margin-right: 20px;" href="javascript:void(0)" onClick="toggle_compare_box()">隐藏</a>
    <div style="clear:both"></div>
  </div>
  <div id="compareList"> </div>
  <div id="historyList" style="display:none;"> <span id="sc-prev" class="sc-prev scroll-btn"></span> <span id="sc-next" class="sc-next scroll-btn"></span>
    <div class="scroll_wrap"> <?php 
$k = array (
  'name' => 'history_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
  </div>
</div>
<a class="compareHolder" href="javascript:void(0)" onClick="toggle_compare_box()">对比栏</a> 
 

