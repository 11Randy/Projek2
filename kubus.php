<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menghitung Kubus - Website Randy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="main-table" border="1">
    <tr>
        <td colspan="2" class="header">
            <img src="Randy.jpg" alt="Foto Profil" class="profile-img">
            <span>SELAMAT DATANG DI WEBSITE RANDY RIZKY PUTRA MAHARDIKA !!!</span>
        </td>
    </tr>
    <tr>
        <td class="menu b">
            <a href="index.html">Home</a><br>
            <a href="profile.html">Profile</a><br>
            <a href="media.html">Media Sosial</a><br>
            <a href="kubus.php">Hitung Kubus</a><br>
</td>
        <td class="content">
            <h2>Menghitung Volume Kubus</h2>
            <form method="post">
                <label>Masukkan Sisi Kubus (cm):</label>
                <input type="number" name="sisi" min="1" required>
                <button type="submit" name="hitung">Hitung</button>
            </form>
            <?php
            if (isset($_POST['hitung'])) {
                $sisi = $_POST['sisi'];
                $volume = pow($sisi, 3);
                echo "<div class='result'>Volume Kubus Dengan sisi <strong>$sisi cm</strong> 
                      adalah <strong>$volume cm<sup>3</sup></strong>.</div>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="footer">
            Copyright@baknus666.sch.id
        </td>
    </tr>
</table>
</body>
</html>
