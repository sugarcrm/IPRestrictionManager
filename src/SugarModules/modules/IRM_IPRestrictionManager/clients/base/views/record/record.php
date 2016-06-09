<?php
$module_name = 'IRM_IPRestrictionManager';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'record' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'panel_header',
                                                'label' => 'LBL_RECORD_HEADER',
                                                'header' => true,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'picture',
                                                                'type' => 'avatar',
                                                                'width' => 42,
                                                                'height' => 42,
                                                                'dismiss_label' => true,
                                                                'readonly' => true,
                                                            ),
                                                        1 => 'name',
                                                        2 =>
                                                            array(
                                                                'name' => 'favorite',
                                                                'label' => 'LBL_FAVORITE',
                                                                'type' => 'favorite',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'follow',
                                                                'label' => 'LBL_FOLLOW',
                                                                'type' => 'follow',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'panel_body',
                                                'label' => 'LBL_RECORD_BODY',
                                                'columns' => 2,
                                                'labelsOnTop' => true,
                                                'placeholders' => true,
                                                'newTab' => false,
                                                'panelDefault' => 'expanded',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'ip_range',
                                                                'label' => 'LBL_IP_RANGE',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'status',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_STATUS',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'platforms',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PLATFORMS',
                                                                'span' => 12,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'description',
                                                                'span' => 12,
                                                            ),
                                                        4 => 'date_modified',
                                                        5 => 'date_entered',
                                                        6 =>
                                                            array(
                                                                'name' => 'modified_by_name',
                                                                'readonly' => true,
                                                                'label' => 'LBL_MODIFIED',
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'created_by_name',
                                                                'readonly' => true,
                                                                'label' => 'LBL_CREATED',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'templateMeta' =>
                                    array(
                                        'useTabs' => false,
                                    ),
                            ),
                    ),
            ),
    );
