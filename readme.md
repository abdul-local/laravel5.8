# catatan
untuk penulisan pesan error sebaiknya di tulis di lang aja yang lebih baik.
untuk request bisa kita buatkan ksusus saja di agar di control tidak berat apa yang dikerjakan
untuk redirect halaman juga masih dapat menggunaka  helper redirect();
ketika kita ingin mengirim email dengan format markdown kita buat dulu di terminal dengan perintah
php artisan make:mail userActivationMail --markdown="emails.activation"

menjalankan rolback kita bisa menggunakan perintah php artisan migrate:rolback

ketika ingin menambahkan table kita dapat mengguakan
php artisan make:migration add_phone_user_table --table=user

perintah untuk modifikastion table dapat dengan gunakan
php artisan make:migration modifying_name_on_user --table=user

perintah untuk merubah name pada colom
php artisan make:migration rename_phone_on_user --table=user

untu Managemn Database dengan Eloquent 

printah yang bisa kita dunakan terlebih dahulu buat dulu membuat model dengan perintah
php artisan make:Model Post
setelah itu baru di model kita isi untuk fillable

# bagiaman cara membuat create data di database dengan Laravel
 1. lakukan di perintah php artisan make:migration create_posts_table
 2. Buat kan modelnya dengan perintah php artisan make:model posts
 3. setalah itu lakukan perintah di terminal dengan printah php artisan migrate

 # Bagiaman cara Update datanya.. 
 1. ushakan rubah dulu di routnya di mana kita lewatkan berdasarkan nilai Id
 2. setelah itu di controll nya kita gunakan method update lalu isikan field yang baru
 



