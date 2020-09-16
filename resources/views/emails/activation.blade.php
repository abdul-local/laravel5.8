@component('mail::message')
# Selamat datang di {{ config('app.name') }}

Silahakn atifassi akun mu

@component('mail::button', ['url' => ''])
Aktifasi
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
