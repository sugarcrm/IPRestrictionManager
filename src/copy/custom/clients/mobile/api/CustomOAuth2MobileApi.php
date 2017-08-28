<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomOAuth2MobileApi extends OAuth2MobileApi
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
     * Override to monitor the token function
     * @param $api
     * @param $args
     * @throws OAuth2ServerException
     * @throws SugarApiExceptionClientOutdated
     * @throws SugarApiExceptionInvalidParameter
     */
    public function token($api, $args)
    {
        //continue with authentication
        $response = parent::token($api, $args);

        \BeanFactory::newBean('IRM_IPRestrictionManager')->validateAPI($api, $args['username'], $args['platform']);

        return $response;
    }
}