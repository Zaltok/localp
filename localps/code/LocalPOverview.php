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
    public function init() {
        parent::init();
        if(!Permission::check("LOCALP_VIEW_OVERVIEWPAGE")) Security::permissionFailure();
    }

    public function providePermissions() {
        return array(
            "LOCALP_VIEW_OVERVIEWPAGE" => "Access the Password Overview Site",
        );
    }
}