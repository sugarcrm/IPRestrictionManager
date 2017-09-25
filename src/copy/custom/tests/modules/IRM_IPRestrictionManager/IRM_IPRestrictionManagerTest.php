<?php
// Copyright 2017 SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.

/**
 * @group support
 * @group iprestrictionmanager
 */
class IRM_IPRestrictionManagerTest extends Sugar_PHPUnit_Framework_TestCase
{
    private $ipRestrictionManagerUtils = null;
    private $userUtils = null;
    private $roleUtils = null;
    private $teamUtils = null;

    public function setUp()
    {
        parent::setUp();

        SugarTestHelper::setUp("current_user");
        $GLOBALS['current_user']->is_admin = 1;
        $GLOBALS['app_list_strings'] = return_app_list_strings_language('en_us');

        $this->ipRestrictionManagerUtils = new SugarTestSupportIRM_IPRestrictionManagerUtilities();
        $this->userUtils = new SugarTestSupportUserUtilities();
        $this->roleUtils = new SugarTestSupportACLRolesUtilities();
        $this->teamUtils = new SugarTestSupportTeamsUtilities();
    }

    public function tearDown()
    {
        $this->ipRestrictionManagerUtils->deleteAll();
        $this->userUtils->deleteAll();
        $this->roleUtils->deleteAll();
        $this->teamUtils->deleteAll();
        parent::tearDown();
    }

    public function testValidateRange()
    {
        $bean = \BeanFactory::newBean("IRM_IPRestrictionManager");

        //Any
        $this->assertTrue($bean->validateRange('1.2.3.4', '*'));
        $this->assertTrue($bean->validateRange('1.2.3.4', '*.*.*.*'));

        //Specific
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.3.4'));
        $this->assertFalse($bean->validateRange('1.2.3.4', '1.2.3.5'));

        //Wildcard
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.3.1-1.2.3.5'));
        $this->assertFalse($bean->validateRange('1.2.3.4', '1.2.3.1-1.2.3.3'));

        //IP/Netmask
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.3.4/255.255.255.0'));
        $this->assertFalse($bean->validateRange('1.2.3.4', '1.3.3.4/255.255.255.0'));

        //CIDR
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.3.4/32'));
        $this->assertFalse($bean->validateRange('1.2.3.4', '1.3.3.4/32'));

        //Range
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.3.*'));
        $this->assertFalse($bean->validateRange('1.2.3.4', '1.2.2.*'));

        //Range mid wildcard
        $this->assertTrue($bean->validateRange('1.2.3.4', '1.2.*.*'));
        $this->assertFalse($bean->validateRange('1.*.3.4', '1.2.*.*'));
    }


    public function testGetUserRestrictions()
    {
        $ipRestriction1 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP1',
                'ip_range' => '1.2.3.1-1.2.3.5'
            )
        );

        $ipRestriction2 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP2',
                'ip_range' => '1.2.4.1-1.2.4.5',
                'platforms' => '^mobile^'
            )
        );

        $ipRestriction3 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP3',
                'ip_range' => '1.2.5.1-1.2.5.5',
                'platforms' => '^mobile^'
            )
        );

        $ipRestriction4 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP4',
                'ip_range' => '1.2.6.1-1.2.6.5',
                'platforms' => '^mobile^'
            )
        );

        $ipRestriction5 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP5',
                'ip_range' => '1.2.7.1-1.2.7.5',
                'platforms' => '^mobile^'
            )
        );

        $ipRestriction6 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP6',
                'ip_range' => '1.2.8.1-1.2.8.5',
                'platforms' => '^mobile^'
            )
        );

        $user = $this->userUtils->create();

        if ($user->load_relationship('irm_iprestrictionmanager_users')) {
            //add directly to users
            $user->irm_iprestrictionmanager_users->add(array(
                $ipRestriction1,
                $ipRestriction2
            ));
        }

        $role = $this->roleUtils->create();

        //add restrictions to role
        if ($role->load_relationship('irm_iprestrictionmanager_aclroles')) {
            $role->irm_iprestrictionmanager_aclroles->add(
                array(
                    $ipRestriction3,
                    $ipRestriction4
                )
            );
        }

        //add role to user
        if ($user->load_relationship('aclroles')) {
            $user->aclroles->add(array(
                $role
            ));
        }

//        $team = $this->teamUtils->create();
//
//        if ($ipRestriction5->load_relationship('irm_iprestrictionmanager_teams')) {
//            $ipRestriction5->irm_iprestrictionmanager_teams->add(
//                array(
//                    $team
//                )
//            );
//        }
//
//        if ($ipRestriction6->load_relationship('irm_iprestrictionmanager_teams')) {
//            $ipRestriction6->irm_iprestrictionmanager_teams->add(
//                array(
//                    $team
//                )
//            );
//        }

        //add restrictions to team
        //we currently have a bug here
//        if ($team->load_relationship('irm_iprestrictionmanager_teams')) {
//            $team->irm_iprestrictionmanager_teams->add(
//                array(
//                    $ipRestriction5,
//                    $ipRestriction6
//                )
//            );
//        }

//        //add teams to user
//        if ($user->load_relationship('team_link')) {
//            $user->team_link->add(array(
//                $team
//            ));
//        }

//        $teams = array();
//        //generate team set
//        if ($user->load_relationship('team_link')) {
//            $teams = $user->team_link->getBeans();
//
//            //add private team
//            $privateId = $user->getPrivateTeam();
//            if (!empty($privateId)) {
//                $teams[$privateId] = \BeanFactory::getBean("Teams", $privateId);
//            }
//        }
//
//        $teams[$team->id] = $team;
//
//
//        //print_r(array_keys($teams));
//        $teamSetBean = new \TeamSet();
//        $team_set_id = $teamSetBean->addTeams(
//            array_keys($teams)
//        );
//
//        $user->team_set_id = $team_set_id;
//        $user->save();
//
//
//        $user->retrieve();


        $bean = \BeanFactory::newBean("IRM_IPRestrictionManager");
        $restrictions = $bean->getUserRestrictions($user->id);

        //leaving out teams for now
        $this->assertEquals(4, count($restrictions));
    }


    public function testValidateUser()
    {
        $ipRestriction1 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP1',
                'ip_range' => '1.2.3.1-1.2.3.5'
            )
        );

        $ipRestriction2 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP2',
                'ip_range' => '1.2.4.1-1.2.4.5',
                'platforms' => '^mobile^'
            )
        );

        $user = $this->userUtils->create();
        $user->load_relationship('irm_iprestrictionmanager_users');

        $user->irm_iprestrictionmanager_users->add(array(
            $ipRestriction1,
            $ipRestriction2
        ));

        $user->save();

        $bean = \BeanFactory::newBean("IRM_IPRestrictionManager");

        $this->assertTrue($bean->validateUser($user->user_name, 'mobile', false, '1.2.4.1'));
        $this->assertFalse($bean->validateUser($user->user_name, 'mobile', false, '1.2.4.0'));

        $this->assertTrue($bean->validateUser($user->user_name, 'mobile', false, '1.2.3.1'));
        $this->assertFalse($bean->validateUser($user->user_name, 'mobile', false, '1.2.3.0'));

        $this->assertTrue($bean->validateUser($user->user_name, 'base', false, '1.2.3.1'));
        $this->assertFalse($bean->validateUser($user->user_name, 'base', false, '1.2.3.0'));
    }

    public function testValidateAPI()
    {
        $ipRestriction1 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP1',
                'ip_range' => '1.2.3.1-1.2.3.5'
            )
        );

        $ipRestriction2 = $this->ipRestrictionManagerUtils->create(
            array(
                'name' => 'IP2',
                'ip_range' => '1.2.4.1-1.2.4.5',
                'platforms' => '^mobile^'
            )
        );

        $user = $this->userUtils->create();
        $user->load_relationship('irm_iprestrictionmanager_users');

        $user->irm_iprestrictionmanager_users->add(array(
            $ipRestriction1,
            $ipRestriction2
        ));

        $user->save();

        $bean = \BeanFactory::newBean("IRM_IPRestrictionManager");

        $api = new \RestService();
        $api->user = $GLOBALS['current_user'];

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'mobile', false, '1.2.4.1');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertFalse($message);

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'mobile', false, '1.2.4.0');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertEquals('You are attempting to authenticate from an invalid IP (1.2.4.0) or platform (mobile).' , $message);

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'mobile', false, '1.2.3.1');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertFalse($message);

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'mobile', false, '1.2.3.0');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertEquals('You are attempting to authenticate from an invalid IP (1.2.3.0) or platform (mobile).' , $message);

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'base', false, '1.2.3.1');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertFalse($message);

        $message =  false;
        try {
            $bean->validateAPI($api, $user->user_name, 'base', false, '1.2.3.0');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertEquals('You are attempting to authenticate from an invalid IP (1.2.3.0) or platform (base).' , $message);
    }

}
