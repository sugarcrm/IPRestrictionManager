<?php

class IRM_IPRestrictionManager_sugar extends Basic
{
    public $new_schema = true;
    public $module_dir = 'IRM_IPRestrictionManager';
    public $object_name = 'IRM_IPRestrictionManager';
    public $table_name = 'irm_iprestrictionmanager';
    public $importable = true;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $doc_owner;
    public $user_favorites;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $ip_range;
    public $status;
    public $platforms;
    public $disable_row_level_security = true;

    public function __construct()
    {
        parent::__construct();
    }

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        return false;
    }

}