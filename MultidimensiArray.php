<?php

    // Membuat Multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil","Sepeda","Truk","Motor","Bus"],
        "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
        "motor" => ["Honda","Yamaha","Suzuki"]
    ];

    // menampilkan array kendaraan
    echo "Ini Array Kendaraan <br><br>";
    $output = "";
    foreach ($kendaraan["transportasi"] as $value) {
        $output .= $value . ", ";
    }

    $output = rtrim($output, ", ");
    echo $output . "<br>";
    echo "=========================<br>";

    // menampilkan array mobil
    echo "Ini Array Mobil <br><br>";
    $output = "";
    foreach ($kendaraan["mobil"] as $value) {
        $output .= $value . ", ";
    }

    $output = rtrim($output, ", ");
    echo $output . "<br>";
    echo "=========================<br>";

    // menampilkan array motor
    echo "Ini Array Motor <br><br>";
    $output = "";
    foreach ($kendaraan["motor"] as $value) {
        $output .= $value . ", ";
    }

    $output = rtrim($output, ", ");
    echo $output . "<br>";

?>
