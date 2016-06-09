<?php
// created: 2014-05-16 12:18:23
$layout_defs["IRM_IPRestrictionManager"]["subpanel_setup"]['irm_iprestrictionmanager_teams'] = array(
    'order' => 100,
    'module' => 'Teams',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_IRM_IPRESTRICTIONMANAGER_TEAMS_FROM_TEAMS_TITLE',
    'get_subpanel_data' => 'irm_iprestrictionmanager_teams',
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
