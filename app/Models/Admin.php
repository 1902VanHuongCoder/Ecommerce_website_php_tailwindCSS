<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins'; // Bảng dữ liệu tương ứng với model
    protected $fillable = ['name', 'email', 'password']; // trường dữ liệu có thể gán trực tiếp

    public static function validate(array $data)
    {
        $errors = [];
        if (!$data["name"]) {
            $errors['email'] = 'Invalid name.';
        }
        if (!$data['email']) {
            $errors['email'] = 'Invalid email.';
        } elseif (static::where('email', $data['email'])->count() > 0) {
            $errors['email'] = 'Email already in use.';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['password_confirmation']) {
            $errors['password'] = 'Password confirmation does not match.';
        }
        return $errors;
    }
}
