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
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="themes/68ecshopcom_360buy/css/auction_goods.css">
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/auction.js"></script>
<script type="text/javascript">
	    var charset=document.charset||document.characterSet;
	    if(charset=="utf-8"||charset=="UTF-8"){
		}else{
		     if(document.charset==undefined){
			     if(document.characterSet!=undefined){
				    document.characterSet="UTF-8";
				 }
			 }else{
			      document.charset="UTF-8";
			 }
			 window.location.reload();
	    }

        window.pageConfig={
            navId:"auction"
        };

        var _nowMil=1407803327340;
</script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.9.1.min.js" ></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js,transport.js')); ?>
</head>
<body>
<div id="site-nav"> 
	<?php echo $this->fetch('library/page_header.lbi'); ?> 
    <div class="blank"></div>
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
    <div class="w">
    <div id="product-intro">
          <div class="p-img"> 
          	<a href="<?php echo $this->_var['auction_goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?>">
            	<img src="<?php echo $this->_var['auction_goods']['original_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['auction_goods']['goods_name']); ?>" height="400" width="400"/>
            </a> 
          </div>
          <div class="p-info">
        	<h1><?php echo $this->_var['lang']['goods_name']; ?>：<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?></h1>
        	<div class="list-info"> 
              <form name="theForm" action="auction.php" method="post">
            	<p class="list_info_d"><?php echo $this->_var['lang']['au_current_price']; ?>：<span style="color:#E31939;"><?php echo $this->_var['auction']['formated_current_price']; ?></span></p>
            	<p class="list_info_s">起止时间：<?php echo $this->_var['auction']['start_time']; ?> -- <?php echo $this->_var['auction']['end_time']; ?></p>
            	<p class="list_info_d"><?php echo $this->_var['lang']['au_start_price']; ?>：<span><?php echo $this->_var['auction']['formated_start_price']; ?></span></p>
            	<p class="list_info_s"><?php echo $this->_var['lang']['au_amplitude']; ?>：<?php echo $this->_var['auction']['formated_amplitude']; ?></p>
                <?php if ($this->_var['auction']['end_price'] > 0): ?> 
            	<p class="list_info_d">
                  <?php echo $this->_var['lang']['au_end_price']; ?>：<span><?php echo $this->_var['auction']['formated_end_price']; ?></span></p>
                <?php endif; ?> 
                <?php if ($this->_var['auction']['deposit'] > 0): ?>
            	<p class="au_deposit"><?php echo $this->_var['lang']['au_deposit']; ?>：<?php echo $this->_var['auction']['formated_deposit']; ?></p>
                <?php endif; ?> 
            	<div style="clear:both"></div>
                <?php if ($this->_var['auction']['status_no'] == 0): ?> 
            	<p><?php echo $this->_var['lang']['au_pre_start']; ?></p>
            	<?php elseif ($this->_var['auction']['status_no'] == 1): ?> 
            	<p><font class="f4"><?php echo $this->_var['lang']['au_under_way']; ?><span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font></p>
            	<?php else: ?> 
            	<?php if ($this->_var['auction']['is_winner']): ?> 
                <p style="padding-bottom:20px"><span class="f_red"><?php echo $this->_var['lang']['au_is_winner']; ?></span>
            	<input name="buy" type="submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['button_buy']; ?>" />
            	<input name="act" type="hidden" value="buy" />
            	<input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" />
            	<?php else: ?> 
            	<?php echo $this->_var['lang']['au_finished']; ?>，
                <?php if ($_SESSION['user_id']): ?>
                <?php echo $this->_var['lang']['au_final_bid_not_you']; ?>
                <?php else: ?>
                <?php echo $this->_var['lang']['au_buy_after_login']; ?>，<?php echo $this->_var['lang']['au_final_unlogin']; ?>
            	<?php endif; ?> 
                </p>
            	<?php endif; ?> 
            	<?php endif; ?>
          	  </form>
            </div>
        	<div class="" id="au-key">
              <div class="a-key" id="bid-info">
            	<div class="quantity-form" id="quantityFormId">
                  <form name="theForm" action="auction.php" method="post">
                	<?php echo $this->_var['lang']['au_i_want_bid']; ?>：
                	<input name="price" type="text" class="inputBg" size="8"/>
                	<input name="bid" type="submit" class="bnt_blue" value="<?php echo $this->_var['lang']['button_bid']; ?>" />
                	<input name="act" type="hidden" value="bid" />
                	<input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" />
                	<input name="act_count" type="hidden" value="<?php echo $this->_var['auction_log_count']; ?>" />
                	<br />
              	</form>
              </div>
            <div class="btns"><a class="btn-bid" id="buy-btn" href="#"></a></div>
            <div class="auc-infos"><span id="checkLast8BidRecords">【点击查看（共<?php echo $this->_var['auction_log_count']; ?>次出价）】<b class="icon-tria"></b></span></div>
            <div class="auctioninfo">
              <div class="tb-void">
                <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                      <tr>
                    <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_user']; ?></th>
                    <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_price']; ?></th>
                    <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_time']; ?></th>
                  </tr>
                      <style type="text/css">
	 				  .tb-void table .oushu td{background:#fff;}
	  				  .tb-void table .jishu td{background:#F9F9F9;}
	  				  </style>
                      <?php $_from = $this->_var['auction_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');$this->_foreach['fe_bid_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_bid_log']['total'] > 0):
    foreach ($_from AS $this->_var['log']):
        $this->_foreach['fe_bid_log']['iteration']++;
?>
                      <tr class="oushu <?php if ($this->_foreach['fe_bid_log']['iteration'] % 2 == 1): ?>jishu<?php endif; ?>">
                    <td align="center"><?php echo $this->_var['log']['user_name']; ?></td>
                    <td align="center"><?php echo $this->_var['log']['formated_bid_price']; ?></td>
                    <td align="center"><?php echo $this->_var['log']['bid_time']; ?></td>
                  </tr>
                      <?php endforeach; else: ?>
                      <tr>
                    <td colspan="4" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_bid_log']; ?></td>
                  </tr>
                      <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </table>
              </div>
                </div>
          </div>
            </div>
      </div>
        </div>
    <?php echo $this->fetch('library/auction_process.lbi'); ?>
    <?php echo $this->fetch('library/auction_jieshao.lbi'); ?> 
  </div>
  <div style="height:20px;line-height:20px;clear:both"></div>
<?php echo $this->fetch('library/help.lbi'); ?> 
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
</div>
</body>
<script type="text/javascript">
    $(function(){
        // checkBidRecordsAll MORE
        $('.checkBidRecordsAll').livequery('click',function(){
            loadBidRecord(getUrlParameter("dealId"),1,2147483647);
        });

        //checkLast8BidRecords
        $('#checkLast8BidRecords').livequery('click',function(){
            loadBidRecord(getUrlParameter("dealId"));

            var parentAuKey = $(this).parents("#au-key");
            if (parentAuKey.hasClass('select')) {
                parentAuKey.removeClass();
            } else {
                parentAuKey.addClass('select');
            }
        });

    })

</script> 
<script type="text/javascript">

    $(function(){
        $(".a-flex s,.a-flex dt a").hover(function () { 
			$(this).siblings(".prompt").show() 
			}, function () { 
			$(this).siblings(".prompt").hide() 
	});
	})
</script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/lib-v1.js" ></script> 
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['auction']['gmt_end_time']) ? '0' : $this->_var['auction']['gmt_end_time']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
var now_time = <?php echo $this->_var['now_time']; ?>;
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
  try
  {
    onload_leftTime(now_time);
  }
  catch (e)
  {}
}

</script>
</html>