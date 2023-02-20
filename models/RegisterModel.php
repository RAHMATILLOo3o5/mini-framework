<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public $fullname;
    public $username;
    public $email;
    public $password;
    public $confirmPassword;

    public function rules()
    {
        return [
            'fullname' => [self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4], [self::RULE_MAX, 'max' => 16]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }

    public function register()
    {
        return true;
    }
}
