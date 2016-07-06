<div class="ub user_check bg-color-w">
  <div class="ub-f1 selected" id="mobile_tab"><font>手机注册</font></div>
  <div class="ub-f1" id="email_tab"><font>邮箱注册</font></div>
</div>

<div class="bg-color" id="con_userTab_1">
  <div class="uc-a1 bg-color-w umar-t1 m-btm1 reg-p ubb ubt border-hui f-color-zi">
    <div class="ub uinn-eo8 ubb border-hui ulev-9 ub-ac p-r1" id='mobile_box'>
      <div class="uw-reg"> 手机 </div>
      <div class="ub-f1">
        <div class="uinput ub-f1">
          <input id="mobile" placeholder="请输入手机号" type="text" class="f-color-6"/>
        </div>
      </div>
      <div class="ub-img input-del h-w-6 uhide" id='clear_mobile'></div>
    </div>
    <div class="ub uinn-eo8 ubb border-hui ulev-9 ub-ac p-r1 uhide" id='email_box'>
      <div class="uw-reg"> EMAIL </div>
      <div class="ub-f1">
        <div class="uinput ub-f1">
          <input id="email" placeholder="请输入邮箱" type="email" class="f-color-6"/>
        </div>
      </div>
      <div class="ub-img input-del h-w-6 uhide" id='clear_email'></div>
    </div>
    <div class="ub uinn-eo8 ubb border-hui ulev-9 ub-ac p-r1">
      <div class="uw-reg"> 密码 </div>
      <div class="ub-f1">
        <div class="uinput ub-f1">
          <input id="password" placeholder="请输入6至20位字符" type="password" class="f-color-6"/>
        </div>
      </div>
      <div class="ub-img input-del h-w-6 uhide" id='clear_password'></div>
      <div class="ub-img input-eye-off h-w-5" id='show_password'></div>
    </div>
    <div class="ub uinn-eo8 <?php if ($this->_var['enabled_captcha']): ?>ubb border-hui<?php endif; ?> ulev-9 ub-ac p-r1 " id='mobile_verify_box'>
      <div class="uw-reg"> 短信验证码 </div>
      <div class="ub-f1 uinput" style="width:6em">
        <input id="mobile_code" placeholder="请输入验证码" type="text" class="f-color-6"/>
      </div>
      <div class="btn-red-1 ulev-2" id='get_mobile_code' data-count='60' data-origin_html='获取验证码' data-origin_count='60'>获取验证码</div>
    </div>
    <div class="ub uinn-eo8 <?php if ($this->_var['enabled_captcha']): ?>ubb border-hui<?php endif; ?> ulev-9 ub-ac p-r1 uhide" id='email_verify_box'>
      <div class="uw-reg"> 邮箱验证码 </div>
      <div class="ub-f1 uinput" style="width:6em">
        <input id="email_code" placeholder="请输入验证码" type="text" class="f-color-6"/>
      </div>
      <div class="btn-red-1 ulev-2" id='get_email_code' data-count='3' data-origin_html='获取验证码' data-origin_count='3'>获取验证码</div>
    </div>
	</div>
  <div class="ub ub-ac m-all3">
    <input type="checkbox" class="checkbox" checked=true id='agreement'>
    <label for="agreement"></label>
    <div class="ulev-1 m-l3 sc-text-active1 ad" ad_link="article/-1">我已看过并接受《用户协议》</div>
  </div>
  <div>
    <div class="m-all3">
      <div class="user-btn" id="confirm_register_button"> 注册 </div>
    </div>
  </div>
</div>
