<?php

class Request{
    private $_requestSql;
    private $_params;

    function __construct($requestSql, $params) {
        $this->$_requestSql = $requestSql;
        $this->$_params = $params;
    }
    function getRequest(){
        
    }
}