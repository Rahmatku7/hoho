<?php
/**
 * Pembuat script : Tomy Satriandy Sinulingga
 * Nomor wa : 082384238403
 * Website : https://medan-smm.co.id
 *
 */

date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '128M');

/* CONFIG */
$config['web'] = array(
	'maintenance' => 0, // 1 = yes, 0 = no
	'title' => 'NAMA WEB KAMU',
	'judul' => 'NAMA WEB KAMU | Panel SMM Termurah',
	'meta' => array(
		'description' => 'NAMA WEB KAMU - Panel SMM Termurah sebuah platform reseller panel smm termurah dan no.1 di indonesia yang menyediakan berbagai layanan social media marketing yang bergerak terutama di Indonesia. Dengan bergabung bersama kami, Anda dapat menjadi penyedia jasa social media atau reseller social media seperti jasa penambah Followers, Likes, dll. Saat ini tersedia berbagai layanan untuk social media terpopuler seperti Instagram, Facebook, Twitter, Youtube, dll. SMM Panel Indonesia yang menyediakan panel sosial media seperti Followers, Likes, Views, Subscriber, untuk beragam social media: Instagram Youtube, Facebook, Twitter dengan harga Termurah.',
		'keywords' => 'smm panel',
		'author' => 'NAMA WEB KAMU'
	),
	'base_url' => 'https://tesreseller.jagososmed.com/', // ganti link domainmu
	'register_url' => 'https://tesreseller.jagososmed.com/auth/register.php' // ganti link domainmu
);

$config['register'] = array(
	'price' => array(
		'member' => 10000,
		'reseller' => 30000,
	),
	'bonus' => array(
		'member' => 5000,
		'reseller' => 10000,
	)
);

$config['db'] = array(
	'host' => 'localhost',
	'name' => 'jagososm_tesreseller',
	'username' => 'jagososm_tesreseller',
	'password' => 'jagososm_tesreseller'
);
/* END - CONFIG */

require 'lib/db.php';
require 'lib/model.php';
require 'lib/function.php';

session_start();
$model = new Model();
