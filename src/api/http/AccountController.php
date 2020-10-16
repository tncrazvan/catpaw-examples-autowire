<?php
namespace api\http;

use io\github\tncrazvan\autowire\Autowired;
use com\github\tncrazvan\catpaw\http\HttpEventHandler;
use com\github\tncrazvan\catpaw\http\methods\HttpMethodPost;
use io\github\tncrazvan\autowire\Singleton;
use models\Account;
use services\AccountService;

class AccountController extends HttpEventHandler implements HttpMethodPost{
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