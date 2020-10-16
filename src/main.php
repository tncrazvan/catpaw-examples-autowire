<?php

use api\http\AccountController;
use com\github\tncrazvan\catpaw\tools\Caster;
use models\Account;

return [
    "port" => 80,
    "webRoot" => "../public",
    "sessionName" => "../_SESSION",
    "asciiTable" => false,
    "events" => [
        "http"=>[
            "/account" => fn(Account $body) => AccountController::singleton($body)
        ],
        "websocket"=>[]
    ]
];