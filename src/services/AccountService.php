<?php
namespace services;

use models\Account;
use io\github\tncrazvan\autowire\Singleton;

class AccountService{
    use Singleton;

    private static array $users = [];

    public function save(Account $account):void{
        static::$users[$account->username] = $account;
    }

    public function findAll():array{
        return static::$users;
    }
}