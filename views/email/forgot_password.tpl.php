<p style="font-szie:16px;">亲爱的IT桔子用户 [<?php echo $identity;?>] ，这是一封让您重置密码的邮件，请打开下面的链接：</p>
<br />
<p style="font-szie:14px;"><?php echo  anchor('user/reset_password/'. $forgotten_password_code);?></p>
<br />
<p style="font-szie:14px;">友情提醒：如果您本人并没有要求重置密码，请忽略本邮件，谢谢。</p>
<p style="text-align:right;font-szie:14px;">IT桔子团队敬上</p>