<?php
/*
@package: File Manager Advanced
@Class: fma_main
*/
if(class_exists('class_fma_main')) {
	return;
}
class class_fma_main {
	     var $settings;
          public function __construct()
		    {
			 add_action('admin_menu', array(&$this, 'fma_menus'));
			 add_action( 'admin_enqueue_scripts', array(&$this,'fma_scripts'));
			 add_action( 'wp_ajax_fma_load_fma_ui', array(&$this, 'fma_load_fma_ui'));
			 $this->settings = get_option('fmaoptions');
			}
			public function fma_menus() {
				include('class_fma_admin_menus.php');
				$fma_menus = new class_fma_admin_menus();
				$fma_menus->load_menus();
			}
			public function fma_load_fma_ui() {
				include('class_fma_connector.php');
				$fma_connector = new class_fma_connector();
				 if ( wp_verify_nonce( $_REQUEST['_fmakey'], 'fmaskey' ) ) {
				    $fma_connector->fma_local_file_system();
				 }
			}
			public function fma_scripts() {
                wp_enqueue_script( 'elfinder-ui.min', plugins_url('library/js/elfinder-ui.min.js', __FILE__));
				wp_enqueue_script( 'elfinder_min', plugins_url('library/js/elfinder.min.js',  __FILE__ ));
				//wp_enqueue_script( 'elfinder_editors', plugins_url('library/js/extras/editors.default.js',  __FILE__ ));
				wp_enqueue_script( 'elfinder_script', plugins_url('library/js/elfinder_script.js', __FILE__));
				wp_enqueue_style( 'user_interface', plugins_url('library/css/user_interface.css', __FILE__));
				wp_enqueue_style( 'elfinder.min', plugins_url('library/css/elfinder.min.css', __FILE__));
				wp_enqueue_style( 'fma_theme', plugins_url('library/css/theme.css', __FILE__));
				if(isset($this->settings['fma_theme']) && $this->settings ['fma_theme'] == 'dark') {
				  wp_enqueue_style( 'fma_themee', plugins_url('library/new/css/theme.css', __FILE__));
				}
			    wp_enqueue_style( 'fma_custom', plugins_url('library/css/custom_style_filemanager_advanced.css', __FILE__));
				if(isset($this->settings['fma_locale'])) {
				 $locale = $this->settings['fma_locale'];
				 if($locale != 'en') {
				  wp_enqueue_script( 'fma_lang', plugins_url('library/js/i18n/elfinder.'.$locale.'.js', __FILE__));
				 }
				}
			}
}