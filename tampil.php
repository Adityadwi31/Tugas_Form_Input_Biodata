html>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Umur: ' . $_POST['Umur'] . '</li>';
	
	echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
	echo '<li>agama: ' . $_POST['area'] . '</li>';
    echo '<li>alamat'. $_POST['alamat'];
    echo '<li>tempat lahir '. $_POST['tempat'];
    echo '<li>tanggal lahir' . $_POST['TL'];
    echo '<li>Hobby'. $_POST['Hobby'];
    echo '<li>cita-cita'. $_POST['cita-cita'];
    echo '<li>asal sekolah' . $_POST['asal'];
	
}?>
</html>