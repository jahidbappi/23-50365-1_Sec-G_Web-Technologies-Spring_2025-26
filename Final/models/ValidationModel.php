<?php

class ValidationModel
{
    public function validateRegistration(array $data): array
    {
        $errors = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirm_password' => ''
        ];

        if (empty(trim($data['username'] ?? ''))) {
            $errors['username'] = 'Username is required.';
        } elseif (strlen(trim($data['username'])) < 3) {
            $errors['username'] = 'Username must be at least 3 characters.';
        }

        if (empty(trim($data['email'] ?? ''))) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Enter a valid email address.';
        }

        if (empty($data['password'] ?? '')) {
            $errors['password'] = 'Password is required.';
        } elseif (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        }

        if (empty($data['confirm_password'] ?? '')) {
            $errors['confirm_password'] = 'Please confirm your password.';
        } elseif (($data['password'] ?? '') !== ($data['confirm_password'] ?? '')) {
            $errors['confirm_password'] = 'Passwords do not match.';
        }

        return $errors;
    }

    public function validateLogin(array $data): array
    {
        $errors = [
            'email' => '',
            'password' => '',
            'general' => ''
        ];

        if (empty(trim($data['email'] ?? ''))) {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Enter a valid email address.';
        }

        if (empty($data['password'] ?? '')) {
            $errors['password'] = 'Password is required.';
        }

        return $errors;
    }
}
