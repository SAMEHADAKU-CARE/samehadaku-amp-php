<?php
global $contact_email, $brand_name;
include 'vars.php';
?>
<!DOCTYPE html>
<html amp lang="id">
<?php include 'header.php'; ?>
<body>
<?php include 'header-mobile.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="container">
	<div class="content">
		<h1>Hubungi Kami</h1>
		<p>Jika Anda memiliki pertanyaan, saran, atau masukan, jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini. Kami akan berusaha untuk merespons secepat mungkin.</p>
		<h2>Informasi Kontak</h2>
		<p><strong>Email:</strong> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
		<p>Kami sangat menghargai setiap masukan dan pertanyaan dari Anda. Terima kasih telah menghubungi <?php echo $brand_name; ?>.</p>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
