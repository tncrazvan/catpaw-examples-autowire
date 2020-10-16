<?php
namespace api\http;

use com\github\tncrazvan\catpaw\http\HttpEventHandler;
use com\github\tncrazvan\catpaw\http\methods\HttpMethodGet;
use com\github\tncrazvan\catpaw\http\methods\HttpMethodPost;
use models\Account;
use services\AccountService;

//Autowiring tools
use io\github\tncrazvan\autowire\Autowired;
use io\github\tncrazvan\autowire\Singleton;

class AccountController extends HttpEventHandler implements HttpMethodGet,HttpMethodPost{
    use Singleton;
    use Autowired;

    public AccountService $service;

    public function post(Account $account):string{
        $this->service->save($account);
        return "Account created!";
    }

    public function get():array{
        return $this->service->findAll();
    }
}