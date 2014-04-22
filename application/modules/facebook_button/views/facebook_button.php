<?php 



if (@$user_profile): ?>

	<li><a href="?action=logout">Logout</a></li>
    <?php echo "<li>".$user_profile['name']."</li>"; ?>

<?php else: ?>
    <a href="<?= $login_url ?>"><img src="<?= base_url().'assets/img/fblogin2.png' ?>" alt="Connect with Facebook"></a>
<?php endif; ?>