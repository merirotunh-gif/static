<?php
class Counter {
    public static $jumlah = 0;

    public function tambah() {
        self::$jumlah++;
    }

    // Method untuk mereset nilai static
    public static function reset() {
        self::$jumlah = 0;
    }
}

// Membuat 5 objek sesuai instruksi
$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();
$c4 = new Counter();
$c5 = new Counter();

// Masing-masing objek memanggil method tambah
$c1->tambah();
$c2->tambah();
$c3->tambah();
$c4->tambah();
$c5->tambah();

echo "<h3>Praktikum 1: Static Variable</h3>";
echo "Hasil sebelum di reset (5 objek): " . Counter::$jumlah . "<br>";

// Memanggil method reset
Counter::reset();
echo "Hasil sesudah di reset: " . Counter::$jumlah;
?>