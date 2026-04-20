<?php
$isDark = $theme === 'dark';
$bgColor = $isDark ? '#1e1e1e' : '#f4f4f4';
$textColor = $isDark ? '#f4f4f4' : '#1e1e1e';
?>
<html>
<head>
    <title>Register</title>
</head>
<body style="background: <?php echo $bgColor; ?>; color: <?php echo $textColor; ?>; font-family: Arial, sans-serif; padding: 20px;">
    <h1>Registration Form</h1>
    <hr>

    <form method="POST" action="index.php?action=register_submit">
        <table cellpadding="6">
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?php echo htmlspecialchars($old['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo htmlspecialchars($old['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['password'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password"></td>
                <td><span style="color: red;"><?php echo htmlspecialchars($errors['confirm_password'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Register</button></td>
                <td></td>
            </tr>
        </table>
    </form>

    <p>
        <a href="index.php?action=login">Go to Login</a> |
        <a href="index.php?action=settings">Settings</a>
    </p>
</body>
</html>
