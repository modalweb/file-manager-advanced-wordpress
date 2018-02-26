<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$settings = get_option('fmaoptions'); ?>
<input type="hidden" name="_fmakey" id="fmakey" value="<?php echo wp_create_nonce( 'fmaskey' ); ?>">
<input type="hidden" name="fma_locale" id="fma_locale" value="<?php echo isset($settings['fma_locale']) ? $settings['fma_locale'] : 'en';?>">
<div class="wrap fma">
<h2><?php _e('File Manager Advanced','file-manager-advanced')?> <?php if(!class_exists('file_manager_advanced_shortcode')) { ?><a href="http://modalwebstore.com/product/file-manager-advanced-shortcode/" class="page-title-action" target="_blank">Buy Pro</a><?php } ?></h2>
<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
<p><strong><?php _e('Support,','file-manager-advanced')?> </strong><?php _e('File Manager Advanced is a new plugin on wordpress. If you like and appreciate our work then please <a href="https://wordpress.org/support/plugin/file-manager-advanced/reviews/?filter=5" class="button button-primary" target="_blank">Rate Us</a>','file-manager-advanced')?></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>
</div>
<hr>
<div id="file_manager_advanced"><center><img src="<?php echo plugins_url( 'images/wait.gif', __FILE__ );?>"></center></div>
<hr>
 <table>
 <tr>
 <th><a href="https://wordpress.org/support/plugin/file-manager-advanced/reviews/?filter=5" class="button button-primary" target="_blank"><?php _e('Rate Us','file-manager-advanced')?></a></th>
 <th><a href="http://modalwebstore.com/file-manager-wordress/" class="button" target="_blank"><?php _e('Documentation','file-manager-advanced')?></a></th>
 <th><a href="http://modalwebstore.com/contact-us/" class="button" target="_blank"><?php _e('Support','file-manager-advanced')?></a></th>
 <th><a href="http://modalwebstore.com/donate" class="button" target="_blank"><?php _e('Donate','file-manager-advanced')?></a></th>
 </tr>
</table>
</div>