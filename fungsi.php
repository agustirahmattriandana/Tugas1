<?php
    //fungsi 1
    function nama(){
        echo "Hello Agusti Rahmat Triandana<br><br>";
    }

    //fungsi 2, dengan input variabel
    function inputnama($fname) {
        echo "Selamat datang $fname <br>";
    }

    //fungsi 3 menggunakan return
    function jumlah($a, $b){
        return $a+$b;
    }
    
    //memanggil fungsi 1
    nama();
    //memanggil fungsi 2
    inputnama("Agusti");
    inputnama("Rahmad");
    //memanggil fungsi 3
    echo "<br><br>Hasil penjumlahan =". jumlah(3,4) ."<br>";
    
?>