<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        // Menghitung total produk setiap kali objek dibuat
        self::$jumlahProduk++;
    }
}

class Transaksi {
    // Method final agar tidak bisa diubah oleh class lain
    final public function prosesTransaksi($produk) {
        echo "Memproses pembelian: <b>" . $produk->nama . "</b> seharga Rp" . number_format($produk->harga, 0, ',', '.') . "<br>";
    }
}

echo "<h3>Praktikum 3: Sistem Produk & Transaksi</h3>";

// Membuat minimal 3 objek produk
$p1 = new Produk("Kacang Bawang Surya", 15000);
$p2 = new Produk("Tuber Crunch", 12000);
$p3 = new Produk("Susu Kotak", 6000);

echo "Total jenis produk yang terdaftar: " . Produk::$jumlahProduk . "<br><br>";

$app = new Transaksi();
$app->prosesTransaksi($p1);
$app->prosesTransaksi($p2);
$app->prosesTransaksi($p3);
?>