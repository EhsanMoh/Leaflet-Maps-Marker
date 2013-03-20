<?php
/*
    Admin footer - Leaflet Maps Marker Plugin
*/
?>

<?php
//info prevent file from being accessed directly
if (basename($_SERVER['SCRIPT_FILENAME']) == 'admin-footer.php') { die ("Please do not access this file directly. Thanks!<br/><a href='http://www.mapsmarker.com/go'>www.mapsmarker.com</a>"); }
?>

<table cellpadding="5" cellspacing="0" style="margin-top:20px;border:1px solid #ccc;width:100%;background:#F9F9F9;">
  <tr>
    <td valign="center"><div style="float:left;"><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_blank" title="<?php  esc_attr_e('Upgrade to pro version for even more features - click here to find out how you can start a free 30-day-trial easily','lmm'); ?>"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/logo-mapsmarker-pro.png" width="65" height="65" alt="pro-logo" style="padding:10px 10px 0 10px;" /></a></div>
	<p>
	<a style="background:#f99755;display:block;padding:5px;text-decoration:none;color:#2702c6;margin:15px 0 10px 85px;width:800px;text-align:center;" href="<?php echo LEAFLET_WP_ADMIN_URL; ?>admin.php?page=leafletmapsmarker_pro_upgrade"><?php _e('Upgrade to pro version for more features, higher performance and more! Click here to find out how you can start a free 30-day-trial easily','lmm'); ?></a>
	<a style="text-decoration:none;" href="http://www.mapsmarker.com" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-website-home.png" width="16" height="16" alt="mapsmarker.com"> MapsMarker.com</a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="<?php echo LEAFLET_WP_ADMIN_URL; ?>admin.php?page=leafletmapsmarker_pro_upgrade" target="_blank" title="<?php  esc_attr_e('Upgrade to pro version for even more features - click here to find out how you can start a free 30-day-trial easily','lmm'); ?>"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-up16.png" width="16" height="16" alt="upgrade to pro"><?php _e('Upgrade to Pro','lmm'); ?></a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://www.mapsmarker.com/reviews" target="_blank" title="<?php esc_attr_e('please review this plugin on wordpress.org','lmm') ?>"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-star.png" width="16" height="16" alt="ratings"> <?php _e('Rate plugin','lmm') ?></a>&nbsp;&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://translate.mapsmarker.com/projects/lmm" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-translations.png" width="16" height="16" alt="translations"> <?php echo __('translations','lmm'); ?></a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://twitter.com/mapsmarker" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-twitter.png" width="16" height="16" alt="twitter"> Twitter</a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://facebook.com/mapsmarker" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-facebook.png" width="16" height="16" alt="facebook"> Facebook</a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://www.mapsmarker.com/changelog" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-changelog-header.png" width="16" height="16" alt="changelog"> <?php _e('Changelog','lmm') ?></a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://feeds.feedburner.com/MapsMarker" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-rss.png" width="16" height="16" alt="rss"> RSS</a>&nbsp;&nbsp;
	<a style="text-decoration:none;" href="http://feedburner.google.com/fb/a/mailverify?uri=MapsMarker" target="_blank"><img src="<?php echo LEAFLET_PLUGIN_URL; ?>inc/img/icon-rss-email.png" width="16" height="16" alt="rss-email"> <?php echo __('RSS via E-Mail','lmm'); ?></a>&nbsp;&nbsp;&nbsp;
	</p></td>
  </tr>
</table>