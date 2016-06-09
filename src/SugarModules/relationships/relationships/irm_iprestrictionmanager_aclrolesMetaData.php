<?php
// created: 2014-05-16 12:18:23
$dictionary["irm_iprestrictionmanager_aclroles"] = array(
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array(
            'irm_iprestrictionmanager_aclroles' =>
                array(
                    'lhs_module' => 'IRM_IPRestrictionManager',
                    'lhs_table' => 'irm_iprestrictionmanager',
                    'lhs_key' => 'id',
                    'rhs_module' => 'ACLRoles',
                    'rhs_table' => 'acl_roles',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'irm_iprestrictionmanager_aclroles_c',
                    'join_key_lhs' => 'irm_iprestrictionmanager_aclrolesirm_iprestrictionmanager_ida',
                    'join_key_rhs' => 'irm_iprestrictionmanager_aclrolesaclroles_idb',
                ),
        ),
    'table' => 'irm_iprestrictionmanager_aclroles_c',
    'fields' =>
        array(
            0 =>
                array(
                    'name' => 'id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            1 =>
                array(
                    'name' => 'date_modified',
                    'type' => 'datetime',
                ),
            2 =>
                array(
                    'name' => 'deleted',
                    'type' => 'bool',
                    'len' => '1',
                    'default' => '0',
                    'required' => true,
                ),
            3 =>
                array(
                    'name' => 'irm_iprestrictionmanager_aclrolesirm_iprestrictionmanager_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array(
                    'name' => 'irm_iprestrictionmanager_aclrolesaclroles_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array(
            0 =>
                array(
                    'name' => 'irm_iprestrictionmanager_aclrolesspk',
                    'type' => 'primary',
                    'fields' =>
                        array(
                            0 => 'id',
                        ),
                ),
            1 =>
                array(
                    'name' => 'irm_iprestrictionmanager_aclroles_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array(
                            0 => 'irm_iprestrictionmanager_aclrolesirm_iprestrictionmanager_ida',
                            1 => 'irm_iprestrictionmanager_aclrolesaclroles_idb',
                        ),
                ),
        ),
);