# IP Restriction Manager
This is the Users Guide for the IP Restriction Manager plugin version 2.x.  

The IP Restriction Manager plugin allows a Sugar Administrator to setup restrictive IP ranges for authentication. These ranges can be specific to a user, team, role or combination of all three. IP ranges can be specified in the following formats: specific, wildcard, CIDR and Start-End

# Installation
Installation instructions for generating and installing a module loadable package.

## Building Installer Package
To build the installer package, you will need to download the contents on this repository and execute:
```
php build.php
```
Once completed, the installer .zip package will be located under `./builds/` and can me installed using Module Loader

## Installing Package
1. Login to your SugarCRM instance with an administrator account.
2. Navigate to Admin > Module Loader
3. Browse to the IP Restriction Manager Package and upload it.
4. Click the Install button for the IP Restriction Manager package.
5. If you agree to the License Agreement, select ‘Accept’ and click ‘Commit’.

## Upgrading
When upgrading to the latest release, there are several important steps to follow.
1. Make a backup of your SugarCRM filesystem.
2. Make a backup of your SugarCRM database.
3. Follow the uninstallation steps and make sure to select ‘Do Not Remove Tables’ when prompted by the module loader uninstall wizard to remove database tables.
4. Follow the installation steps to install the latest package from this repository.

# Uninstallation
Steps for uninstalling the plugin.

## Uninstalling Through Module Loader
1. Login to your Sugar instance with an administrator account.
2. Navigate to Admin > Module Loader
3. Find the ‘IP Restriction Manager’ entry in the list of installed plugins and click ‘Uninstall’.
4. a) If you are planning to install an updated package, you will want to select ‘Do Not Remove Tables’. Please note that this is very important. Doing this will leave all relationship, template and backup records intact for when you install the updated package.    
   b) If you are not planning to continue using the IP Restriction Manager in the future, you will want to select ‘Remove Tables’.
   
## Uninstalling Through FileSystem
Manual steps to remove the plugin. Once the following sections are complete, navigate to Admin > Repair and run a ‘Quick Repair and Rebuild’.


### Files to Remove
* modules/IRM_IPRestrictionManager/*
* custom/Extension/modules/IRM_IPRestrictionManager/*
* custom/Extension/modules/Administration/Ext/Administration/IPRestrictionManager.php
* custom/Extension/modules/Administration/Ext/Language/en_us.IPRestrictionManager.php
* custom/Extension/modules/Users/Ext/Language/{language key}.IP_Restriction_Manager.php
* custom/Extension/modules/Users/Ext/Layoutdefs/irm_iprestrictionmanager_users_Users.php
* custom/Extension/modules/Users/Ext/Vardefs/irm_iprestrictionmanager_users_Users.php
* custom/Extension/modules/Users/Ext/WirelessLayoutdefs/irm_iprestrictionmanager_users_Users.php
* custom/Extension/modules/Teams/Ext/Language/{language key}.IP_Restriction_Manager.php
* custom/Extension/modules/Teams/Ext/Layoutdefs/irm_iprestrictionmanager_teams_Teams.php
* custom/Extension/modules/Teams/Ext/Vardefs/irm_iprestrictionmanager_teams_Teams.php
* custom/Extension/modules/Teams/Ext/WirelessLayoutdefs/irm_iprestrictionmanager_teams_Teams.php
* custom/Extension/modules/ACLRoles/Ext/Language/{language key}.IP_Restriction_Manager.php
* custom/Extension/modules/ACLRoles/Ext/Layoutdefs/irm_iprestrictionmanager_aclroles_ACLRoles.php
* custom/Extension/modules/ACLRoles/Ext/Vardefs/irm_iprestrictionmanager_aclroles_ACLRoles.php
* custom/Extension/modules/ACLRoles/Ext/WirelessLayoutdefs/irm_iprestrictionmanager_aclroles_ACLRoles.php

These files should also be removed so they can be rebuilt by the extensions framework.
* custom/application/Ext/Include/modules.ext.php
* custom/application/Ext/TableDictionary/tabledictionary.ext.php
* cache/file_map.php
* custom/modules/Users/Ext/*
* custom/modules/Teams/Ext/*
* custom/modules/Roles/Ext/*

### Tables to Remove
Please note these should only be removed if you are not planning to install an updated version.

* irm_iprestrictionmanager
* irm_iprestrictionmanager_aclroles_c
* irm_iprestrictionmanager_audit
* irm_iprestrictionmanager_teams_c
* irm_iprestrictionmanager_users_c

# Release Notes
* 1.0
    * Initial release of the IP Restriction Manager package
* 2.1
    * Corrections For SugarCRM HealthCheck
        * Removed use of SugarQuery::compileSQL
        * Removed use of app.view.invokeParent


# Prerequisites
Requirements for installation

## Supported Versions
* 7.7.x
* 7.8.x
* 7.9.x

## Supported Editions
* Professional
* Corporate
* Enterprise
* Ultimate

## Supported Databases
* MySQL
* MSSQL
* Oracle
* DB2

## Supported Languages
* English

# Contributing
Everyone is welcome to be involved by creating or improving functionality. If you would like to contribute, please make sure to review the [contribution terms](CONTRIBUTOR_TERMS.pdf). When you update this [README](README.md), please check out the [contribution guidelines](CONTRIBUTING.md) for helpful hints and tips that will make it easier to accept your pull request.

## Contributors
[Jerry Clark](https://github.com/geraldclark)

# Licensed under Apache
© 2017 SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.

## Third Party Libraries
* Symfony HttpFoundation Component - MIT - The HttpFoundation component defines an object-oriented layer for the HTTP specification. This plugin makes use of the symfony/http-foundation IpUtils Library. It is slightly modified to pass Sugars Package Scanner.
    * [Github](https://github.com/symfony/http-foundation)
