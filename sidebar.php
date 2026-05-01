<?php
global $brand_name, $brand_logo, $site_url
?>
<amp-sidebar id="sidenav" layout="nodisplay" side="right">
	<div class="sidenav__header">
		<div class="sidenav__header-logo">
			<amp-img src="<?php echo $brand_logo; ?>" alt="<?php echo $brand_name; ?>" width="180" height="59" layout="intrinsic">
			</amp-img>
		</div>
	</div>
	<div class="sidenav-list">
		<ul>
			<li>
				<a href="<?php echo $site_url; ?>" rel="noopener">
					<i class="fas fa-home"></i>
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="about.php">
					<i class="fas fa-film"></i>
					<span>Tentang</span>
				</a>
			</li>
			<li>
				<a href="contact.php">
					<i class="fas fa-bookmark"></i>
					<span>Kontak</span>
				</a>
			</li>
			<li>
				<a href="dmca.php">
					<i class="fas fa-clock"></i>
					<span>DMCA</span>
				</a>
			</li>
			<li>
				<a href="privacy.php">
					<i class="fas fa-clock"></i>
					<span>Kebijakan Privasi</span>
				</a>
			</li>
			<li>
				<a href="syarat-ketentuan.php">
					<i class="fas fa-clock"></i>
					<span>Syarat & Ketentuan</span>
				</a>
			</li>
		</ul>
	</div>
</amp-sidebar>