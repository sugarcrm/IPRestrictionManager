<?php
// created: 2014-05-15 22:25:16
$layout_defs["Roles"]["subpanel_setup"]['irm_iprestrictionmanager_roles'] = array(
    'order' => 100,
    'module' => 'IRM_IPRestrictionManager',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_IRM_IPRESTRICTIONMANAGER_ROLES_FROM_IRM_IPRESTRICTIONMANAGER_TITLE',
    'get_subpanel_data' => 'irm_iprestrictionmanager_roles',
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
