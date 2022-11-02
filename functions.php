function my_plugin_settings_link($links) { 
	$settings_link = '<a href="admin.php?page=mervin-settings&tab=gateways&section=mervin-stripe">Settings</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'my_plugin_settings_link' );
