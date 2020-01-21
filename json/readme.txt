CORS (Cros Origin Resource Sharing)

> Mekanisme yang membuat kita dapat mengakses sebuah
  resource (data,document,script) dari domain lain

> Caranya adalah dengan membuat server memperbolehkan
  adanya akses data dari luar domain

> Modifikasi Access-Control-Allow-Origin

> Membuat File .htaccess
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>