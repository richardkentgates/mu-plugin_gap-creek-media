/*
Plugin Name: Gap Creek Media
*/
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
