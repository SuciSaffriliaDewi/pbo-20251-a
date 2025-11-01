<?php

class luasLingkaran {
	
      public const phi = 3.14;
      public int $jari;

      public function tampil($nama = 'ban') {
            $rumus = luasLingkaran::phi * ($this->jari * $this->jari);
            echo "Lingkaran {$nama} ini hasilnya adalah: {$rumus}";
      }

      public static function testing() {
            echo "<br/>";
            echo "Ini dari static";
      }

}

$lingkaran = new luasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

luasLingkaran::testing(); //panggil static method
