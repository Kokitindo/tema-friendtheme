<?php if (function_exists('fbc_button')) { ?><button class="btn btn-facebook"><?php fbc_button(); ?></button><?php } ?>
<?php if (function_exists('social_login_botton')) { social_login_botton(); } ?>
<?php osc_run_hook('sc_buttons'); ?>