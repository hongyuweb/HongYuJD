<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://localhost/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/common_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.7.2_www_ecshop68_com.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/script.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/gw_totop.js" ></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/pre_sale.js" ></script>
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/pre_sale.css" />

<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js,jquery.countdown-2.5.3.min.js')); ?>
</head>
<body>

<input type="hidden" id="chat_goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
<div id="site-nav"> 
  <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank"></div>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="w">
    <div id="product-intro" class="goods_photo"> 
    <form action="javascript:;" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    <div class="clearfix" style="width:591px; min-height:562px;">
      <div class="goods_info">
      	  <div id="name">
              <h1><?php echo $this->_var['goods']['goods_name']; ?></h1>
          </div>
            <?php if ($this->_var['goods']['goods_brief']): ?>
          <div class="goods_brief"><span><?php echo $this->_var['goods']['goods_brief']; ?></span></div>
            <?php endif; ?>
           <div id="summary-price" class="clearfix">
              <div class="mar_l">
                <p style="width:420px;float:left"> 
                  <span class="price">预售价</span><strong class="p-price" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['formated_cur_price']; ?></strong> 
                </p>
                <span class="gui">预售规则</span>
                <?php echo $this->fetch('library/pre_sale_rule.lbi'); ?>
        </div>
              <?php if ($this->_var['goods']['deposit'] > 0): ?>
              <div class="show_price" style="z-index:101"> 
                <div class="market_prices_t"> <span class="price">定金</span><font class="market_price"><?php echo $this->_var['goods']['formated_deposit']; ?></font> </div>
              </div>
               <?php endif; ?> 
            </div> 
            <div id="summary-jiage">
          
          <?php if ($this->_var['goods']['price_ladder_count'] > 1): ?>
      			<div class="jieti-jiage">
      				<?php $_from = $this->_var['goods']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
      				<div class="jieti-renshu <?php if ($this->_foreach['name']['iteration'] % 3 == 0): ?> <?php else: ?>jieti-Rbian<?php endif; ?> <?php if ($this->_var['goods']['cur_price'] == $this->_var['item']['price']): ?> st jieti-Bbian<?php else: ?> xuti jieti-BBbian<?php endif; ?>" >
      						满<?php echo $this->_var['item']['amount']; ?>人 <br/><span ><?php echo $this->_var['item']['formated_price']; ?></span>
      				</div> 				
				    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			       </div>
			       <div class="jieti-xianshi"></div>
              		<a href="javascript:" class="jieti-anniu">
              			<div class="jieti_anniu"></div>
              		</a>
          
          <?php else: ?>
          
              <div class="presell-wrap" id="summary-presell">
                <div id="presell-detail" class="m">
                  <div class="mt">
                    <strong>定金：</strong>
                    <span id="dingjin"><?php echo $this->_var['goods']['deposit']; ?> +</span>
                    <span class="presell-balance hide" style="display:inline;">
                      <strong>尾款：</strong>
                      <span id="weikuan"><?php echo $this->_var['goods']['formated_cur_price-$goods']['deposit']; ?> </span>
                    </span>
                    
                  </div>
                  <div id="summary-presell-stage2" class="mc">预定人数：<span><?php echo $this->_var['goods']['valid_order']; ?>人</span></div>
                  <div class="mb">
                    <div class="presell-countdown-wrap">
					<?php if ($this->_var['goods']['status'] == 0): ?>
					预售活动尚未开始...
					<?php elseif ($this->_var['goods']['status'] == 1): ?>
					预售活动火热进行中！
					<?php elseif ($this->_var['goods']['status'] == 2): ?>
					<span style="color: red; font-weight: bold;">活动已结束，等待处理...</span>
					<?php elseif ($this->_var['goods']['status'] == 3): ?>
					<span style="color: red; font-weight: bold;">活动已成功结束！</span>
					<?php elseif ($this->_var['goods']['status'] == 4): ?>
					<span style="color: red; font-weight: bold;">亲，活动失败了！</span>
					<?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              
          <?php endif; ?>
          </div>
            <ul id="summary1">
              <?php if ($this->_var['cfg']['show_goodssn']): ?>
              <li class="padd1">
                <div class="dt">商品货号</div>
                <div class="dd"> <?php echo $this->_var['goods']['goods_sn']; ?> </div>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
              <li class="padd1">
                <div class="dt">商品品牌</div>
                <div class="dd"> <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></div>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_goodsweight']): ?>
              <li class="padd1">
                <div class="dt">商品重量</div>
                <div class="dd"> <?php echo $this->_var['goods']['goods_weight']; ?> </div>
                </dd>
              </li>
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_addtime']): ?>
              <li class="padd1">
                <div class="dt">上架时间</div>
                <div class="dd"> <?php echo $this->_var['goods']['add_time']; ?> </div>
                </dd>
              </li>
              <?php endif; ?>
            </ul>
            <div id="summary-qita" class="clearfix">
              <ul class="qita">
                <li>
                  <p>累积评价<span><?php echo $this->_var['goods']['comment_count']; ?>人评价</span></p>
                </li>
                <li>
                  <p>累计销量<span><?php echo $this->_var['goods']['sale_count']; ?></span></p>
                </li>
                <li style="border:none">
                  <p>赠送积分<span><font id="ECS_GOODS_AMOUNT_jf"><?php echo $this->_var['goods']['give_integral']; ?></font></span></p>
                </li>
              </ul>
            </div>
             <?php if ($this->_var['goods']['is_shipping']): ?>
            <ul id="summary">
            <li>
              <div class="dt">温馨提示</div>
              <div class="dd"><?php echo $this->_var['lang']['goods_free_shipping']; ?></div>
            </li>
          </ul>
          <?php endif; ?>
            <ul id="choose" class="choose_bor">
              
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
              <li id="choose-version">
                <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                <div class="dd catt"> 
                   
                  <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                  <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
                  
                  <input type="hidden" name="spec_attr_type" value="<?php echo $this->_var['spec_key']; ?>">
		  		  <input type="hidden" name="attr_types" id="spec_attr_type_<?php echo $this->_var['spec_key']; ?>" value="0">
                  <ul class="ys_xuan" id="xuan_<?php echo $this->_var['spec_key']; ?>">
                    <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>"> 
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                      <a onclick="show_attr_status(this,<?php echo $this->_var['goods']['goods_id']; ?>,<?php echo $this->_var['attr_id']; ?>);<?php if ($this->_var['spec_key'] == $this->_var['attr_id']): ?>get_gallery_attr(<?php echo $this->_var['goods']['goods_id']; ?>,<?php echo $this->_var['value']['id']; ?>);<?php endif; ?>"  href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" id="xuan_a_<?php echo $this->_var['value']['id']; ?>"  title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"> <?php if ($this->_var['value']['goods_attr_thumb']): ?>
                      <div style="float:left;cursor:pointer;"><img src="<?php echo $this->_var['value']['goods_attr_thumb']; ?>" width=40 height=40 title="<?php echo $this->_var['value']['label']; ?>" alt="<?php echo $this->_var['value']['label']; ?>" /></div>
                      <label style="float:left;cursor:pointer;line-height:40px;margin:0 10px 0 10px;color:#000;text-decoration:none;"><?php echo $this->_var['value']['label']; ?></label>
                      <?php else: ?>
                      <div style="padding:3px 7px;"><?php echo $this->_var['value']['label']; ?></div>
                      <?php endif; ?>
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"  />
                      </a> 
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                  </ul>
                  <div class="clear"></div>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                   
                  <?php else: ?>
                  <select name="spec_<?php echo $this->_var['spec_key']; ?>">
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                  <?php endif; ?> 
                  <?php else: ?> 
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                  <br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                  <?php endif; ?> 
                </div>
              </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
               
			  <script type="text/javascript">
var myString=new Array();

<?php $_from = $this->_var['prod_exist_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'prod');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['prod']):
?>
myString[<?php echo $this->_var['pkey']; ?>]="<?php echo $this->_var['prod']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</script>
               
              
              <li id="choose-amount">
                <div class="dt">数量：</div>
                <div class="dd">
                  <div class="wrap-input"> 
                    <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script> 
                    <a class="btn-reduce" href="javascript:;" onclick="goods_cut();changePrice();">减少数量</a>
                    <input name="number" type="text" class="text"  id="number" value="1" onblur="changePrice();"/>
                    <a class="btn-add" href="javascript:;" onclick="goods_add();changePrice();">增加数量</a> （库存<font id="shows_number"><?php echo $this->_var['goods']['goods_number']; ?> </font>） </div>
                </div>
              </li>
            </ul>
	    
            
          <div class="buyNub-buy-wrap clearfix" style="z-index:100">
              <div id="choose-btns" class="buyNub-buy"> 
              <input type="hidden" id="pre_sale_id" name="pre_sale_id" value="<?php echo $this->_var['goods']['pre_sale_id']; ?>"/>
              
              <?php if ($this->_var['goods']['status'] == 0): ?>
             	<a href="javascript:;" class="u-buy3 u-buy2">活动尚未开始</a> 
              <?php elseif ($this->_var['goods']['status'] == 1 && $this->_var['goods']['deposit'] > 0 && $this->_var['goods']['status'] < 2): ?>
              <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" class="u-buy2">立刻支付定金</a> 
              <?php elseif ($this->_var['goods']['status'] < 2): ?>
              <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" name="on_addToCart" class="u-buy1">立刻付款</a>  
              <?php elseif ($this->_var['goods']['status'] >= 2): ?>
              <a href="javascript:" class="u-buy3 u-buy2">活动已结束</a>
              <?php endif; ?>
              <script type="text/javascript">
		        function justToBuy(){
		    		$("#ECS_FORMBUY").attr("action", "pre_sale.php?act=buy");
		    		$("#ECS_FORMBUY").submit();
		    	}
	        </script>
              </div> 
            </div>
        </div>
        </div>
      </form>
      <div id="preview">
        <div class="goods_img" id="li_<?php echo $this->_var['goods']['goods_id']; ?>"> 
        	<a href="<?php if ($this->_var['pictures']['0']['img_original']): ?><?php echo $this->_var['pictures']['0']['img_original']; ?><?php else: ?><?php echo $this->_var['goods']['original_img']; ?><?php endif; ?>" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
          		<?php if ($this->_var['pictures']): ?> 
          		<img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" style="border:#DDDDDD 1px solid; width:378px; height:378px;" /> 
          		<?php else: ?> 
          		<img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" style="border:#DDDDDD 1px solid;width:378px; height:378px;" /> 
          		<?php endif; ?> 
          	</a>
        </div>
        <div style="height:15px; line-height:15px; clear:both;"></div>
         
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
        
        <div style="height:5px; line-height:5px; clear:both;"></div>
        <div id="short-share">
          <div id="view-bigimg" class="fl" style="margin-right:20px;"><b></b><a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;" target="_blank">查看大图</a></div>
          <div class="share-list fl" style="margin-right:20px;"> 
            
            <div id="bdshare" class="bdshare_b" style="line-height: 12px; "> 
            	<img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg?cdnversion=20120831" /> 
            </div>
            <script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=603029" ></script> 
            <script type="text/javascript" id="bdshell_js"></script> 
            <script type="text/javascript">
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
	  </script> 
             
          </div>
          <div class="fl com-pare"> 
          	<a class="compare-btn" data-goods="<?php echo $this->_var['goods']['goods_id']; ?>" data-type="<?php echo $this->_var['goods']['goods_type']; ?>" onclick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['goods_type']; ?>', '<?php echo $this->_var['goods']['goods_thumb']; ?>', '<?php if ($_SESSION['user_name']): ?><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?> <?php endif; ?><?php else: ?><?php echo $this->_var['goods']['market_price']; ?><?php endif; ?>')"></a> 
          </div>
          <div class="clb"></div>
        </div>
      </div>
     <div id="supp_info"> 
        <?php if ($this->_var['goods']['supplier_id']): ?> 
        <?php echo $this->fetch('library/ghs_info.lbi'); ?> 
        <?php else: ?> 
        <?php echo $this->fetch('library/ziying_info.lbi'); ?> 
        <?php endif; ?> 
      </div>
    </div>
  </div>

<div class="ltth" style="margin-bottom:10px;">
    
    
      <div id="tm-yushou-process-banner">
        <p class="tm-yushou-process-title ">预售全过程：</p>
        <ul class="tm-yushou-process">
        <?php if ($this->_var['goods']['deposit'] != 0): ?>
        <li class="tm-yushou-process-step1 tm-ys-li-inline">
          <i></i>
          <ul class="tm-ys-process-step-intro">
              <li class="tm-ys-process-step-name">付定金<span id="ps_status_label" class="tm-ys-ordering">
        <?php if ($this->_var['goods']['status'] == 0): ?>(未开始!)
        </span></li><li><span id="ps_cd_deposit" class="J_step1Time"></span></li>
        <?php elseif ($this->_var['goods']['status'] == 1): ?>(预定中!)
        </span></li><li><span id="ps_cd_deposit" class="J_step1Time"></span></li>
        <?php elseif ($this->_var['goods']['status'] == 2): ?></br>活动已结束!
        <?php elseif ($this->_var['goods']['status'] == 3): ?></br>活动已成功结束!
        <?php elseif ($this->_var['goods']['status'] == 4): ?></br>活动失败了!
        <?php endif; ?>
          </ul>
      </li>
      <script type="text/javascript">
       $().ready(function(){
        if($("#ps_cd_deposit").size() > 0){
          countdown.setLabels(
               '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
               '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
               '',//秒连接符
               '',//其他时间连接符
               '活动结束',
               function(n){ return n.toString()
            });
                var endDate = new Date(<?php echo $this->_var['goods']['local_end_date']; ?>);
                var timerId = countdown(function(ts) {
              $("#ps_cd_deposit").html("剩余：" + ts.toString());
              if(ts == "活动结束"){
                window.clearInterval(timerId);
                $("#ps_cd_deposit").html("");
                $("#ps_status_label").html("活动已结束");
              }
            }, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
        }
         });
      </script>
        <li class="tm-mid-x tm-ys-li-inline "></li>
      <?php endif; ?>
      <?php if ($this->_var['goods']['deposit'] != 0): ?>
        <li class="tm-yushou-process-step2 tm-ys-li-inline">
          <i></i>
          <ul class="tm-ys-process-step-intro">
              <li class="tm-ys-process-step-name">付尾款</li>
              <li class="J_step2Time"><?php echo $this->_var['goods']['formated_retainage_start']; ?> - <?php echo $this->_var['goods']['formated_retainage_end']; ?></li>
              <li>实际时间可能提前或延后2小时</li>
          </ul>
        </li>
        <?php else: ?>
        <li class="tm-yushou-process-step2 tm-ys-li-inline">
          <i></i>
          <ul class="tm-ys-process-step-intro">
              <li class="tm-ys-process-step-name">付全款</li>
              <li class="J_step2Time"><?php echo $this->_var['goods']['formated_start_date']; ?> - <?php echo $this->_var['goods']['formated_end_date']; ?></li>
              <li>实际时间可能提前或延后2小时</li>
          </ul>
        </li>
        <?php endif; ?>
        <li class="tm-mid-x tm-ys-li-inline"></li>
        <li class="tm-yushou-process-step3 tm-ys-li-inline">
          <i></i>
            <ul class="tm-ys-process-step-intro">
                <li class="tm-ys-process-step-name">组织生产</li>
                <li class="J_step3Time"></li>
            </ul>
        </li>
        <li class="tm-mid-x tm-ys-li-inline "></li>
        <li class="tm-yushou-process-step4 tm-ys-li-inline">
          <i></i>
          <ul class="tm-ys-process-step-intro">
              <li class="tm-ys-process-step-name">发货</li>
              <li class="J_step4Time"><?php echo $this->_var['goods']['deliver_goods']; ?></li>
          </ul>
        </li>
        </ul>
      </div>
      
    </div>


  <div class="w"> <?php echo $this->fetch('library/goods_best.lbi'); ?>
    <div class="left">
      <div id="related-sorts" class="m m2">
        <div class="mt">
          <h2>相关分类</h2>
        </div>
        <div class="mc">
          <ul class="lh">
            <?php
		 $parent_cat_id = get_parent_cat_id($GLOBALS['smarty']->_var['goods']['cat_id']);
		 $GLOBALS['smarty']->assign('child_cat',get_child_cat($parent_cat_id));
		  ?>
            <?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['child_cat']['iteration']++;
?>
            <li><a href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo sub_str($this->_var['cat']['name'],6); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      
      <div id="related-brands" class="m m2">
        <div class="mt">
          <h2>同类品牌</h2>
        </div>
        <div class="mc">
          <ul class="lh">
            <?php $GLOBALS['smarty']->assign('get_cat_brands',get_cat_brands($this->_var['goods']['cat_id']));?>
            <?php $_from = $this->_var['get_cat_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_cat');$this->_foreach['get_cat_brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand_cat']):
        $this->_foreach['get_cat_brands']['iteration']++;
?>
            <li><a href="brand.php?id=<?php echo $this->_var['brand_cat']['id']; ?>" title="<?php echo $this->_var['brand_cat']['name']; ?>"><?php echo $this->_var['brand_cat']['name']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      
      <?php
			  $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['goods']['cat_id']);
			 $GLOBALS['smarty']->assign('cat_name',$cat_info['cat_name']);
    ?>
      <?php if ($this->_var['hot_goods']): ?>
      <div id="ranklist" class="m m2">
        <div class="mt">
          <h2><?php echo $this->_var['cat_name']; ?>排行榜</h2>
        </div>
        <script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTabglo(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
con.style.display=i==cursel?"block":"none";
menu.className=i==cursel?"curr":"";
}
}
//-->
</script>
        <div class="mc">
          <ul class="tab">
            <li data-widget="tab-item" class="curr"  id="glo1" onmouseover="setTabglo('glo',1,3)">同类别</li>
            <li data-widget="tab-item" id="glo2" onmouseover="setTabglo('glo',2,3)">同品牌</li>
            <li data-widget="tab-item"  id="glo3" onmouseover="setTabglo('glo',3,3)">同价位</li>
          </ul>
          <ul class="tabcon"  id="con_glo_1" >
            <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50"/></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <ul class="tabcon" id="con_glo_2" style="display:none;" >
            <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, $GLOBALS['smarty']->_var['goods']['brand_id']));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" /></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <ul class="tabcon" id="con_glo_3"  style="display:none;">
            <?php
		 $price_arr = get_goods_min_max_price($GLOBALS['smarty']->_var['goods']['goods_id']);
		   
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, 0, $price_arr['min'], $price_arr['max']));

		?>
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
            <li 
         class='<?php if ($this->_foreach['cat_item_goods']['iteration'] < 4): ?> 
           fore1 
            <?php endif; ?>fore4'
            > <span ><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
              <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" /></a></div>
              <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
              <div class="p-price"><strong> 
                <?php if ($this->_var['goods_item']['promote_price'] != ""): ?> 
                <?php echo $this->_var['goods_item']['promote_price']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods_item']['shop_price']; ?> 
                <?php endif; ?> 
                </strong></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?> 
      <?php echo $this->fetch('library/goods_new.lbi'); ?> <?php echo $this->fetch('library/goods_related.lbi'); ?> <?php echo $this->fetch('library/goods_fittings.lbi'); ?> <?php echo $this->fetch('library/bought_goods.lbi'); ?>  <?php echo $this->fetch('library/ad_position.lbi'); ?> 
      <div style="height:8px; line-height:8px;"></div>
       <?php echo $this->fetch('library/ad_position.lbi'); ?>  </div>
    
    <div class="right goods_right"> <?php echo $this->fetch('library/goods_package_ecshop68.lbi'); ?>
      <div id="wrapper" class="m m1">
        <div class="mt" id="main-nav-holder">
          <ul class="tab" id="nav">
            <li class="boldtit_list h_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_canshu">规格参数</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_jieshao" >商品介绍</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_pinglun" >商品评价(<?php echo $this->_var['review_count']; ?>)</a></li>
            <li class="boldtit_list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_shouhou" >售后保障</a></li>
          </ul>
          <div style="width:170px;float:right; position:relative;left:0;top:0">
           	<!-- 
           	<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" name="bi_addToCart"  class="right_add" >加入购物车</a>
           	 -->
           	
              <?php if ($this->_var['goods']['status'] == 0): ?>
              <a href="javascript:" class="right_add">活动尚未开始</a> 
              <?php elseif ($this->_var['goods']['status'] == 1 && $this->_var['goods']['deposit'] > 0 && $this->_var['goods']['status'] < 2): ?>
              <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" class="right_add">立刻支付定金</a> 
              <?php elseif ($this->_var['goods']['status'] < 2): ?>
              <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" name="on_addToCart" class="right_add">立刻付款</a>  
              <?php elseif ($this->_var['goods']['status'] >= 2): ?>
              <a href="javascript:" class="right_add right_add_end">活动已结束</a>
              <?php endif; ?>
            <div class="ce_right">
              <ul class="abs_ul">
                <li class="abs_active"><i></i><span>规格参数</span></li>
                <li><i></i><span>产品介绍</span></li>
                <li><i></i><span>商品评价</span></li>
                <li><i></i><span>包装清单</span></li>
                <li><i></i><span>售后服务</span></li>
                <li><i></i><span>常见问题</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="main_widget_1">
          <div class="mc" id="os_canshu">
            <ul class="detail-list">
              <li>商品名称：<?php echo $this->_var['goods']['goods_style_name']; ?></li>
              <li>商品编号：<?php echo $this->_var['goods']['goods_sn']; ?></li>
              <li>品牌：<a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
              <li>上架时间：<?php echo $this->_var['goods']['add_time']; ?></li>
              <li>商品毛重：<?php echo $this->_var['goods']['goods_weight']; ?></li>
              <li>库存： 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                <?php echo $this->_var['lang']['stock_up']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
                <?php endif; ?> 
              </li>
              <?php if ($this->_var['properties']): ?> 
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <li ><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?>
            </ul>
          </div>
          <div class="mc" id="os_jieshao">
            <div class="blank20"></div>
            <div class="detail-content"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
          </div>
          <div class="mc" id="os_pinglun">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/my_comments.lbi'); ?> </div>
          <div class="mc" id="os_advantage">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/packing_list.lbi'); ?>
             </div>
          <div class="mc" id="os_shouhou">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/pre_baozhang.lbi'); ?>
             </div>
          <div class="mc" id="os_changjian">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/pre_common_problem.lbi'); ?> </div>
        </div>
      </div>
      <script type="text/javascript">
		var obj11 = document.getElementById("main-nav-holder");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
function getTop(e){
	var offset = e.offsetTop;
	if(e.offsetParent != null) offset += getTop(e.offsetParent);
	return offset;
}
</script> 
      <script type="text/javascript">
	$(".ce_right").height($("#main_widget_1").height());
</script> 
    </div>
     
  </div>
  <div style="height:20px; line-height:20px;clear:both"></div>
  <?php echo $this->fetch('library/help.lbi'); ?> 
  <?php echo $this->fetch('library/page_footer.lbi'); ?> 
  <?php echo $this->fetch('library/site_bar.lbi'); ?>
</div>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

var goodsId = <?php echo $this->_var['goods']['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  //changePrice();
  changePriceAll();
  fixpng();
  ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1);
  try {onload_leftTime(now_time);}
  catch (e) {}
}


/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty + '&pre_sale_id=<?php echo $this->_var['goods']['pre_sale_id']; ?>', changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    var qty = res.qty;
    
    if(qty != undefined && qty != null && qty >= 0)
    {
    	document.forms['ECS_FORMBUY'].elements['number'].value = qty;
    }
    
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT')){
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
      $("#weikuan").html(parseInt(res.result) - parseInt($("#dingjin").html()));
    }
    if(document.getElementById('shows_number')){
	document.getElementById('shows_number').innerHTML = res.attr_num;
    }
    if(document.getElementById('mark_price')){
	document.getElementById('mark_price').innerHTML = res.result1;
    }
  }
}

/**
* 获取商品范围价格
*/
function changePriceAll()
{
	var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
	Ajax.call('goods.php', 'act=allprice&id=' + goodsId + '&attr=' + attr + '&number=1' + '&pre_sale_id=<?php echo $this->_var['goods']['pre_sale_id']; ?>', changePriceResponse, 'GET', 'JSON');
}



</script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/compare.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/json2.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script>
$(document).ready(function(e) {
	Compare.init();
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
					$(this).css('background-position', '0 -24px');
        	});
			count ++;
        }
	}
	if(count>0)
	{
		$('#compareBox').css('display', 'block');
		
	}
	
});
function toggle_compare_box()
{
	if($('#compareBox').css('display') == 'none')
	{
		$('#compareBox').css('display', 'block');
	}
	else
	{
		$('#compareBox').css('display', 'none');

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
  <div id="compareList"></div>
  <div id="historyList" style="display:none;"><span id="sc-prev" class="sc-prev scroll-btn"></span><span id="sc-next" class="sc-next scroll-btn"></span>
    <div class="scroll_wrap"><?php 
$k = array (
  'name' => 'history_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
  </div>
</div>
<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" type="text/javascript"></script>
<script type="text/javascript">
Ajax.call('goods.php', 'act=get_pickup_info&province='+remote_ip_info.province+'&city='+remote_ip_info.city+'&district='+remote_ip_info.district,
		function(res){
			if(res.error == 0) {
				var result = '<ul>';
				if (res.result)
				{
					for(var i=0; i<res.result.length; i++)
					{
						result += '<li>店名：'+res.result[i].shop_name+'<br>联系人：'+res.result[i].contact+'&nbsp;&nbsp;联系方式：'+res.result[i].phone + '<br>地址：'+res.result[i].address+'</li>';
					}
					result += '</ul>';
				}
				result = "<div style='padding:10px 0;text-align:center;'>请选择区县</div>";
				document.getElementById('pickup_point_list').innerHTML = result;
				document.getElementById('province').innerHTML = res.city_info.province;
				document.getElementById('province').onclick = function(){
					get_area_list(<?php echo $this->_var['shop_country']; ?>, '');
				}
				document.getElementById('city').innerHTML = res.city_info.city;
				document.getElementById('city').onclick = function(){
					get_area_list(res.city_info.province_id, res.city_info.province);
				}
				document.getElementById('area_label').innerHTML = res.city_info.province + '&nbsp;' + res.city_info.city;
				get_area_list(res.city_info.city_id, res.city_info.city);
			}
		}, 'GET', 'JSON');
	function show_list()
	{
		document.getElementById('pickup_point').style.borderBottom = "1px solid #fff";
		document.getElementById('pickup_point_list').style.display = "block";
	}
	function hide_list()
	{
		document.getElementById('pickup_point').style.borderBottom = "1px solid #ccc";
		document.getElementById('pickup_point_list').style.display = "none";
	}
	function get_area_list(parent_id, name)
	{
		Ajax.call('goods.php', 'act=get_area_list&parent_id='+parent_id, function(res) {
			var result = '';
			for(var i=0; i<res.length; i++)
			{
				result += '<li';
				if(res[i].region_name.length>5)
					result += ' style="widht:170px;"';
				result += '><a href="javascript:void(0)" ';
				if(res[i].region_type == 3)
				{
					result += 'onclick="get_pickup_point_list('+res[i].region_id+', this)">';
				}
				else
				{
					result += 'onclick="get_area_list('+res[i].region_id+', \''+res[i].region_name+'\')">';
				}
				result+=res[i].region_name+'</a></li>';
			}
			result += '';
			document.getElementById('area_list').innerHTML = result;

			switch(res[0].region_type)
			{
				case '1':
					document.getElementById('province').onclick = function(){get_area_list(parent_id, name);};
					document.getElementById('city').innerHTML = '市';
					document.getElementById('district').innerHTML = '区';
					switch_hover('province');
					break;
				case '2':
					document.getElementById('city').onclick = function(){get_area_list(parent_id, name);};
					document.getElementById('province').innerHTML = name;
					document.getElementById('city').innerHTML = '市';
					document.getElementById('district').innerHTML = '区';
					switch_hover('city');
					break;
				case '3':
					document.getElementById('city').innerHTML = name;
					document.getElementById('district').innerHTML = '区';
					switch_hover('district');
					break;
			}
			hide_list();
			//show_area();
		}, 'GET', 'JSON');
	}

	function switch_hover(sel)
	{
		if(sel == 'province')
		{
			document.getElementById('city').className = '';
			document.getElementById('district').className = '';
			document.getElementById('province').className = 'hover';
		}
		else if(sel == 'city')
		{
			document.getElementById('city').className = 'hover';
			document.getElementById('district').className = '';
			document.getElementById('province').className = '';
		}
		else
		{
			document.getElementById('city').className = '';
			document.getElementById('district').className = 'hover';
			document.getElementById('province').className = '';
		}
	}

	function get_pickup_point_list(region_id, obj)
	{
		var name = obj.innerHTML;
		document.getElementById('district').innerHTML = name;
		var label = document.getElementById('province').innerHTML + '&nbsp;' +
					document.getElementById('city').innerHTML + '&nbsp;' +
					document.getElementById('district').innerHTML;
		document.getElementById('area_label').innerHTML = label;
		
		Ajax.call('goods.php', 'act=get_pickup_point_list&district_id='+region_id, function(res) {
			var result = '<ul>';
				if(res.length > 0)
				{
					for(var i=0; i<res.length; i++)
					{
						result += '<li>'+res[i].shop_name+'&nbsp;&nbsp;地址：'+res[i].address+
									'<br>联系人：'+res[i].contact+'&nbsp;&nbsp;联系方式：'+res[i].phone + '</li>';
					}
					result += '</ul>';
					document.getElementById('pickup_point_list').innerHTML = result;
				}
				else
					document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';

				hide_area();
				show_list();
		}, 'GET', 'JSON');
	}
	function show_area()
	{
		document.getElementById('area_label').style.borderBottom = "1px #fff solid";
		document.getElementById('area_list_wrap').style.display = "block";
	}
	function hide_area()
	{
		document.getElementById('area_label').style.borderBottom = "1px solid #ccc";
		document.getElementById('area_list_wrap').style.display = "none";
	}
</script>
</html>
