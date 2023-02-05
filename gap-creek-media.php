/*
Plugin Name: Gap Creek Media
*/

/* Section: A */

add_filter('site_status_tests', function (array $tests) { 
  unset($tests['direct']['theme_version'],
        $tests['direct']['plugin_version'],
        $tests['direct']['plugin_theme_auto_updates'],
        $tests['direct']['scheduled_events'],
        $tests['direct']['persistent_object_cache'],
        $tests['async']['background_updates'],
        $tests['async']['page_cache']);
  return $tests;
}, 10, 1);

/* Section: B */

add_filter( 'wp_mail_smtp_tasks_admin_hide_as_menu', '__return_false' );

/* Section: C */

add_filter( 'auto_update_plugin', '__return_false' );

/* Section: D */

add_filter( 'auto_update_theme', '__return_false' );
