<?php
global $site_url, $url_anime, $url_bookmark, $brand_name, $url_schedule, $google_analytics;
?>
<div class="footer-mobile">
	<a class="footer-item" href="<?php echo $site_url; ?>">
		<div class="footer-icon"><i class="fas fa-home"></i></div>
		<div class="footer-title">Home</div>
	</a>
	<a class="footer-item" href="<?php echo $url_anime; ?>">
		<div class="footer-icon"><i class="fas fa-film"></i></div>
		<div class="footer-title">Anime</div>
	</a>
	<a class="footer-item footer-login" href="<?php echo $url_bookmark; ?>">
		<div class="footer-icon">
			<div class="footer-icon"><i class="fas fa-bookmark"></i></div>
		</div>
		<div class="footer-title">Bookmark</div>
	</a>
	<a class="footer-item" href="<?php echo $url_schedule; ?>">
		<div class="footer-icon"><i class="fas fa-clock"></i></div>
		<div class="footer-title">Schedule</div>
	</a>
</div>
<amp-analytics type="googleanalytics">
	<script type="application/json">
		{
			"vars": {
				"account": "<?php echo $google_analytics; ?>"
			},
			"triggers": {
				"default pageview": {
					"on": "visible",
					"request": "pageview",
					"vars": {
						"title": "<?php echo $brand_name; ?>"
					}
				}
			}
		}
	</script>
</amp-analytics>