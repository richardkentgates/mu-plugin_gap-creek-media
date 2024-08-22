/*
Plugin Name: Gap Creek Media
*/
add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_theme', '__return_true');
add_filter('auto_update_core', '__return_true');
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');
add_filter('auto_core_update_send_email', '__return_false');
add_filter('site_status_tests', function (array $tests) { 
  unset($tests['direct']['theme_version'],
        $tests['direct']['plugin_version'],
        $tests['direct']['scheduled_events'],
        $tests['direct']['persistent_object_cache'],
        $tests['async']['page_cache']);
  return $tests;
}, 10, 1);
add_shortcode( 'gcm_sitetitle', function (){
   return get_bloginfo( 'name' );
}, 10, 2);
