<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 09:56
 */
class LocalPTypeBackend extends LocalPType
{
    private static $db = array(
        "URL" => "Varchar",
        "Software" => "Varchar",
        "Version" => "Varchar",
        "Deprecated" => "Boolean"
    );


}