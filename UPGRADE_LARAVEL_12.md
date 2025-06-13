# Upgrade Guide untuk Laravel 12

## Perubahan yang Dilakukan

Library ini telah diperbarui untuk kompatibilitas dengan Laravel 12. Berikut adalah perubahan utama yang dilakukan:

### 1. Persyaratan PHP
- **Sebelum**: PHP ^7.4|^8.0
- **Setelah**: PHP ^8.2
- **Alasan**: Laravel 12 memerlukan PHP 8.2 atau lebih tinggi

### 2. Dependency HTTP Client
- **Sebelum**: `php-http/guzzle6-adapter: ^2.0`
- **Setelah**: `php-http/guzzle7-adapter: ^1.0`
- **Alasan**: Upgrade ke Guzzle 7 untuk kompatibilitas yang lebih baik

### 3. PSR-7 Implementation
- **Sebelum**: `guzzlehttp/psr7: ^1.6`
- **Setelah**: `guzzlehttp/psr7: ^2.0`
- **Alasan**: Versi terbaru PSR-7 untuk Laravel 12

### 4. HTTP Factory
- **Sebelum**: `http-interop/http-factory-guzzle: ^1.0`
- **Setelah**: `http-interop/http-factory-guzzle: ^1.2`
- **Alasan**: Versi yang kompatibel dengan Guzzle 7

### 5. Laravel HTTP Component
- **Sebelum**: `illuminate/http: ^8.0|^9.0|^10.0|^11.0`
- **Setelah**: `illuminate/http: ^12.0`
- **Alasan**: Spesifik untuk Laravel 12

### 6. PHPUnit (Development)
- **Sebelum**: `phpunit/phpunit: ^9.0`
- **Setelah**: `phpunit/phpunit: ^11.0`
- **Alasan**: Laravel 12 menggunakan PHPUnit 11

## Cara Upgrade

1. Pastikan PHP versi 8.2 atau lebih tinggi sudah terinstall
2. Jalankan `composer update` untuk menginstall dependency terbaru
3. Test aplikasi Anda untuk memastikan semua fungsi berjalan dengan baik

## Catatan Penting

- Laravel 12 adalah "maintenance release" dengan minimal breaking changes
- Sebagian besar aplikasi Laravel dapat upgrade ke Laravel 12 tanpa mengubah kode aplikasi
- Library ini sekarang kompatibel dengan Laravel 12 dan dependency terbaru

## Troubleshooting

Jika Anda mengalami masalah setelah upgrade:

1. Pastikan semua dependency sudah terupdate dengan `composer update`
2. Clear cache Laravel dengan `php artisan cache:clear`
3. Clear config cache dengan `php artisan config:clear`
4. Regenerate autoload dengan `composer dump-autoload`

## Dukungan

Jika Anda menemukan bug atau masalah, silakan buat issue di repository GitHub.