# Changelog

Changes for MODX Shell.


## 0.0.3-dev ()

* `CommandRegistrar` no more registers "deprecated commands" back, if found
* Added `package:provider:add` to easily add a package provider (from a known list)
* Added `user:resetpassword` command to reset a user password
* Added `plugin:disable` command to disable a plugin
* Added `TreeBuilder` class to build a multidimensional array from a flat array (tree structured) + added `menu:list` command as example
* `ListProcessor` commands now set a limit of `10` for Revolution < 2.2.0-pl
* Added an helper to format/render "trees"
* Added `ColoredLog` "formatter" to display modX system log
* Fixed issues on PHP 5.3


## 0.0.2-dev (2015/02/21)

* More generally, started a huge code cleanup (some more coming before v0.1.0)
* Added ability to require a minimum Revolution version for commands
* Refactored the "configurations" to make them less messy (hopefully)
* Added ability to run a command on an instance, without being in its path, using `-s{$instanceName}`, ie. `modx -sMyInstance version`
* Added support for Revolution 2.0/2.1
* Clearing modX system log now displays the output
* Removed (made abstract classes" some "irrelevant" commands, which were pointless in CLI
* Added `crawl` command to crawl (cURL) resources (to prime the modX cache)
* Added `context:urls` command to list contexts URL
* Registered instances list now comes with Revo version, if available
* Added `security:access:flush` command to flush users permissions
* Added `system:refreshuris` command to refresh resources URIs (Revo 2.3.3-pl+)
* Added `system:info` command to retrieve general modX information
* Added commands to list (`system:actions:list`) & wipe (`system:actions:clear`) manager actions log
* Mark invalid registered modX instances
* Added CommandRegistrar class to help register third party commands 
* Moved to PSR-4


## 0.0.1-dev (2015/02/14)

* Open Sourcing the repository/PoC
