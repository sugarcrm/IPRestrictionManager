<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomCurrentUserMobileApi extends CurrentUserMobileApi
{
    /**
     * Register api endpoints
     * @return array
     */
    public function registerApiRest()
    {
        //in case we want to add additional endpoints
        return parent::registerApiRest();
    }

    /**
     * Retrieves the current user info
     *
     * @param $api
     * @param $args
     * @return array
     */
    public function retrieveCurrentUser($api, $args)
    {
        $data = parent::retrieveCurrentUser($api, $args);

        $current_user = $this->getUserBean();
        \BeanFactory::newBean('IRM_IPRestrictionManager')->validateAPI($api, $current_user->user_name, $api->platform);

        return $data;
    }
}