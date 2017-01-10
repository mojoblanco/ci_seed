<h1>Hello!, Welcome to my application</h1>

<?php if ($this->ion_auth->logged_in()) : ?>
    <h4>You are Logged in</h4>
<?php else: ?>
    <h4>You are not logged in</h4>
<?php endif; ?>

<?php print_r( $user ); ?>