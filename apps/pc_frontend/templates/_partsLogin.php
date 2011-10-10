<?php $root_dir = dirname($sf_request->getScriptName()) ?>
<img src="<?php echo $root_dir.'/login/main.jpg'?>" class="test" alt="" />
<div id="<?php echo $id ?>" class="loginForm">
<form action="<?php echo url_for(sprintf('member/login?%s=%s', sfOpenPNEAuthForm::AUTH_MODE_FIELD_NAME, $form->getAuthMode())) ?>" method="post">
<?php foreach ($form as $name => $field): ?>
<?php echo $field->render() ?>
<?php endforeach; ?>
<input type="image" name="submit" src="<?php echo image_path('dummy.gif') ?>" id="button_login" alt="ログイン" />
<?php if ($form->getAuthAdapter()->getAuthConfig('invite_mode') == 2 && opToolkit::isEnabledRegistration('pc')) : ?>
<?php echo link_to('<img src="'.image_path('dummy.gif').'" alt="新規登録" />', $form->getAuthAdapter()->getAuthConfig('self_invite_action'), array('id' => 'button_new_regist')) ?>
<?php endif; ?>
</form>
<label for="authMailAddress_is_remember_me" class="remember_msg">次回から自動的にログイン</label>
<?php if ($form->getAuthAdapter()->getAuthConfig('help_login_error_action')) : ?>
<div>
<span class="password_query"><?php echo link_to(__('Can not access your account?'), $form->getAuthAdapter()->getAuthConfig('help_login_error_action')); ?></span>
</div>
<?php endif; ?>
</div>

<div class="footer">
<?php echo link_to(__('Privacy policy'), '@privacy_policy', array('target' => '_blank')); ?> 
<?php echo link_to(__('Terms of service'), '@user_agreement', array('target' => '_blank')); ?> Powered by <a href="http://www.openpne.jp/" target="_blank">OpenPNE</a>
</div>
