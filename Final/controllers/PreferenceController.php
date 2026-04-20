<?php

class PreferenceController
{
    public function getTheme(): string
    {
        $theme = $_COOKIE['theme'] ?? 'light';
        return $theme === 'dark' ? 'dark' : 'light';
    }

    public function showSettings(string $theme): void
    {
        include __DIR__ . '/../views/settings.php';
    }

    public function saveSettings(): void
    {
        $theme = $_POST['theme'] ?? 'light';
        $theme = $theme === 'dark' ? 'dark' : 'light';

        setcookie('theme', $theme, time() + (86400 * 30), '/');

        header('Location: index.php?action=settings');
        exit;
    }
}
