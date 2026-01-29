<?php

require_once "Exception/ValidationException.php";
require_once "Data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "husayni";
$request->password = "rahasia";

ValidationUtil::validatereflection($request);


validationutil::validatereflection($request);
class reqisteruserrequest
{
    public ?string $name;
    public ?string  $address;
    public ?string  $emaill;
}

$register = new registeruserrequest();
$register->name = "husayni";
$register->address ="jember";
$register->email="husasasa123@gmail.com";

validationutil::validatereflection($register);
