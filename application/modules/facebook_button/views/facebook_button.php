<?php 

/*
<a href="<?= $logout_url ?>">Logout</a>
*/

if (@$user_profile): ?>
<pre>
    <?php echo $user_profile['name']; ?>
</pre>
<?php else: ?>
    <a href="<?= $login_url ?>"><img src="<?= base_url().'assets/img/fblogin2.png' ?>" alt="Connect with Facebook"></a>
<?php endif; ?>