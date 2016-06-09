<?php
$module_name = 'IRM_IPRestrictionManager';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'list' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'name',
                                                                'label' => 'LBL_NAME',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                                'width' => '10%',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'ip_range',
                                                                'label' => 'LBL_IP_RANGE',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'platforms',
                                                                'label' => 'LBL_PLATFORMS',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'modified_by_name',
                                                                'label' => 'LBL_MODIFIED',
                                                                'enabled' => true,
                                                                'readonly' => true,
                                                                'id' => 'MODIFIED_USER_ID',
                                                                'link' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'label' => 'LBL_DATE_MODIFIED',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'name' => 'date_modified',
                                                                'readonly' => true,
                                                                'width' => '10%',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'orderBy' =>
                                    array(
                                        'field' => 'date_modified',
                                        'direction' => 'desc',
                                    ),
                            ),
                    ),
            ),
    );
