<?php

namespace App\Math;

class luasLingkaran {

      public const phi = 3.14;
      protected int $jari;

      public function __construct($isijari = 1) {
            $this->jari = $isijari; //10
      }

      public function tampil($nama = 'ban') {
            $rumus = luasLingkaran::phi * ($this->jari * $this->jari);
            echo "Lingkaran {$nama} ini hasilnya adalah: $rumus";
      }

      public static function testing() {
            echo "<br/>";
            echo "Ini testing static";
      }

      public function __destruct() {
            echo "<br/>";
            echo "Udah ah cape";
      }

}
