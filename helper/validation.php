<?php

function validateloginrequest(loginrequeest $request)
{
    if (!isset($request->username)) {
        throw new validationexception("username is null");
    }  else  if (!isset($request->password)) {
        throw new validationexception("password is null");
    }  else  if (!isset($request->username)) {
        throw new validationexception("username is null");
    }  else  if (!isset($request->password)) {
        throw new validationexception("username is null");
    }
}