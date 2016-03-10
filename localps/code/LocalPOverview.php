<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 10:47
 */
class LocalPOverview extends Page
{

}

class LocalPOverview_Controller extends Page_Controller implements PermissionProvider
{
    private static $allowed_actions = array(
        "showProjects"
    );
    public function init() {
        parent::init();
        if(!Permission::check("LOCALP_VIEW_OVERVIEWPAGE")) Security::permissionFailure();
    }

    public function providePermissions() {
        return array(
            "LOCALP_VIEW_OVERVIEWPAGE" => "Access the Password Overview Site",
        );
    }

    public function addButton() {
        return "";
    }
    public function showProjects() {
        $projects = DataObject::get("LocalPProject")->sort(array("Title"));
        $data = ArrayData::create(
            array(
                "Title" => "Projekte",
                "Subtitle" => "Projektübersicht",
                "AddButton" => true,
                "Projects" => $projects
            )
        );
        return $this->customise($data)->renderWith(array("Listing", "LocalPOverview"));
    }
}