<?php if(is_user_logged_in()) { ?>
<script>
var ajaxurl = "<?php echo admin_url('admin-ajax.php');?>";
</script>
<?php wp_enqueue_script( 'elfinder-ui.min', plugins_url('library/js/elfinder-ui.min.js',fma_file));
                wp_enqueue_script( 'elfinder_min', plugins_url('library/js/elfinder.full.js',fma_file ));
                wp_enqueue_script( 'elfinder_script_shortcode', plugins_url('library/js/elfinder_script_shortcode.js',fma_file));
                wp_enqueue_style( 'user_interface', plugins_url('library/css/user_interface.css',fma_file));
                wp_enqueue_style( 'elfinder.min', plugins_url('library/css/elfinder.min.css',fma_file));
                wp_enqueue_style( 'fma_theme', plugins_url('library/css/theme.css',fma_file));
				wp_enqueue_style( 'fma_themee', plugins_url('library/new/css/theme.css',fma_file));
                wp_enqueue_style( 'fma_custom', plugins_url('library/css/custom_style_filemanager_advanced.css',fma_file));
 $fma_adv = '<input type="hidden" name="_fmakey" id="fmakey" value="'. wp_create_nonce( 'fmaskey' ).'">';
 $fma_adv .= '<div id="file_manager_advanced"></div>';
 }
 ?>