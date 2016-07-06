<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category_list.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="application/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.more.js"></script>
</head>
<body>
<section class="_pre" >
<header id="head_search_box" style="position: fixed; top: 0px; width: 100%;">
<div class="search_header">
    <a href="javascript:history.back(-1)" class="back search_back"></a>
    <div class="search">
     <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
   <div class="text_box" name="list_search_text_box" onclick="return 1;">
   <input id="keyword" name="keywords" type="text" placeholder="请输入商品名称 货号" class="text" value="">
   </div>
   <input type="submit" value="" class="submit" id="list_search_submit">
 </form>
    </div>
    <a class="menu filtrate" name="list_go_filter" style=" color:#666">筛选</a>
</div>
</header>

<div style="height:51px;" class="empty_div">&nbsp;</div>
<section class="filtrate_term" id="product_sort" style="width: 100%;">
<ul><li class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">最新</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'salenum'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=salenum&order=<?php if ($this->_var['pager']['sort'] == 'salenum' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" >销量</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'last_update'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" >更新</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格<span class="arrow_up <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>active_up<?php endif; ?>"></span><span class="arrow_down <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>active_down<?php endif; ?>"></span></a></li><li class=""><a href="javascript:;" class="show_type <?php if ($this->_var['pager']['display'] == 'grid'): ?> show_list<?php endif; ?>">&nbsp;</a></li></ul>
</section>

<section>
<script type="text/javascript">
var url = 'category.php?act=ajax&category=<?php echo $this->_var['cat_id']; ?>&&display=grid&brand=<?php echo $_REQUEST['brand']; ?>&price_min=<?php echo $_REQUEST['price_min']; ?>&price_max=<?php echo $_REQUEST['price_max']; ?>&filter_attr=<?php echo $_REQUEST['filter_attr']; ?>&page=1&sort=<?php echo $_REQUEST['sort']; ?>&order=<?php echo $_REQUEST['order']; ?>&other_has=<?php echo $this->_var['other_has']; ?>';
$(function(){
	$('#J_ItemList').more({'address': url});
});

</script>


<div class="touchweb-com_searchListBox <?php if ($this->_var['pager']['display'] == 'grid'): ?>openList<?php endif; ?>" id="goods_list">

  <?php echo $this->fetch('library/goods_list.lbi'); ?>
   
</div>
</ul>
</div>
</section> 
</section>
<section class="_next" style="-webkit-transform-origin: 0px 0px 0px; opacity: 1; -webkit-transform: scale(1, 1); display: none;">

<header>
    <div class="new_header_2" id="filter_header" >
        <a href="javascript:;" class="back" id="list_filter_back" ><span>返回</span></a>
        <h2>筛选</h2>
    </div>
</header>
<section id="filter_content">

     <div class="filtrate_category">
        <a href="javascript:;" class="filtrate_category_a" >分类 <span class="up_down">全部展开</span></a>
    </div>   
    <ul class="filtrate_list" id="filter_category_list" style="display: block; -webkit-transform-origin: 0px 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
        <li class="filtrate_list_li">
        <?php $_from = $this->_var['categories2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?> 
<ul><li class="filtrate_list_li"><a href="<?php echo $this->_var['cat']['url']; ?>" class="filtrate_list_li_a <?php if ($this->_var['current_cat_id'] == $this->_var['cat']['id']): ?>on<?php endif; ?>" style="padding-left:25px"><span><?php echo $this->_var['cat']['name']; ?></span></a><ul>
<?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?> 
<li class="filtrate_list_li"><a href="<?php echo $this->_var['child']['url']; ?>" class="filtrate_list_li_a <?php if ($this->_var['current_cat_id'] == $this->_var['child']['id']): ?>on<?php endif; ?>" style="padding-left:45px;"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</ul></li></ul><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  </li>
</ul>
  
     <form method="post" action="category.php">
     <input type="hidden" name="brand" id="brand" value="<?php echo $this->_var['brand']; ?>">
     <input type="hidden" name="filter_attr" id="filter_attr" value="<?php echo $this->_var['filter_attr_str']; ?>">     
     <input type="hidden" name="id" value="<?php echo $this->_var['cat_id']; ?>">
       <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
  <?php if ($this->_var['brands']['1']): ?>

            <div class="filtrate_category" >
            <a href="javascript:;" class="filtrate_category_a">品牌 <span class="up_down">全部展开</span></a>
        </div>
        
<ul class="clearfix filtrate_address filtrate_list att_item" id="brands" style="display: block; -webkit-transform-origin: 0px 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_0_21121300_1446387328');if (count($_from)):
    foreach ($_from AS $this->_var['brand_0_21121300_1446387328']):
?>
<li <?php if ($this->_var['brand_0_21121300_1446387328']['selected']): ?>class="on"<?php endif; ?>  id="brand_<?php echo $this->_var['brand_0_21121300_1446387328']['brand_id']; ?>"><a href="javascript:get_brand('<?php echo $this->_var['brand_0_21121300_1446387328']['brand_id']; ?>')"><?php echo $this->_var['brand_0_21121300_1446387328']['brand_name']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                </ul>
        
          <?php endif; ?>
          
        <div class="filtrate_price"onclick="return 1;">
                    价格 <input type="number" id="lp" value="<?php echo $this->_var['price_min']; ?>" name="price_min">∼
                        <input type="number" id="hp" value="<?php echo $this->_var['price_max']; ?>" name="price_max">元
        </div>      
                   
                 <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_21149700_1446387328');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr_0_21149700_1446387328']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>  
        <div class="filtrate_category" >
            <a href="javascript:;" class="filtrate_category_a"><?php echo htmlspecialchars($this->_var['filter_attr_0_21149700_1446387328']['filter_attr_name']); ?><?php echo $this->_var['lang']['colon']; ?> <span class="up_down">全部</span></a>
        </div>
        <ul class="clearfix filtrate_address filtrate_list att_item" id="attrs_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>">
        <?php $_from = $this->_var['filter_attr_0_21149700_1446387328']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['filter_attr']['iteration']++;
?>
                <li <?php if ($this->_var['attr']['selected']): ?>class="on"<?php endif; ?> id="attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_<?php if ($this->_var['attr']['attr_id']): ?><?php echo $this->_var['attr']['attr_id']; ?><?php else: ?>0<?php endif; ?>">
            <a  href="javascript:get_attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>('<?php if ($this->_var['attr']['attr_id']): ?><?php echo $this->_var['attr']['attr_id']; ?><?php else: ?>0<?php endif; ?>')"><?php echo $this->_var['attr']['attr_value']; ?></a>
            <?php if ($this->_var['attr']['selected']): ?>
<input type="hidden" id="show68ecshop_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>" name="show68ecshop" value="<?php echo $this->_var['attr']['attr_id']; ?>"/>
<?php endif; ?>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
<div class="filtrate_has">
        <h2>其他条件</h2>
        <ul class="clearfix">
    <li  class="<?php if ($this->_var['other_has'] == 1): ?>on<?php endif; ?>">
    <label for="">显示全部</label>
    <input type="radio" name='other_has' id="all_goods" value="1" <?php if ($this->_var['other_has'] == 1): ?>checked="true"<?php endif; ?>>
    </li>
    <li class="<?php if ($this->_var['other_has'] == 2): ?>on<?php endif; ?>">
    <label for="">网站自营</label>
     <input type="radio" name='other_has' id="ziying_goods" value="2" <?php if ($this->_var['other_has'] == 2): ?>checked="true"<?php endif; ?>>
    </li>
    <li class="<?php if ($this->_var['other_has'] == 3): ?>on<?php endif; ?>">
    <label for="">入驻商家</label>
     <input type="radio" name='other_has' id="ruzhu_goods" value="3" <?php if ($this->_var['other_has'] == 3): ?>checked="true"<?php endif; ?>>
    </li>
</ul>
   </div>
   <div class="filtrate_has1" style="display:none">
        <h2>是否有货</h2>
        <ul class="clearfix">
  
    <li  class="">
    <label for="">仅显示有货</label>
    <input type="radio" name='other_youhuo' id="other_youhuo" value='1'>
    </li>
  
</ul>
   </div>
    <script>
    $('.filtrate_has li').click(function(){
	$(this).find("input").attr("checked","checked");
	$('.filtrate_has li').removeClass("on");
	$(this).addClass("on");
	})
    </script>
        <script>
    $('.filtrate_has1 li').click(function(){
	if($(this).hasClass("on")){
	$(this).find("input").attr("checked","");
	$(this).removeClass("on");	
	}
	else
	{
	$(this).find("input").attr("checked","checked");
	$(this).addClass("on");	
	}
	
	})
    </script>
    
    <ul class="filtrate_btn">
        <li><a href="javascript:;" class="reset" id="clear_btn">取消筛选</a></li>
        <li> <input class="submit" id="submit_btn" type="submit" value="确定"></li>
    </ul>
<?php endif; ?>
    </form>
</section>
</section>
<section id="mix_search_div" style="display: none;">
<header class="con floatsearch">
   <section class="mix_new_header">
        <a href="javascript:void(0)" class="mix_back"></a>
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
            <div class="search">
                <div class="text_box">
                 <input id="keyword1" name="keywords" type="text" value="" placeholder="请输入商品名称 货号" class="keyword text" onkeydown="this.style.color=&#39;#404040&#39;;" maxlength="70" autocomplete="off">
                </div>
                <span class="mix_submit"></span>
                <a href="javascript:void(0)" class="clear_input" id="clear_input" style="display: block;"></a>

            </div>
            <input type="submit" value="搜索" class="mix_filtrate">
        </form>
    </section>
    <section class="mix_search_list"></section>

   <section class="mix_recently_search"><h3>热门搜索</h3>
   <?php if ($this->_var['searchkeywords']): ?>
  <ul>
    <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <li>
    <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   </li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </ul>

    <?php else: ?>
    <div class="recently_search_null">没有搜索记录</div>
    <?php endif; ?>
    </section>
    <div class="spacer"></div>
</header>

</section>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/zepto.min.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/filter.min.js"></script>
<script>
$(document).ready(function(){
        //筛选浮层显示控制
        var filtrate = $(".filtrate"), submit = $(".submit,.back,.reset");
        filtrate.bind("click", function () {
            $("._next").show();
            $("._pre").hide();
            window.scrollTo(0, 0);
        });
        submit.bind("click", function () {
            $("._next").hide();
            $("._pre").show();
        });
        //初始化筛选浮层
        bizFilter.init();
});
</script>
<script>
    $(function(){
        //搜索浮层显示逻辑
        var sbox = $("#head_search_box"),
                sort = $('#product_sort'),
                g_list = $("#goods_list"),
                g_m1 = "0", g_m2 = "96px";
        var initCss = function (type) {
            if (type == 1) {
                sort.css({"position":"static","width":"100%"});
                g_list.css("margin-top", g_m1);
            } else {
                sort.attr("style", "");
                g_list.css("margin-top", g_m2);
            }
        };
        var m = {
            input: $("#keyword"),
            rawAll: '',
            dd: $(".text_box"),
            cancel: $(".mix_back"),
            rawKey: '请输入商品名称 货号',
            main: function () {
                this.init();
                this.be();
            },
            init: function () {
                this.rawAll = this.input.val();
            },
            be: function () {
                var _this = this;
                this.input.focus(function () {
                    var mix_search = $("#mix_search_div");
                    if (mix_search.length > 0) {
                        $("._pre").hide();
                        mix_search.show();
                        $("#keyword1").focus();
                        return;
                    }
                    var newKey = _this.input.val();
                    if (newKey != _this.rawKey && newKey != _this.rawAll) {
                        $(this).val(newKey);
                    } else {
                        $(this).val(_this.rawKey);
                    }
                    if ($(window).scrollTop() > 0) {
                        initCss(1);
                        window.scrollTo(0, 0);
                        _this.dd.trigger("click");  //for ddclick
                    }
                })
				.blur(function () {
                            var newKey = _this.input.val();
                            if (newKey === _this.rawKey) {
                                $(this).val(_this.rawAll);
                            } else {
                                $(this).val(newKey);
                            }
                        });
                this.cancel.bind("click", function () {
                    $("#mix_search_div").hide();
                    $("._pre").show();
                });
				document.getElementById("clear_input").onclick = function() {
		            $("#mix_search_div").hide();
                    $("._pre").show();
				}
            }
        };

        m.main();

        $(window).resize(function () {
            sbox.css("width", "100%");
            sort.css("width", "100%");
        });
		 //顶部sticky效果
        setTimeout(function () {
            var sboxH = sbox.height();
            var sortH = sort.height();
            var sortStart = sort.offset().top - sboxH;
            var showEnd = sort.offset().top;
            var init = function () {
                sbox.css({"position":"fixed", "top":"0"});
                window.scrollTo(0, 0);
            };
            var rawScroll = 0, nowScroll = 0;
            var upOrDown = function () {
                var delta = 30;
                if (nowScroll > rawScroll + delta) {
                    return 1;
                } else if (nowScroll < rawScroll - delta) {
                    return 2;
                } else {
                    return 0;
                }
            };
            var sticky = function () {
                nowScroll = $(window).scrollTop();
                if (nowScroll >= sortStart) {
                    sort.css({"position":"fixed","top":sboxH});
                    g_list.css({"margin-top":sortH});
                } else {
                    sort.attr("style", "");
                    g_list.attr("style", "");
                }
                if (nowScroll > showEnd + sortH) {
                    var up = upOrDown();
                    if (up == 1) {
                        if (sbox.css("display") != "none") {
                            sbox.hide();
                            sort.hide();
                        }
                        rawScroll = nowScroll;
                    } else if (up == 2) {
                        if (sbox.css("display") == "none") {
                            sbox.show();
                            sort.show();
                        }
                        rawScroll = nowScroll;
                    }
                } else {
                    if (sbox.css("display") == "none") {
                        sbox.show();
                        sort.show();
                    }
                }
            };
            init();
            $(document).on("touchmove", sticky);
            $(window).on("scroll", sticky);
        }, 500);
 
	});

</script>
<script>
   $('.show_type').bind("click", function() {
    if ($('#goods_list').hasClass('openList')){
	$('#goods_list').removeClass('openList');
	$(this).removeClass('show_list');
	}
	else
	{
	$('#goods_list').addClass('openList');	
	$(this).addClass('show_list');
	}
});
</script>
<script type="text/javascript">
function get_brand(brand_id)
{
	document.getElementById('brand').value = brand_id;
	var obj = document.getElementById('brands').getElementsByTagName('li');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('brand_'+brand_id).className = 'on';
}

function get_price(price_min,price_max)
{
	document.getElementById('price_min').value = price_min;
	document.getElementById('price_max').value = price_max;
	var obj = document.getElementById('prices').getElementsByTagName('a');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('price_'+price_min).className = 'on';
}

<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_21290800_1446387328');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr_0_21290800_1446387328']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>

function get_attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>(attr_id)
{
	document.getElementById('show68ecshop_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').value=attr_id;
	var show68ecshop = document.getElementsByName("show68ecshop");
	var zongshu = null;
	for(var i=show68ecshop.length;i>0;i--){
	if(zongshu == null)
	{
		zongshu = document.getElementById("show68ecshop_"+i).value;
	
	}
	else
	{
		zongshu = document.getElementById("show68ecshop_"+i).value +"."+zongshu;
		document.getElementById('filter_attr').value = zongshu;	
	}
	}
	
	var obj = document.getElementById('attrs_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').getElementsByTagName('li');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_'+attr_id).className = 'on';
}
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
//  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<footer>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</footer>

<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop" style=" z-index:9999"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a> 
</body>
</html>