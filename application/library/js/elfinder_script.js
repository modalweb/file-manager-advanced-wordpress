jQuery(document).ready(function() {
                 var fmakey = jQuery('#fmakey').val();
				  var fma_locale = jQuery('#fma_locale').val();
				 jQuery('#file_manager_advanced').elfinder(
					// 1st Arg - options
					{
						cssAutoLoad : false,               // Disable CSS auto loading
					    url : ajaxurl,  // connector URL (REQUIRED)
						customData : {action: 'fma_load_fma_ui',_fmakey: fmakey},
						uploadMaxChunkSize : 1048576000000,
						defaultView : 'list',
						lang : fma_locale,
					},
				
				);
				 
				
});