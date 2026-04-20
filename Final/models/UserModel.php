<?php

class UserModel
{
    private string $storagePath;

    public function __construct()
    {
        $this->storagePath = __DIR__ . '/data/registered_user.json';
    }

    public function saveUser(string $username, string $email, string $passwordHash): void
    {
        $directory = dirname($this->storagePath);
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        $payload = [
            'username' => $username,
            'email' => $email,
            'password_hash' => $passwordHash
        ];

        file_put_contents($this->storagePath, json_encode($payload, JSON_PRETTY_PRINT));
    }

    public function getRegisteredUser(): ?array
    {
        if (!file_exists($this->storagePath)) {
            return null;
        }

        $contents = file_get_contents($this->storagePath);
        if ($contents === false) {
            return null;
        }

        $user = json_decode($contents, true);
        if (!is_array($user)) {
            return null;
        }

        if (empty($user['username']) || empty($user['email']) || empty($user['password_hash'])) {
            return null;
        }

        return $user;
    }
}
