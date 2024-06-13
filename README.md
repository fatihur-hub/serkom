# Panduan Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan aplikasi ini.

## Cara Install

1. **Ekstrak File**
   - Ekstrak file aplikasi ke dalam folder tujuan.

2. **Migrate Database**
   - Buka terminal/command prompt.
   - Jalankan perintah untuk migrasi database:
     ```
     php artisan migrate
     ```

3. **Seed Database**
   - Setelah migrasi selesai, jalankan perintah untuk mengisi data awal ke dalam database:
     ```
     php artisan db:seed
     ```

4. **Jalankan Server**
   - Terakhir, jalankan server dengan perintah:
     ```
     php artisan serve
     ```
   - Aplikasi akan diakses di `http://localhost:8000` atau sesuai dengan port yang ditampilkan setelah menjalankan perintah di atas.

## Informasi Login Admin

- **Email**: admin@admin.com
- **Password**: admin
