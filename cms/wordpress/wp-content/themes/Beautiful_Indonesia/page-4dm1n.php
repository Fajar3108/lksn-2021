<?php 
    if (is_user_logged_in()) {
        wp_redirect(admin_url());
        exit;
    } else {
        $args = [
            'redirect' => admin_url(),
            'form_id' => 'loginform-custom',
            'remember' => true
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php wp_head() ?>

    <style>
        body {
            background-image: url(<?= get_template_directory_uri() . '/photos/bali.jpg' ?>);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body id="login">
    <div class="login-card">
        <h1>Login</h1>
        <?php if ($_GET['login'] == 'failed') : ?>
        <div class="login-error" id="login-error">
            * <?= str_replace('_', ' ', $_GET['reason']) ?>
        </div>
        <?php endif ?>
        <?php wp_login_form($args); ?>
    </div>
</body>
</html>