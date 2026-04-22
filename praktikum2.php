<?php
class Matematika {
    public static function tambah($a, $b) {
        return $a + $b;
    }
    
    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if ($b == 0) return "Tidak bisa membagi dengan nol";
        return $a / $b;
    }

    // Fungsi menghitung luas persegi
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2</title>
</head>
<body>
    <h3>Praktikum 2: Static Method & Luas Persegi</h3>
    
    <form method="POST">
        <label>Masukkan Sisi Persegi:</label><br>
        <input type="number" name="sisi" required>
        <button type="submit" name="hitung">Hitung Luas</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $sisi = $_POST['sisi'];
        echo "<br>Sisi: " . $sisi;
        echo "<br><b>Luas Persegi: " . Matematika::luasPersegi($sisi) . "</b>";
    }
    
    echo "<br><hr>";
    echo "Contoh Method Lain:<br>";
    echo "10 + 5 = " . Matematika::tambah(10, 5) . "<br>";
    echo "10 - 5 = " . Matematika::kurang(10, 5);
    ?>
</body>
</html>