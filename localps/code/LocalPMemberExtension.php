<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 13:20
 */
class LocalPMemberExtension extends DataExtension
{
    private static $belongs_many_many = array(
        "Project" => "LocalPProject"
    );

}