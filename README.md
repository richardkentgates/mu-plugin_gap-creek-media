# Must Use Plugin

This repository is for public disclosure of PHP code used to modify the default functionality of [WordPress](https://wordpress.org/) based websites managed by [Gap Creek Media](https://gapcreekmedia.com/), using predefined filters provided in the WordPress and [Action Scheduler](https://wordpress.org/plugins/action-scheduler/) documentation. See the sections below for references outlined in the PHP comments.

## Section: A

*theme_version | plugin_version

The default WordPress Health Check returns warnings when updates are required for plugins and themes, however because updates are set to automatic, so this is a false alarm and is disabled in the following filter.

*scheduled_events

The default WordPress Health Check returns notices when scheduled actions are not taken on time. However, PHP does not run unless there is a request sent to the server so scheduled actions may be delayed during slow periods of web traffic and if you see this warning the website has already initiated whatever scheduled actions were delayed, making this is an unnecessary notice and is disabled by the following filters.

*persistent_object_cache | page_cache

The default WordPress Health Check returns advice to utilize page and object caching, which can create unnecessary risks of error and disruption to the end user and normal operation of the website, furthermore our tests have concluded that in every instance we did not find performance gains when using either of these caching practices, and in many instances the caching resulted in poor performance, so this part of the Health Check has been filtered. 

## Section: B

This filter interrupt the directive to hide the Action Scheduler link in the admin Dashboard, and makes the page link available. 

## Section: C

This filter sets plugins to automatically update, and the resulting behavior removes the option to disable automatic plugin updates in the WordPress admin Dashboard. 

## Section: D

This filter sets themes to automatically update, and the resulting behavior removes the option to disable automatic theme updates in the WordPress admin Dashboard. 
