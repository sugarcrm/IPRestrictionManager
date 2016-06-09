<?php
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2014 SugarCRM Inc. All rights reserved.
 */
$dictionary['IRM_IPRestrictionManager'] = array(
    'table' => 'irm_iprestrictionmanager',
    'audited' => true,
    'activity_enabled' => false,
    'acls' => array('SugarACLAdminOnly' => true),
    'duplicate_merge' => true,
    'fields' => array(
        'name' =>
            array(
                'name' => 'name',
                'vname' => 'LBL_NAME',
                'type' => 'name',
                'link' => true,
                'dbType' => 'varchar',
                'len' => '255',
                'unified_search' => false,
                'full_text_search' =>
                    array(
                        'boost' => '3',
                        'enabled' => true,
                    ),
                'required' => true,
                'importable' => 'true',
                'duplicate_merge' => 'enabled',
                'merge_filter' => 'selected',
                'duplicate_on_record_copy' => 'always',
                'massupdate' => false,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'duplicate_merge_dom_value' => '3',
                'audited' => false,
                'reportable' => false,
                'calculated' => false,
                'size' => '20',
            ),
        'ip_range' =>
            array(
                'required' => true,
                'name' => 'ip_range',
                'vname' => 'LBL_IP_RANGE',
                'type' => 'varchar',
                'massupdate' => false,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'full_text_search' =>
                    array(
                        'boost' => '0',
                        'enabled' => false,
                    ),
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'status' =>
            array(
                'required' => false,
                'name' => 'status',
                'vname' => 'LBL_STATUS',
                'type' => 'enum',
                'massupdate' => true,
                'default' => 'Enabled',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => 100,
                'size' => '20',
                'options' => 'ip_restriction_status_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'platforms' =>
            array(
                'required' => true,
                'name' => 'platforms',
                'vname' => 'LBL_PLATFORMS',
                'type' => 'multienum',
                'massupdate' => true,
                'default' => '^All^',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'size' => '20',
                'options' => 'ip_restriction_platforms_list',
                'studio' => 'visible',
                'dependency' => '',
                'isMultiSelect' => true,
            ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('IRM_IPRestrictionManager', 'IRM_IPRestrictionManager', array('basic', 'assignable'));