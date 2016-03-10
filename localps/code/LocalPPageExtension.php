<?php

class LocalPPageExtension extends DataExtension
{
    private static $db = array(
        "PageIconClass" => "Varchar",
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->insertBefore( "Content", new TextField('PageIconClass', 'Icon Class'));
    }

}