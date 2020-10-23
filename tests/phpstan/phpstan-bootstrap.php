<?php
//define( 'WPML_PLUGIN_PATH', realpath( dirname( __FILE__ ) . '/../' ) );
//define( 'NEXTGEN_GALLERY_PLUGIN_VERSION', '4.5.6' );
//define( 'WPML_XLIFF_DEFAULT_VERSION', '1.2.3' );

define( 'ICL_PLUGIN_URL', 'http://domain.tld/some/path/sitepresstesttttttttttttttttt' );


//$_REQUEST               = [];
//$_SERVER['REQUEST_URI'] = 'something';

// WPML TM Stubs

///**
// * @return WPML_TM_Blog_Translators
// */
//function wpml_tm_load_blog_translators() {
//	return $instance;
//}

//class WPML_TP_Client_Factory
//{
//	/** @return WPML_TP_Client */
//	public function create()
//	{
//	}
//}

// WPML ST Stubs

///**
// * @return array
// */
//function icl_st_register_user_strings_all() {
//	return [];
//}

///**
// * Updates an original string without changing its id or its translations
// *
// * @param string     $context
// * @param string     $name
// * @param string     $old_value
// * @param string     $new_value
// * @param bool|false $force_complete , @see \WPML_ST_String_Update::handle_status_change
// *
// * @return int|void
// */
//function icl_st_update_string_actions( $context, $name, $old_value, $new_value, $force_complete = false ) {
//	if ( class_exists( 'WPML_WPDB_User' ) ) {
//		return 1;
//	}
//}

///**
// * @param string $val
// *
// * @return bool|string
// */
//function icl_sw_filters_widget_title( $val ) {
//	$val = icl_translate( WP_Widget_Text_Icl::STRING_DOMAIN, 'widget title - ' . md5( $val ), $val );
//
//	return $val;
//}

// third-party plugins
//
///**
// * Return URL to the profile page of a user
// *
// * @param int    $user_id       Optional. User id
// * @param string $user_nicename Optional. User nicename
// *
// * @return string User profile url
// * @since 2.0.0 bbPress (r2688)
// *
// */
//function bbp_get_user_profile_url( $user_id = 0, $user_nicename = '' ) {
//	return 'a string';
//}