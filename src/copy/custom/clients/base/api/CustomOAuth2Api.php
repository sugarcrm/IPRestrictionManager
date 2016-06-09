<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("clients/base/api/OAuth2Api.php");

class CustomOAuth2Api extends OAuth2Api
{
    public function registerApiRest()
    {
        //in case we want to add additional endpoints
        return parent::registerApiRest();
    }

    //override to modify the token function
    public function token($api, $args)
    {
        //continue with authentication
        $response = parent::token($api, $args);

        if (SugarAutoLoader::fileExists("modules/IRM_IPRestrictionManager/IRM_IPRestrictionManager.php")) {
            //check IP range for user
            $IPRestrictionsObj = BeanFactory::newBean('IRM_IPRestrictionManager');
            $isValidRange = $IPRestrictionsObj->validateUser($args);

            if (!$isValidRange) {
                //expire cookie
                if (isset($response['access_token'])) {
                    parent::logout($api, array(
                        'token' => $response['access_token']
                    ));
                }

                $beginning = translate("LBL_ERROR_BEGINNING", 'IRM_IPRestrictionManager');
                $join = translate("LBL_ERROR_JOIN", 'IRM_IPRestrictionManager');

                $e = new SugarApiExceptionNeedLogin("{$beginning} ({$IPRestrictionsObj->getIpAddress()}) {$join} ({$args['platform']}).");
                $api->needLogin($e);
            }
        }

        return $response;
    }
}