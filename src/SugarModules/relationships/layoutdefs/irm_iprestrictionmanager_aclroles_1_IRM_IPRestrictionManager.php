<?php
// created: 2014-05-15 22:32:27
$layout_defs["IRM_IPRestrictionManager"]["subpanel_setup"]['irm_iprestrictionmanager_aclroles_1'] = array(
    'order' => 100,
    'module' => 'ACLRoles',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_IRM_IPRESTRICTIONMANAGER_ACLROLES_1_FROM_ACLROLES_TITLE',
    'get_subpanel_data' => 'irm_iprestrictionmanager_aclroles_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);
