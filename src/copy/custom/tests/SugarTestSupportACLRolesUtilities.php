<?php

require_once('custom/tests/SugarTestSupportUtilities.php');

class SugarTestSupportACLRolesUtilities extends SugarTestSupportUtilities
{
    protected $_beanName = 'ACLRoles';

    public function __construct()
    {
        parent::__construct();
    }

    public function create($attributes = array(), $defaults= array())
    {
        //set defaults
        $coreDefaults = array(
        );

        $defaults = $this->merge($defaults, $coreDefaults);

        $bean = parent::create($attributes, $defaults);
        return $bean;
    }
}
