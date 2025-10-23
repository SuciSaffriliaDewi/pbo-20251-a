<?php

class luasLingkaran {

      public const phi = 3.14;
      public int $jari;
}

$lingkaran = new luasLingkaran();
$lingkaran->jari = 10;

$rumus = luasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

echo "Hasilnya adalah: ". $rumus;