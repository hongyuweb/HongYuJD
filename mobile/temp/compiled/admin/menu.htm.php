<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>ECSHOP Menu</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="styles/general.css" rel="stylesheet" type="text/css" />

<script language="JavaScript">

<!--

var noHelp   = "<p align='center' style='color: #666'><?php echo $this->_var['lang']['no_help']; ?></p>";

var helpLang = "<?php echo $this->_var['help_lang']; ?>";

//-->

</script>



<style type="text/css">

.article_menu{margin:0; padding:0; width:178px; overflow:hidden;}

.article_menu UL{

 WIDTH: 100%;margin:0; padding:0; 

}

.article_menu LI {

	LIST-STYLE-TYPE: none; TEXT-ALIGN: left;

}

.article_menu LI.menu {

	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; WIDTH: 100%; PADDING-TOP: 0px

}

.article_menu LI.button_wu A {

	DISPLAY: block; FONT-SIZE: 14px; BACKGROUND: url(images/menu_bottom.gif) no-repeat 0px 0px; OVERFLOW: hidden; WIDTH: 100%; TEXT-INDENT: 35px; LINE-HEIGHT: 35px; POSITION: relative; HEIGHT: 35px;

}

.article_menu LI.button_wu A SPAN {

	RIGHT: 5px; BACKGROUND: url(images/help_menu-b5.gif) no-repeat; WIDTH: 16px; float:right; TOP: 15px; HEIGHT: 16px

}

.article_menu LI.button{}

.article_menu LI.button A {BACKGROUND: url(images/menu_bottom.gif) #e6e6e6 no-repeat center bottom;

DISPLAY: block; FONT-SIZE: 14px;OVERFLOW: hidden; WIDTH: 100%; TEXT-INDENT: 43px; LINE-HEIGHT: 35px; POSITION: relative; HEIGHT: 35px; 

}

.article_menu LI.button A em{background:url(images/allico.png) no-repeat;background-position:18px -528px;POSITION: absolute; top:0px; left:0px; width:45px; height:35px}

.article_menu LI.button a em#h1_02_cat_and_goods {

background-position:18px -3px;

}

.article_menu LI.button a em#h1_03_promotion {

background-position:18px -40px;

}

.article_menu LI.button a em#h1_04_order {

background-position:18px -82px;

}

.article_menu LI.button a em#h1_05_banner {

background-position:18px -120px;

}

.article_menu LI.button a em#h1_06_stats {

background-position:18px -160px;

}

.article_menu LI.button a em#h1_07_content {

background-position:18px -200px;

}

.article_menu LI.button a em#h1_08_members {

background-position:18px -242px;

}

.article_menu LI.button a em#h1_10_priv_admin {

background-position:18px -276px;

}

.article_menu LI.button a em#h1_11_system {

background-position:18px -313px;

}

.article_menu LI.button a em#h1_12_template {

background-position:18px -352px;

}

.article_menu LI.button a em#h1_13_backup {

background-position:18px -387px;

}

.article_menu LI.button a em#h1_14_sms {

background-position:18px -424px;

}

.article_menu LI.button a em#h1_15_rec {

background-position:18px -458px;

}



.article_menu LI.button a em#h1_16_email_manage {

background-position:18px -493px;

}

.article_menu LI.button A:hover {

	TEXT-DECORATION: none

}

.article_menu LI.button A SPAN {

	RIGHT: 5px; BACKGROUND: url(images/help_menu-plus.gif) no-repeat; WIDTH: 16px; POSITION: absolute; TOP: 15px; HEIGHT: 16px; display:none

}

.article_menu LI.button A SPAN.add{RIGHT: 5px; BACKGROUND: url(images/help_menu-b5.gif) no-repeat; WIDTH: 16px; POSITION: absolute; TOP: 15px; HEIGHT: 16px} 

#menu-ul-suo{BACKGROUND:url(images/show_right.gif) no-repeat left top; width:37px; height:490px; display:none; float:left;}

.dropdown {

	width:100%;

}

.dropdown LI {

	 DISPLAY: block; PADDING-LEFT: 55px; BACKGROUND: url(images/menu_arrow.gif) no-repeat 0px center; COLOR: #666; LINE-HEIGHT: 25px; BORDER-BOTTOM: #f2f2f2 1px solid; HEIGHT:25px; 

}

.article_menu P {

	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; TEXT-ALIGN: center

}

</style>









</head>

<body><div id="menu-list" class="article_menu">

<ul id="menu-ul">

  <li class="button" key="11_system" name="menu">

  <a href="javascript:void(0);"><em id="h1_11_system"></em>系统设置<span id="fa_11_system"></span></a></li>

  <li class="dropdown" id="11_system">

    <ul>

        <li class="dropdown"><a href="shop_config.php?act=list_edit" target="main_frame">商店设置</a></li>
        <li class="dropdown"><a href="menu.php?act=list" target="main_frame">自定义菜单</a></li>
        <li class="dropdown"><a href="payment.php?act=list" target="main_frame">支付方式</a></li>
        <li class="dropdown"><a href="website.php?act=list" target="main_frame">授权登录</a></li>
		<li class="dropdown"><a href="captcha_manage.php?act=main" target="main_frame">验证码管理</a></li>

    </ul>

</li>
 <li class="button" key="02_cat_and_goods" name="menu">

  <a href="javascript:void(0);"><em id="h1_02_cat_and_goods"></em>商品管理<span id="fa_02_cat_and_goods"></span></a></li>

  <li class="dropdown" id="02_cat_and_goods">
    <ul>
        <li class="dropdown"><a href="category.php?act=list" target="main_frame">商品分类</a></li>
		<li class="dropdown"><a href="brand.php?act=list" target="main_frame">商品品牌</a></li>
    </ul>

</li>

 <li class="button" key="15_distrib" name="menu">



  <a href="javascript:void(0);"><em id="h1_15_distrib"></em>分销管理<span id="fa_15_distrib"></span></a></li>

  <li class="dropdown" id="15_distrib">

    <ul>

        <li class="dropdown"><a href="distrib_goods.php?act=list" target="main_frame">分销商品列表</a></li>

        <li class="dropdown"><a href="distributor.php?act=list" target="main_frame">分销商列表</a></li>

        <li class="dropdown"><a href="affiliate.php?act=list" target="main_frame">分销等级设置</a></li>

        <li class="dropdown"><a href="affiliate_ck.php?act=list" target="main_frame">分成订单管理</a></li>

         <li class="dropdown"><a href="distrib_sort.php?act=list" target="main_frame">分销排行榜</a></li>
         
          <li class="dropdown"><a href="deposit_list.php?act=list" target="main_frame">提现申请列表</a></li>

    </ul>



</li>

<li class="button" key="05_banner" name="menu">

	<a href="javascript:void(0);"><em id="h1_05_banner"></em>广告管理<span id="fa_05_banner"></span></a></li>

   <li class="dropdown" id="05_banner">

   <ul>
        <li class="dropdown"><a href="ad_position.php?act=list" target="main_frame">广告位置</a></li>

        <li class="dropdown"><a href="ads.php?act=list" target="main_frame">广告列表</a></li>
    </ul>

    </li>


<li class="button" key="07_content" name="menu">

	<a href="javascript:void(0);"><em id="h1_07_content"></em>文章管理<span id="fa_07_content"></span></a></li>

   <li class="dropdown" id="07_content">

   <ul>

        <li class="dropdown"><a href="article.php?act=list" target="main_frame">文章列表</a></li>

        <li class="dropdown"><a href="articlecat.php?act=list" target="main_frame">文章分类</a></li>

    </ul>

    </li>
<li class="button" key="14_school" name="menu">

	<a href="javascript:void(0);"><em id="h1_14_school"></em>鸿宇多用户商城<span id="fa_14_school"></span></a></li>

   <li class="dropdown" id="14_school">

   <ul>
        <li class="dropdown"><a href="http://bbs.hongyuvip.com/" target="_blank">官方网址</a></li>

        <li class="dropdown"><a href="http://buy.hongyuvip.com/" target="_blank">鸿宇商城</a></li>

        <li class="dropdown"><a href="http://zc.hongyuvip.com/" target="_blank">鸿宇众筹</a></li>

        <li class="dropdown"><a href="http://bbs.hongyuvip.com/" target="_blank">在线论坛</a></li>

    </ul>
    </li>

  <li class="button" key="12_template" name="menu">

	<a href="javascript:void(0);"><em id="h1_12_template"></em>模板管理<span id="fa_12_template"></span></a></li>

   <li class="dropdown" id="12_template">

   <ul>

        <li class="dropdown"><a href="template.php?act=list" target="main_frame">模板选择</a></li>

        <li class="dropdown"><a href="template.php?act=setup" target="main_frame">设置模板</a></li>

        <li class="dropdown"><a href="template.php?act=library" target="main_frame">库项目管理</a></li>

        <li class="dropdown"><a href="edit_languages.php?act=list" target="main_frame">语言项编辑</a></li>

    </ul>

    </li>



  <li class="button" key="14_sms" name="menu">

  <a href="javascript:void(0);"><em id="h1_14_sms"></em>微信设置<span id="fa_14_sms"></span></a></li>

    <li class="dropdown" id="14_sms">

       <ul >

          <li class="dropdown"><a href="weixin_egg.php?act=list" target="main_frame">活动管理</a></li>

          <li class="dropdown"><a href="weixin.php?act=addconfig" target="main_frame">多微信设置</a></li>

          <li class="dropdown"><a href="weixin.php?act=addkey" target="main_frame">关键字回复</a></li>

          <li class="dropdown"><a href="weixin.php?act=addqcode" target="main_frame">生成二维码</a></li>

          <li class="dropdown"><a href="weixin_egg.php?act=log" target="main_frame">中奖管理</a></li>

          <li class="dropdown"><a href="weixin.php?act=config" target="main_frame">微信设置</a></li>

          <li class="dropdown"><a href="weixin.php?act=fans" target="main_frame">粉丝管理</a></li>

          <li class="dropdown"><a href="weixin.php?act=keywords" target="main_frame">功能变量</a></li>

          <li class="dropdown"><a href="weixin.php?act=menu" target="main_frame">自定义菜单</a></li>

          <li class="dropdown"><a href="weixin.php?act=news" target="main_frame">消息推送</a></li>

          <li class="dropdown"><a href="weixin.php?act=notice" target="main_frame">提醒设置</a></li>

          <li class="dropdown"><a href="weixin.php?act=oauth" target="main_frame">OAuth设置</a></li>

          <li class="dropdown"><a href="weixin.php?act=qcode" target="main_frame">管理二维码</a></li>

          <li class="dropdown"><a href="weixin.php?act=qiandao" target="main_frame">签到设置</a></li>

          <li class="dropdown"><a href="weixin.php?act=reg" target="main_frame">注册管理</a></li>

        </ul>

        </li>
        

</ul>



</div>

</body>

</html>