<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

/**
 * Import semua class yang digunakan dalam framework ini.
 * Tenang, ini telah dilakukan secara otomatis oleh composer.
 *
 * Sekarang, tinggal menjalankan aplikasi ini saja.
 */

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Okey, sekarang memanggil fungsi web secara static pada kernel.
 * Bentar, fungsi web ini perlu app kernel sebagai penghubung aplikasi.
 * Setelah itu, hanya perlu menjalankannya saja.
 *
 * Ini sangat simple.
 */

\Core\Kernel\Kernel::web(
    new \App\Kernel()
)->run();
