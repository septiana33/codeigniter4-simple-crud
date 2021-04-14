# CodeIgniter 4 Simple CRUD

Contoh CRUD sederhana menggunakan Codeigniter versi 4

- Clone repositori dengan perintah:
    ```html
    $ git clone https://github.com/septiana33/codeigniter4-simple-crud.git
    ```

    Jalankan perintah composer install
    ```html
    $ composer install
    ```
    
## Memulai Aplikasi
- Buat database baru dengan nama `ci4-simple-crud`
- Ubah nama file `env` menjadi `.env`
- Sesuaikan konfigurasi DATABASE pada file `.env`
- Jalankan perintah migrate
    ```html
    $ php spark migrate
    ```
- Jalankan aplikasi
    ```html
    $ php spark serve
    ```
- Akses URL http://localhost:8080/posts
