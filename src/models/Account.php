<?php
namespace models;

use com\github\tncrazvan\catpaw\http\HttpRequestBody;

class Account extends HttpRequestBody{
    public string $username;
    public string $password;
    public string $otherDetails;
}