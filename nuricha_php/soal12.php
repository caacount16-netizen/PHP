<h2>Form REGISTRASI</h2>
<form method="POST" autocomplete="off">
Nama : <br><input type="text" name="nama" autocomplete="off"><br><br>
USN : <br><input type="text" name="usn" autocomplete="off"><br><br>
Password : <br><input type="password" name="pass" autocomplete="new-password"><br><br>
Konfirmasi : <br><input type="password" name="konfirmasi" autocomplete="new-password"><br><br>
<button name="daftar">DAFTAR</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    if ($_POST['pass'] == $_POST['konfirmasi']) {
        echo "<br>Kamu berhasil daftar Registrasi! Halo, " . $_POST['nama'] ;
    } else {
        echo "<br>Password tidak sama!";
    }
}
?>

<hr>

<h2>Form LOGIN</h2>
<form method="POST" autocomplete="off">
USN : <br><input type="text" name="usn2" autocomplete="off"><br><br>
Password : <br><input type="password" name="pass2" autocomplete="new-password"><br><br>
<button name="login">LOGIN</button>
</form>

<?php
if (isset($_POST['login'])) {
    echo "<br>Login sebagai " . $_POST['usn2'];
}
?>