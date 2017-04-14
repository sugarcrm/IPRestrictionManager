<?php

$manifest = array(
    'built_in_version' => '7.2.0',
    'acceptable_sugar_versions' => array(
        'regex_matches' => array(
            '^7.5\\..+',
            '^7.6\\..+',
            '^7.7\\..+',
            '^7.8\\..+',
            '^7.9\\..+'
        )
    ),
    'acceptable_sugar_flavors' => array(
        0 => 'PRO',
        1 => 'CORP',
        2 => 'ENT',
        3 => 'ULT'
    ),
    'readme' => '',
    'key' => 'IRM',
    'author' => 'SugarCRM Developer Support',
    'description' => 'Allows for the ability to restrict user logins to specific ranges of ip addresses.',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'IP Restriction Manager',
    'published_date' => '2016-07-07 12:00:00',
    'type' => 'module',
    'version' => '2.1',
    'remove_tables' => 'prompt'
);


$installdefs = array(
    'id' => 'IP_Restriction_Manager',
    'beans' => array(
        0 => array(
            'module' => 'IRM_IPRestrictionManager',
            'class' => 'IRM_IPRestrictionManager',
            'path' => 'modules/IRM_IPRestrictionManager/IRM_IPRestrictionManager.php',
            'tab' => true
        )
    ),
    'layoutdefs' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_aclroles_ACLRoles.php',
            'to_module' => 'ACLRoles'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_aclroles_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        2 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_teams_Teams.php',
            'to_module' => 'Teams'
        ),
        3 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_teams_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        4 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_users_Users.php',
            'to_module' => 'Users'
        ),
        5 => array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/irm_iprestrictionmanager_users_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        )
    ),
    'relationships' => array(
        0 => array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/irm_iprestrictionmanager_aclrolesMetaData.php'
        ),
        1 => array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/irm_iprestrictionmanager_teamsMetaData.php'
        ),
        2 => array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/irm_iprestrictionmanager_usersMetaData.php'
        )
    ),
    'image_dir' => '<basepath>/icons',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/modules/IRM_IPRestrictionManager',
            'to' => 'modules/IRM_IPRestrictionManager'
        ),
        1 => array(
            'from' => '<basepath>/copy/custom/Extension/modules/Administration/Ext/Administration/IPRestrictionManager.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/IPRestrictionManager.php'
        ),
        2 => array(
            'from' => '<basepath>/copy/custom/Extension/modules/Administration/Ext/Language/en_us.IPRestrictionManager.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.IPRestrictionManager.php'
        ),
        3 => array(
            'from' => '<basepath>/copy/custom/Extension/modules/IRM_IPRestrictionManager/Ext/Language/en_us.IPRestrictionManager.php',
            'to' => 'custom/Extension/modules/IRM_IPRestrictionManager/Ext/Language/en_us.IPRestrictionManager.php'
        ),
        4 => array(
            'from' => '<basepath>/copy/custom/clients/base/api/CustomOAuth2Api.php',
            'to' => 'custom/clients/base/api/CustomOAuth2Api.php'
        ),
        5 => array(
            'from' => '<basepath>/copy/custom/Extension/modules/IRM_IPRestrictionManager/Ext/Vardefs/aclRestrictions.php',
            'to' => 'custom/Extension/modules/IRM_IPRestrictionManager/Ext/Vardefs/aclRestrictions.php'
        ),
        6 => array(
            'from' => '<basepath>/copy/custom/src/Symfony/Component/HttpFoundation/IpUtils.php',
            'to' => 'custom/src/Symfony/Component/HttpFoundation/IpUtils.php'
        ),
        7 => array(
            'from' => '<basepath>/copy/custom/src/Symfony/Component/HttpFoundation/LICENSE.txt',
            'to' => 'custom/src/Symfony/Component/HttpFoundation/LICENSE.txt'
        )
    ),
    'language' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'en_us'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'bg_BG'
        ),
        2 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'cs_CZ'
        ),
        3 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'da_DK'
        ),
        4 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'de_DE'
        ),
        5 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'el_EL'
        ),
        6 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'es_ES'
        ),
        7 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'fr_FR'
        ),
        8 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'he_IL'
        ),
        9 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'hu_HU'
        ),
        10 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'it_it'
        ),
        11 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'lt_LT'
        ),
        12 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'ja_JP'
        ),
        13 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'ko_KR'
        ),
        14 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'lv_LV'
        ),
        15 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'nb_NO'
        ),
        16 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'nl_NL'
        ),
        17 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'pl_PL'
        ),
        18 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'pt_PT'
        ),
        19 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'ro_RO'
        ),
        20 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'ru_RU'
        ),
        21 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'sv_SE'
        ),
        22 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'tr_TR'
        ),
        23 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'zh_CN'
        ),
        24 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'pt_BR'
        ),
        25 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'ca_ES'
        ),
        26 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'en_UK'
        ),
        27 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'sr_RS'
        ),
        28 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'sk_SK'
        ),
        29 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'sq_AL'
        ),
        30 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'et_EE'
        ),
        31 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'es_LA'
        ),
        32 => array(
            'from' => '<basepath>/SugarModules/relationships/language/ACLRoles.php',
            'to_module' => 'ACLRoles',
            'language' => 'fi_FI'
        ),
        33 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_us'
        ),
        34 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'bg_BG'
        ),
        35 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'cs_CZ'
        ),
        36 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'da_DK'
        ),
        37 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'de_DE'
        ),
        38 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'el_EL'
        ),
        39 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_ES'
        ),
        40 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fr_FR'
        ),
        41 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'he_IL'
        ),
        42 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'hu_HU'
        ),
        43 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'it_it'
        ),
        44 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lt_LT'
        ),
        45 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ja_JP'
        ),
        46 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ko_KR'
        ),
        47 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lv_LV'
        ),
        48 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nb_NO'
        ),
        49 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nl_NL'
        ),
        50 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pl_PL'
        ),
        51 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_PT'
        ),
        52 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ro_RO'
        ),
        53 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ru_RU'
        ),
        54 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sv_SE'
        ),
        55 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'tr_TR'
        ),
        56 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'zh_CN'
        ),
        57 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_BR'
        ),
        58 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ca_ES'
        ),
        59 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_UK'
        ),
        60 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sr_RS'
        ),
        61 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sk_SK'
        ),
        62 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sq_AL'
        ),
        63 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'et_EE'
        ),
        64 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_LA'
        ),
        65 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fi_FI'
        ),
        66 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'en_us'
        ),
        67 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'bg_BG'
        ),
        68 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'cs_CZ'
        ),
        69 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'da_DK'
        ),
        70 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'de_DE'
        ),
        71 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'el_EL'
        ),
        72 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'es_ES'
        ),
        73 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'fr_FR'
        ),
        74 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'he_IL'
        ),
        75 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'hu_HU'
        ),
        76 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'it_it'
        ),
        77 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'lt_LT'
        ),
        78 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'ja_JP'
        ),
        79 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'ko_KR'
        ),
        80 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'lv_LV'
        ),
        81 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'nb_NO'
        ),
        82 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'nl_NL'
        ),
        83 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'pl_PL'
        ),
        84 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'pt_PT'
        ),
        85 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'ro_RO'
        ),
        86 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'ru_RU'
        ),
        87 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'sv_SE'
        ),
        88 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'tr_TR'
        ),
        89 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'zh_CN'
        ),
        90 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'pt_BR'
        ),
        91 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'ca_ES'
        ),
        92 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'en_UK'
        ),
        93 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'sr_RS'
        ),
        94 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'sk_SK'
        ),
        95 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'sq_AL'
        ),
        96 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'et_EE'
        ),
        97 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'es_LA'
        ),
        98 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Teams.php',
            'to_module' => 'Teams',
            'language' => 'fi_FI'
        ),
        99 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_us'
        ),
        100 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'bg_BG'
        ),
        101 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'cs_CZ'
        ),
        102 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'da_DK'
        ),
        103 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'de_DE'
        ),
        104 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'el_EL'
        ),
        105 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_ES'
        ),
        106 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fr_FR'
        ),
        107 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'he_IL'
        ),
        108 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'hu_HU'
        ),
        109 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'it_it'
        ),
        110 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lt_LT'
        ),
        111 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ja_JP'
        ),
        112 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ko_KR'
        ),
        113 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lv_LV'
        ),
        114 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nb_NO'
        ),
        115 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nl_NL'
        ),
        116 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pl_PL'
        ),
        117 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_PT'
        ),
        118 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ro_RO'
        ),
        119 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ru_RU'
        ),
        120 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sv_SE'
        ),
        121 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'tr_TR'
        ),
        122 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'zh_CN'
        ),
        123 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_BR'
        ),
        124 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ca_ES'
        ),
        125 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_UK'
        ),
        126 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sr_RS'
        ),
        127 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sk_SK'
        ),
        128 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sq_AL'
        ),
        129 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'et_EE'
        ),
        130 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_LA'
        ),
        131 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fi_FI'
        ),
        132 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'en_us'
        ),
        133 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'bg_BG'
        ),
        134 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'cs_CZ'
        ),
        135 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'da_DK'
        ),
        136 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'de_DE'
        ),
        137 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'el_EL'
        ),
        138 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'es_ES'
        ),
        139 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'fr_FR'
        ),
        140 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'he_IL'
        ),
        141 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'hu_HU'
        ),
        142 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'it_it'
        ),
        143 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'lt_LT'
        ),
        144 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'ja_JP'
        ),
        145 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'ko_KR'
        ),
        146 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'lv_LV'
        ),
        147 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'nb_NO'
        ),
        148 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'nl_NL'
        ),
        149 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'pl_PL'
        ),
        150 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'pt_PT'
        ),
        151 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'ro_RO'
        ),
        152 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'ru_RU'
        ),
        153 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'sv_SE'
        ),
        154 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'tr_TR'
        ),
        155 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'zh_CN'
        ),
        156 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'pt_BR'
        ),
        157 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'ca_ES'
        ),
        158 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'en_UK'
        ),
        159 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'sr_RS'
        ),
        160 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'sk_SK'
        ),
        161 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'sq_AL'
        ),
        162 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'et_EE'
        ),
        163 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'es_LA'
        ),
        164 => array(
            'from' => '<basepath>/SugarModules/relationships/language/Users.php',
            'to_module' => 'Users',
            'language' => 'fi_FI'
        ),
        165 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_us'
        ),
        166 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'bg_BG'
        ),
        167 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'cs_CZ'
        ),
        168 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'da_DK'
        ),
        169 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'de_DE'
        ),
        170 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'el_EL'
        ),
        171 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_ES'
        ),
        172 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fr_FR'
        ),
        173 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'he_IL'
        ),
        174 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'hu_HU'
        ),
        175 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'it_it'
        ),
        176 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lt_LT'
        ),
        177 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ja_JP'
        ),
        178 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ko_KR'
        ),
        179 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'lv_LV'
        ),
        180 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nb_NO'
        ),
        181 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'nl_NL'
        ),
        182 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pl_PL'
        ),
        183 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_PT'
        ),
        184 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ro_RO'
        ),
        185 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ru_RU'
        ),
        186 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sv_SE'
        ),
        187 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'tr_TR'
        ),
        188 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'zh_CN'
        ),
        189 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'pt_BR'
        ),
        190 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'ca_ES'
        ),
        191 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'en_UK'
        ),
        192 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sr_RS'
        ),
        193 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sk_SK'
        ),
        194 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'sq_AL'
        ),
        195 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'et_EE'
        ),
        196 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'es_LA'
        ),
        197 => array(
            'from' => '<basepath>/SugarModules/relationships/language/IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager',
            'language' => 'fi_FI'
        ),
        198 => array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us'
        )
    ),
    'sidecar' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/irm_iprestrictionmanager_aclroles_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/irm_iprestrictionmanager_teams_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        2 => array(
            'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/irm_iprestrictionmanager_users_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        3 => array(
            'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/irm_iprestrictionmanager_aclroles_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        4 => array(
            'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/irm_iprestrictionmanager_teams_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        5 => array(
            'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/irm_iprestrictionmanager_users_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        )
    ),
    'vardefs' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_aclroles_ACLRoles.php',
            'to_module' => 'ACLRoles'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_aclroles_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        2 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_teams_Teams.php',
            'to_module' => 'Teams'
        ),
        3 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_teams_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        4 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_users_Users.php',
            'to_module' => 'Users'
        ),
        5 => array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/irm_iprestrictionmanager_users_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        )
    ),
    'wireless_subpanels' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_aclroles_ACLRoles.php',
            'to_module' => 'ACLRoles'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_aclroles_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        2 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_teams_Teams.php',
            'to_module' => 'Teams'
        ),
        3 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_teams_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        ),
        4 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_users_Users.php',
            'to_module' => 'Users'
        ),
        5 => array(
            'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/irm_iprestrictionmanager_users_IRM_IPRestrictionManager.php',
            'to_module' => 'IRM_IPRestrictionManager'
        )
    )
);
