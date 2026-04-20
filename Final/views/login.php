<?php
$isDark = $theme === 'dark';
$bgColor = $isDark ? '#1e1e1e' : '#f4f4f4';
$textColor = $isDark ? '#f4f4f4' : '#1e1e1e';
?>
<html>
<head>
    <title>Login</title>
</head>
<body style="background: <?php echo $bgColor; ?>; color: <?php echo $textColor; ?>; font-family: Arial, sans-serif; padding: 20px;">
    <h1>Login Form</h1>
    <hr>

    <?php if (!empty($errors['general'])): ?>
        <p style="color: red;"><b><?php echo htmlspecialchars($errors['general'], ENT_QUOTES, 'UTF-8'); ?></b></p>
    <?php endif; ?>

    <form method="POST" action="index.php?action=login_submit">
        <table cellpadding="6">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo htmlspecialchars($old['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['password'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Login</button></td>
                <td></td>
            </tr>
        </table>
    </form>

    <p>
        <a href="index.php?action=register">Go to Register</a> |
        <a href="index.php?action=settings">Settings</a>
    </p>
</body>
</html>
