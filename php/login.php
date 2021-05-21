<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="g201210080@sakarya.edu.tr";
    $sifre="g201210080";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz <br><hr>";
            echo "$parola";
        }
        else{
            header("Location:../login.html");
        }
    }
    else{
        header("Location:../login.html");
    }
}
else {
    header("Location:../login.html");
}
?>
