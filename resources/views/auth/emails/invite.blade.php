<p>
	Hallo {{ $member->name }}
</p>
<p>
	Admin Kami Telah Mendaftarkan Email Anda ({{ $member->email }}) Ke Larapus. Untuk Login, Silahkan Kunjungi 
	<a href="{{ $login=url('login') }}">{{ $login }}</a>. Login Dengan Email Anda Dan Password <strong>{{$password}}</strong>.
</p>
<p>
	Jika Ingin Mengubah Password, Silahkan Kunjungi
	<a href="{{ $reset=url('password/reset') }}">{{ $reset }}</a> Dan Masukan Email Anda.
</p>