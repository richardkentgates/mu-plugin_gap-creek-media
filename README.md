# Must Use Plugin

This repository is for public disclosure of PHP code used to modify the default functionality of [WordPress](https://wordpress.org/) based websites managed by [Gap Creek Media](https://gapcreekmedia.com/), using predefined filters provided in the WordPress and [Action Scheduler](https://wordpress.org/plugins/action-scheduler/) documentation. See the sections below for references outlined in the PHP comments.

## Section A

_theme_version | plugin_version_

The default WordPress Health Check returns warnings when updates are required for plugins and themes, however this is a false alarm and is disabled in the following filter. Updates are set to automatic; see sections C and D.

_scheduled_events_

The default WordPress Health Check returns notices when scheduled actions are not taken on time. However, PHP does not run unless there is a request sent to the server so scheduled actions may be delayed during slow periods of web traffic. Once you see this warning the website has already initiated whatever scheduled actions were delayed because you loading the website initiated PHP to run, making this is an unnecessary notice. For these reasons, notices are disabled by the applicable filters.

_persistent_object_cache | page_cache_

The default WordPress Health Check returns advice to utilize page and object caching, which however slight, increases the risks of error and disruption to the end user and normal operation of the website. Furthermore, our tests have concluded that in every tested instance we did not find performance gains when using either of these caching practices, and in many instances the caching resulted in poor performance. For these reasons this part of the Health Check has been disabled by the applicable filters. 

## Section B

This filter interrupt the directive to hide the Action Scheduler link in the admin Dashboard, and makes the page link available for the Action Scheduler in the admin Dashboard. 

## Section C

This filter sets plugins to automatically update. The result of this filter removes the option to disable automatic plugin updates in the WordPress admin Dashboard. 

## Section D

This filter sets themes to automatically update. The result of this filter removes the option to disable automatic theme updates in the WordPress admin Dashboard. 
