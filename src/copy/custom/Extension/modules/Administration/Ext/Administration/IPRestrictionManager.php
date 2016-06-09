<?php

//IP Restriction Manager Panel
$admin_option_defs = array();

$admin_option_defs['Administration']['IPRestrictionManager_IPRestrictionManager'] = array(
    'Password',
    'LBL_IP_RESTRICTION_MANAGER',
    'LBL_IP_RESTRICTION_MANAGER_DESCRIPTION',
    'javascript:parent.SUGAR.App.router.navigate("IRM_IPRestrictionManager", {trigger: true});'
);

$admin_group_header[] = array(
    'LBL_IP_RESTRICTION_MANAGEMENT',
    '',
    false, $admin_option_defs,
    ''
);