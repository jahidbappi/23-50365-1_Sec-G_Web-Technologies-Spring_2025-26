<?php
$isDark = $theme === 'dark';
$bgColor = $isDark ? '#1e1e1e' : '#f4f4f4';
$textColor = $isDark ? '#f4f4f4' : '#1e1e1e';
?>
<html>
<head>
    <title>Settings</title>
</head>
<body style="background: <?php echo $bgColor; ?>; color: <?php echo $textColor; ?>; font-family: Arial, sans-serif; padding: 20px;">
    <h1>Theme Settings</h1>
    <hr>

    <form method="POST" action="index.php?action=save_settings">
        <table cellpadding="6">
            <tr>
                <td>Choose Theme</td>
                <td>
                    <select id="theme" name="theme">
                        <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>>Light</option>
                        <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>>Dark</option>
                    </select>
                </td>
                <td><button type="submit">Save</button></td>
            </tr>
        </table>
    </form>

    <p>Cookie expiry: 30 days</p>

    <p>
        <a href="index.php?action=register">Register</a> |
        <a href="index.php?action=login">Login</a>
        <?php if (!empty($_SESSION['user'])): ?>
            | <a href="index.php?action=dashboard">Dashboard</a>
        <?php endif; ?>
    </p>
</body>
</html>
