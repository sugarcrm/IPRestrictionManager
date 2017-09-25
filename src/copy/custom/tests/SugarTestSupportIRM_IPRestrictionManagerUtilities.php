<?php

require_once('custom/tests/SugarTestSupportUtilities.php');

class SugarTestSupportIRM_IPRestrictionManagerUtilities extends SugarTestSupportUtilities
{
    protected $_beanName = 'IRM_IPRestrictionManager';

    public function __construct()
    {
        parent::__construct();
    }

    public function create($attributes = array(), $defaults= array())
    {
        //set defaults
        $coreDefaults = array(
            'enabled' => true,
            'ip_range' => '*.*.*.*',
            'platforms' => '^All^',
        );

        $defaults = $this->merge($defaults, $coreDefaults);

        $bean = parent::create($attributes, $defaults);
        return $bean;
    }
}
