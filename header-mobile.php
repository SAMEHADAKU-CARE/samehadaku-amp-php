<?php
global $brand_name, $brand_logo, $site_url
?>
<div class="header-mobile">
	<div class="mobile-logo">
		<a href="<?php echo $site_url; ?>" rel="noopener">
			<amp-img src="<?php echo $brand_logo; ?>" alt="<?php echo $brand_name; ?>-logo" width="140" height="30" layout="intrinsic">
			</amp-img>
		</a>
	</div>
	<div class="mobile-button">
		<button class="menu" on="tap:sidenav">
			<i class="fas fa-bars"></i>
		</button>
	</div>
</div>