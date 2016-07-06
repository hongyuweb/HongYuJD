<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/login.css"/>  

<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js,transport.js')); ?>
</head>
<body>
  
	<header id="header" class='header'>
    <div class="h-left"><a href="javascript:history.back(-1)" class="sb-back"></a></div>
	<div class="h-mid"><?php if ($this->_var['action'] == 'login'): ?>会员登录<?php endif; ?> <?php if ($this->_var['action'] == 'register'): ?>用户注册<?php endif; ?> <?php if ($this->_var['action'] == 'get_password'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'get_passwd_question'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'reset_password'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'qpassword_name'): ?>找回密码<?php endif; ?></div>
 </header>
  <?php if ($this->_var['action'] == 'login'): ?>
				<div class="denglu">
						<form action="user.php" method="post">
                            <div class="Login">
								<dl>
                                <dt>用户名：</dt>
							    <dd><input type="text" name="username" placeholder="请输入用户名/邮箱/手机号" value="" /></dd>
								</dl>
                                <dl style=" margin-top:15px;">
                                <dt>密码：</dt>
								<dd><input type="password" name="password" placeholder="密码"/></dd>
                                </dl>
								<?php if ($this->_var['enabled_captcha']): ?>
									<div class="yanzheng">
                                    
										<div class="codeTxt">
											<input type="text" name="captcha" placeholder="验证码" />
										</div>
										<div class="codePhoto">
											<img class="check-code-img" src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" height="35" />
										</div>
									</div>
								<?php endif; ?>
								<div class="field submit-btn">
									<input type="submit" class="btn_big1" onclick="member_login()" value="登 录" />
									<input type="hidden" name="act" value="act_login" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
								</div>
                                  <div class="ng-foot">
              <div class="ng-cookie-area" >
                <label class="bf1 login_ffri">
										<input type="checkbox" name="remember" value="1" checked=""> &nbsp;自动登录 
									</label>
              </div>
              <div class="ng-link-area" >
                <span style=" margin-right:5px; border-right:1px solid #eeeeee">
                  <a href="register.php" >免费注册</a>
                </span>
                 <span class="user_line"></span>
                   <span >
                  <a href="findPwd.php" >忘记密码？</a>
                </span>
              </div>
              <div class="third-area ">
                <div class="third-area-a">第三方登录</div>
                <a class="ta-qq" href="user.php?act=oath&type=qq" target="_blank" title="QQ"></a>
                <a class="ta-weibo" href="user.php?act=oath&type=weibo" target="_blank" title="weibo"></a>
                <a class="ta-alipay" href="user.php?act=oath&type=alipay" target="_blank" title="alipay"></a>
              </div>
            </div>
								
                              </div>
						</form>
			</div>
		<?php endif; ?>

</body>
</html>