<?php

$num1 = 34;
$num2 = 45;

if($num1>$num2){
    echo "büyük sayımız $num1 'dir";
} else {
    echo "büyük sayımız $num2 'dir";
}
$vize = 45;
$final = 55;
$ortalama = ($vize * 0.4)+($final * 0.6);
if($ortalama>50){
    echo "Dersi geçtiniz. Ortalamanız = $ortalama";
}else{
    echo "Dersten kaldınız. Ortalamanız = $ortalama";
}

$vize = 25;
$final = 60;
$ortalama = ($vize * 0.4)+($final * 0.6);
if($ortalama>50){
    echo "Dersi geçtiniz. Ortalamanız = $ortalama";
}else{
    echo "Dersten kaldınız. Ortalamanız = $ortalama";
}

$number = 65;

if($number % 2 == 0) {
    echo "Sayımız çift sayıdır" ;
}else{
    echo "Sayımız tek sayıdır" ;
}

$username = "Şeyma" ;
$password = "12345" ;

$girilen_user = "Sıla" ;
$girilen_parola = "12345" ;
 
if (($username==$girilen_user)&&($password==$girilen_parola)){
    echo "Giriş Başarılı";
}else{
    echo "Giriş Başarısız";
}





?>
