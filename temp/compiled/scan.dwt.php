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
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/scan.css" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.9.1.min.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<div id="site-nav"> <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank"></div>
  <div class="w" >
    <div class="introduce"> 
    	<strong>智能扫货</strong> 
        <span>智能扫货的终端是一部无线扫描枪。您可以使用该扫描枪扫描您需要购买的商品，并编辑其购买数量。扫货完成后，请将光标定位到当前页输入框内。上传条码数据。您可以点击“预览”按钮，查看购物清单。确认无误后，点击“提交”，即可将清单内的商品快速加入购物车。 </span> 
    </div>
    <div class="a-flex">
      <dl>
        <dt>扫货流程</dt>
        <dd class="fore1"><s></s>
          <h5><span class="ftx-span">扫描枪扫货</span></h5>
          <b class="flex-icon"></b> 
        </dd>
        <dd class="fore2"><s></s>
          <h5><span class="ftx-span">光标定位</span></h5>
          <b class="flex-icon"></b> 
        </dd>
        <dd class="fore3"><s></s>
          <h5><span class="ftx-span">条码上传</span></h5>
          <b class="flex-icon"></b> 
        </dd>
        <dd class="fore4"><s></s>
          <h5><span class="ftx-span">预览商品</span></h5>
          <b class="flex-icon"></b> 
        </dd>
        <dd class="fore5"><s></s>
          <h5><span class="ftx-span">提交购物车</span></h5>
        </dd>
      </dl>
    </div>
    <div class="scan_list">
      <div class="scan_left">
      <form action="scan_list.php" method="post" name='frm'>
      	<textarea cols="60" rows="40" class="scan_left_con" name="data['fahuo']" id='send'><?php echo $this->_var['textvalue']; ?></textarea>
        <div class="submit">
		<input type="submit" value="预览" class="scan_con_sub" />
        </div>
	<input type='hidden' name='act' value='view'>
	</form>
      </div>
      <div class="scan_right">
      	<img src="themes/68ecshopcom_360buy/images/shengji_ad/scan.jpg" alt=""  />
      </div>
    </div>
    <div class="blank20"></div>
  </div>
  <?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
<script>
var obj = document.getElementById('send');
var val = obj.value;
obj.focus();
obj.value='';
obj.value=val;
</script>
</body>
</html>
