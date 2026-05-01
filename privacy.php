<?php global $site_url, $brand_name;
include 'vars.php'; ?>
<!DOCTYPE html>
<html amp lang="id">
<?php include 'header.php'; ?>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css"> <!-- Sesuaikan dengan nama file CSS Anda -->
</head>
<body>
<?php include 'header-mobile.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="container">
	<div class="content">
		<h1>Kebijakan Privasi</h1>
		<p>Selamat datang di <?php echo $brand_name; ?>, diakses dari <?php echo $site_url; ?> Privasi pengunjung kami adalah prioritas utama kami. Dokumen Kebijakan Privasi ini menjelaskan jenis informasi yang dikumpulkan dan dicatat oleh <?php echo $brand_name; ?> serta cara kami menggunakannya.</p>
		<p>Jika Anda memiliki pertanyaan tambahan atau membutuhkan informasi lebih lanjut tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi kami.</p>

		<h2>Informasi yang dikumpulkan</h2>
		<p>Kami mengumpulkan informasi pribadi yang Anda berikan, seperti nama, alamat email, dan informasi kontak lainnya, sesuai dengan kebutuhan layanan kami.</p>

		<h2>Penggunaan Informasi</h2>
		<p>Informasi yang dikumpulkan digunakan untuk menyediakan, mengoperasikan, dan meningkatkan layanan kami, serta untuk komunikasi dengan Anda dan pengembangan fitur baru.</p>

		<h2>File Log</h2>
		<p><?php echo $brand_name; ?> menggunakan file log standar untuk menganalisis tren pengguna, mengelola situs, dan melacak pergerakan pengunjung. Informasi yang tercatat tidak dapat diidentifikasi secara pribadi.</p>

		<h2>Cookies dan Web Beacon</h2>
		<p>Kami menggunakan cookies untuk menyimpan preferensi pengunjung dan mengoptimalkan pengalaman pengguna. Google juga dapat menggunakan cookie DART untuk menampilkan iklan berdasarkan kunjungan Anda.</p>

		<h2>Kebijakan Privasi Pihak Ketiga</h2>
		<p>Kebijakan Privasi kami hanya berlaku untuk aktivitas online di <?php echo $brand_name; ?> dan tidak mencakup informasi yang dikumpulkan secara offline atau melalui situs web lain yang tidak terkait.</p>

	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
