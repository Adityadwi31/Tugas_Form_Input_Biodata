<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: black;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: black;
    }

    div {
        border-radius: 5px;
        background-color: skyblue;
        padding: 20px;
    }
</style>

<body>

    <form action="" method="post">
        <div class="row">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>" />
        </div>
        <div class="row">
            <label>Umur</label>
            <input type="text" name="Umur" value="<?= isset($_POST['Umur']) ? $_POST['Umur'] : '' ?>" />
        </div>
        <div class="row">
            <label>Jenis Kelamin</label>
            <div class="options">
                <?php
                $jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
                foreach ($jenis_kelamin as $kode => $detail) {
                    $checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
                    echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <label>Agama</label>
            <select name="area">
                <?php $options = array(' ', 'Islam', 'Kristen', 'Buddha', 'Konghucu', 'hindu');
                foreach ($options as $area) {
                    $selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
                    echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
                } ?>
            </select>
        </div>

        <div class="row">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= isset($_POST['alamat']) ? $_POST['alamat'] : '' ?>" />
        </div>
        <div class="row">
            <label>tempat lahir</label>
            <input type="text" name="tempat" value="<?= isset($_POST['tempat']) ? $_POST['tempat'] : '' ?>" />
        </div>
        <div class="row">
            <form action="/action_page.php">
                <label for="TTL">tanggal lahir:</label>
                <input type="date" name="TL" value="<?= isset($_POST['TL']) ? $_POST['TL'] : '' ?>" />
        </div>
        <div class="row">
            <div class="row">
                <label>Hobby</label>
                <input type="text" name="Hobby" value="<?= isset($_POST['Hobby']) ? $_POST['Hobby'] : '' ?>" />
            </div>
            <div class="row">
                <label>Cita-cita</label>
                <input type="text" name="cita-cita" value="<?= isset($_POST['cita-cita']) ? $_POST['cita-cita'] : '' ?>" />
            </div>
            <div class="row">
                <label>asal sekolah</label>
                <input type="text" name="asal" value="<?= isset($_POST['asal']) ? $_POST['asal'] : '' ?>" />
            </div>





            <div class="row">
                <input type="submit" name="submit" value="Simpan" />
            </div>
            <?php
            if (isset($_POST['submit'])) {
                echo '<h1>Hasil Input</h1>';
                echo '<ul>';
                echo '<li>Nama: ' . $_POST['nama'] . '</li>';
                echo '<li>Umur: ' . $_POST['Umur'] . '</li>';

                echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
                echo '<li>agama: ' . $_POST['area'] . '</li>';
                echo '<li>alamat: ' . $_POST['alamat'];
                echo '<li>tempat lahir: ' . $_POST['tempat'];
                echo '<li>tanggal lahir: ' . $_POST['TL'];
                echo '<li>Hobby: ' . $_POST['Hobby'];
                echo '<li>cita-cita: ' . $_POST['cita-cita'];
                echo '<li>asal sekolah: ' . $_POST['asal'];
            } ?>
    </form>

</html>