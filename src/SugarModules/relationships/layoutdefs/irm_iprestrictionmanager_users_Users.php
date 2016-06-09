<?php
// created: 2014-05-16 12:18:23
$layout_defs["Users"]["subpanel_setup"]['irm_iprestrictionmanager_users'] = array(
    'order' => 100,
    'module' => 'IRM_IPRestrictionManager',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_IRM_IPRESTRICTIONMANAGER_USERS_FROM_IRM_IPRESTRICTIONMANAGER_TITLE',
    'get_subpanel_data' => 'irm_iprestrictionmanager_users',
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
