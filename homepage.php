<?php
// Menggunakan global untuk mendeklarasikan variabel global
global $api_url_slider, $api_url_popular, $api_url_latest, $redis_host, $redis_port, $redis_password, $redis_db, $redis_key_slider, $redis_ttl_slider, $redis_ttl, $redis_key_popular, $redis_ttl_popular, $redis_key_latest, $redis_ttl_latest;
require 'vendor/autoload.php';
require 'vars.php';

// Menggunakan Predis
$redis = new Predis\Client([
	'scheme' => 'tcp',
	'host'   => $redis_host,
	'port'   => $redis_port,
	'password' => $redis_password,
	'database' => $redis_db,
]);

function getDataFromAPI($redis, $redis_key, $api_url, $ttl) {
	// Cek apakah data ada di Redis
	if ($redis->exists($redis_key)) {
		// Ambil data dari Redis
		$data = $redis->get($redis_key);
		return json_decode($data, true);
	} else {
		// Ambil data dari API
		$response = file_get_contents($api_url);
		if ($response === FALSE) {
			die('Error occurred while fetching data from API');
		}

		// Simpan data ke Redis
		$redis->setex($redis_key, $ttl, $response);
		return json_decode($response, true);
	}
}
?>

<div class="main-content home">
	<div class="home_slider">
		<?php
		// URL endpoint API
		$api_url = $api_url_slider;
		$redis_key = $redis_key_slider;
		$ttl = $redis_ttl_slider;

		// Mengambil data dari API atau Redis
		$data = getDataFromAPI($redis, $redis_key, $api_url, $ttl);

		// Memeriksa apakah data berhasil diuraikan
		if (!is_array($data)) {
			die('Error parsing JSON');
		}

		// Memulai AMP carousel
		echo '<amp-carousel width="500" height="250" layout="responsive" type="slides" autoplay delay="2000">';

		// Iterasi melalui setiap item di dalam array
		foreach ($data as $item) {
			$title = htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8');
			$permalink = htmlspecialchars($item['permalink'], ENT_QUOTES, 'UTF-8');
			$image_url = htmlspecialchars($item['image_url'], ENT_QUOTES, 'UTF-8');

			// Menghasilkan HTML untuk setiap item
			echo '<a rel="noopener" href="' . $permalink . '">';
			echo '<amp-img src="' . $image_url . '" width="500" height="250" layout="responsive" alt="' . $title . '"></amp-img>';
			echo '</a>';
		}

		// Menutup AMP carousel
		echo '</amp-carousel>';
		?>
	</div>

	<div class="container">
		<div class="judul_anime">
			<div class="nama_judul_anime">
				Popular Today
			</div>
		</div>
		<div class="anime mb10">
			<?php
			// URL API endpoint
			$api_url = $api_url_popular;
			$redis_key = $redis_key_popular;
			$ttl = $redis_ttl_popular;

			// Mengambil data dari API atau Redis
			$anime_data = getDataFromAPI($redis, $redis_key, $api_url, $ttl);

			// Memeriksa apakah data berhasil diuraikan
			if (json_last_error() !== JSON_ERROR_NONE) {
				die('Error occurred while decoding JSON response');
			}

			// Menampilkan hasil dalam format HTML
			foreach ($anime_data as $data) {
				$title = htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8');
				$permalink = htmlspecialchars($data['permalink'], ENT_QUOTES, 'UTF-8');
				$anime = htmlspecialchars($data['anime'], ENT_QUOTES, 'UTF-8');
				$image_url = htmlspecialchars($data['image_url'], ENT_QUOTES, 'UTF-8');
				$latest_episode = htmlspecialchars($data['latest_episode'], ENT_QUOTES, 'UTF-8');
				$type = htmlspecialchars($data['type'], ENT_QUOTES, 'UTF-8');
				$subbed = htmlspecialchars($data['subbed'], ENT_QUOTES, 'UTF-8');

				// Memotong judul jika lebih dari 20 karakter
				if (strlen($anime) > 25) {
					$anime = substr($anime, 0, 25) . '...';
				}

				echo <<<HTML
<a href="$permalink" rel="noopener" class="list_anime event_1">
        <div class="image-container">
            <amp-img alt="$title" src="$image_url" width="100" height="150" layout="responsive" class="anime-image"></amp-img>
            <div class="corner-text top-right">$type</div>
            <div class="corner-text bottom-left">Ep $latest_episode</div>
            <div class="corner-text bottom-right">$subbed</div>
        </div>
        <div class="logname">
            <div class="nmgm_nama"><span>$anime</span></div>
        </div>
    </a>
HTML;
			}
			?>
		</div>
	</div>

	<div class="container">
		<div class="judul_anime">
			<div class="nama_judul_anime">
				<i class="fab fa-hotjar"></i>
				Latest Release
			</div>
		</div>
		<div class="anime mb10">
			<?php
			// URL API endpoint
			$api_url = $api_url_latest;
			$redis_key = $redis_key_latest;
			$ttl = $redis_ttl_latest;

			// Mengambil data dari API atau Redis
			$anime_data = getDataFromAPI($redis, $redis_key, $api_url, $ttl);

			// Memeriksa apakah data berhasil diuraikan
			if (json_last_error() !== JSON_ERROR_NONE) {
				die('Error occurred while decoding JSON response');
			}

			// Menampilkan hasil dalam format HTML
			foreach ($anime_data as $data) {
				$title = htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8');
				$permalink = htmlspecialchars($data['permalink'], ENT_QUOTES, 'UTF-8');
				$anime = htmlspecialchars($data['anime'], ENT_QUOTES, 'UTF-8');
				$image_url = htmlspecialchars($data['image_url'], ENT_QUOTES, 'UTF-8');
				$latest_episode = htmlspecialchars($data['latest_episode'], ENT_QUOTES, 'UTF-8');
				$type = htmlspecialchars($data['type'], ENT_QUOTES, 'UTF-8');
				$subbed = htmlspecialchars($data['subbed'], ENT_QUOTES, 'UTF-8');

				// Memotong judul jika lebih dari 20 karakter
				if (strlen($anime) > 25) {
					$anime = substr($anime, 0, 25) . '...';
				}

				echo <<<HTML
<a href="$permalink" rel="noopener" class="list_anime event_1">
        <div class="image-container">
            <amp-img alt="$title" src="$image_url" width="100" height="150" layout="responsive" class="anime-image"></amp-img>
            <div class="corner-text top-right">$type</div>
            <div class="corner-text bottom-left">Ep $latest_episode</div>
            <div class="corner-text bottom-right">$subbed</div>
        </div>
        <div class="logname">
            <div class="nmgm_nama"><span>$anime</span></div>
        </div>
    </a>
HTML;
			}
			?>
		</div>
	</div>
</div>
