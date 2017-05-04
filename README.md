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

# Release Notes
* 1.0
    * Initial release of the IP Restriction Manager package
* 2.1
    * Corrections For SugarCRM HealthCheck
        * Removed use of SugarQuery::compileSQL
        * Removed use of app.view.invokeParent


# Prerequisites

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
Everyone is welcome to be involved by creating or improving functionality. If you would like to contribute, please make sure to review the [CONTRIBUTION TERMS](CONTRIBUTION_TERMS.pdf). When you update this [README](README.md), please check out the [contribution guidelines](CONTRIBUTING.md) for helpful hints and tips that will make it easier to accept your pull request.

## Contributors
[Jerry Clark](https://github.com/geraldclark)

# Licensed under Apache
© 2017 SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.

## Third Party Libraries
* Symfony HttpFoundation Component - MIT - The HttpFoundation component defines an object-oriented layer for the HTTP specification. This plugin makes use of the symfony/http-foundation IpUtils Library. It is slightly modified to pass Sugars Package Scanner.
    * [Github](https://github.com/symfony/http-foundation)
