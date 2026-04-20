<?php
$isDark = $theme === 'dark';
$bgColor = $isDark ? '#1e1e1e' : '#f4f4f4';
$textColor = $isDark ? '#f4f4f4' : '#1e1e1e';
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body style="background: <?php echo $bgColor; ?>; color: <?php echo $textColor; ?>; font-family: Arial, sans-serif; padding: 20px;">
    <h1>Dashboard</h1>
    <hr>

    <p><b>Welcome:</b> <?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><b>Login Time:</b> <?php echo htmlspecialchars($loginTime, ENT_QUOTES, 'UTF-8'); ?></p>

    <p>
        <a href="index.php?action=settings">Settings</a> |
        <a href="index.php?action=logout">Logout</a>
    </p>
</body>
</html>
