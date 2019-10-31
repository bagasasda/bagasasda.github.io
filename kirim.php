<?php
if($_POST['kirim']){
	$admin = 'bagasasda@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['judul']);
	$pesan	= htmlentities($_POST['pesan']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="parallax.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="parallax.html">Kembali</a>';
	}
}else{
	header("Location: parallax.html");
}
?>