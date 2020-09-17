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
 # lalu bagiama cara mendelete data
 1. ya udah tinggal pakai method delete aja yang ada di larave nanti akan menghapus data sesui dengan nilai id nya bro

 # Mencari data di data base dengan method where
 1. kita bisa mengguakan method where dengan paramater yang kita isi nama table dan nilainy
 2. contoh misalnya saya memiliki data di database dengan nama table post, di mana terdapat table yang namanya is_published yang
 memiliki type data boolean.
 3. nah untuk mengambil datanya bisa menggunakan printah $post  = Post::where('is_published', true)->first(), atau bisa juga menggunakan method get()
 # Mengurutkan data di database dengan method orderBy
 1. misalnya ketika kita ingin mengurutkan data di table post kita bisa melakukan perintah dengan method orderBy
 2. $post = Post::orderBy('id',asc)->get();

 # Untuk Mengambil data terakhir di database bisa menggunakan method latest()
 1. gunakan printah $post = Post::latest()->get();

 



