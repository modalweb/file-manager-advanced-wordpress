<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$this->save();
$settings = $this->get();
$locales = $this->langs->locales();
$path = str_replace('\\','/', ABSPATH)
?>
<div class="wrap fma">
<h2><?php _e('Settings','file-manager-advanced')?> <a href="http://modalwebstore.com/product/file-manager-advanced-shortcode/" class="page-title-action" target="_blank">Buy Pro</a></h2>
<hr>
<form action="" method="post">
<?php  wp_nonce_field( 'fmaform', '_fmaform' ); ?>
<table class="form-table">
<tbody>
<tr>
<th><?php _e('Theme','file-manager-advanced')?></th>
<td>
<select name="fma_theme" id="fma_theme">
	<option value="light" <?php echo(isset($settings['fma_theme']) && $settings['fma_theme'] == 'light') ? 'selected="selected"' : '';?>><?php _e('Light','file-manager-advanced')?></option>
	<option value="dark" <?php echo(isset($settings['fma_theme']) && $settings['fma_theme'] == 'dark') ? 'selected="selected"' : '';?>><?php _e('Dark','file-manager-advanced')?></option>
</select>
<p class="description"><?php _e('Select file manager advanced theme. Default: Light','file-manager-advanced')?></p>
</td>
</tr>
<tr>
<th><?php _e('Language','file-manager-advanced')?></th>
<td>
<select name="fma_locale" id="fma_locale">
<?php foreach($locales as $key => $locale) { ?>
<option value="<?php echo $locale;?>" <?php echo (isset($settings['fma_locale']) && $settings['fma_locale'] == $locale) ? 'selected="selected"' : '';?>><?php echo $key;?></option>
<?php } ?>
</select>
<p class="description"><?php _e('Select file manager advanced language. Default: en (English)','file-manager-advanced')?></p>
</td>
</tr>
<tr>
<th><?php _e('Public Root Path','file-manager-advanced')?></th>
<td>
<input name="public_path" type="text" id="public_path" value="<?php echo isset($settings['public_path']) && !empty($settings['public_path']) ? $settings['public_path'] : $path;?>" class="regular-text">
<p class="description"><?php _e('File Manager Advanced Root Path, you can change according to your choice.','file-manager-advanced')?></p>
<p>Default: <code><?php echo $path ?></code></p>
</td>
</tr>
<tr>
<th><?php _e('Enable Trash?','file-manager-advanced');
?></th>
<td>
<input name="enable_trash" type="checkbox" id="enable_trash" value="1" <?php echo isset($settings['enable_trash']) && ($settings['enable_trash'] == '1') ? 'checked="checked"' : '';?>>
<p class="description"><?php _e('Deleted files will go to trash folder, you can restore later.','file-manager-advanced')?></p>
<p>Default: <code><?php _e('Not Enabled','file-manager-advanced')?></code></p>
</td>
</tr>
</tbody>
</table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
</form>
</div>