<?php
// Değişken tanımlama
// integer(tamsayı), string(yazı), float(noktalı sayı, boolean(true, false)
	$sayi1 = 20;
	$sayi2 = 30;

	function topla($a, $b) {
		$toplam = $a + $b;
		echo 'Toplam: '.$toplam.'<br>';
	}

	function cikar($a, $b)
	{
		$kalan = $a - $b;
		echo 'Çıkarma: '.$kalan.'<br>';
	}

	function carpma($a, $b)
	{
		$carpma = $a * $b;
		echo 'Çarpma: '.$carpma.'<br>';
	}

	function bolme($a, $b)
	{
		$bol = $a / $b;
		echo 'Bölme: '.$bol.'<br>';
	}
	topla($sayi1, $sayi2);
	cikar($sayi1, $sayi2);
	carpma($sayi1, $sayi2);
	bolme($sayi1, $sayi2);

	function ekranaYazdir()
	{
		echo 'Parametresiz Fonksiyon';
	}

	ekranaYazdir();

	echo '<br>';

	$sayi3 = 10;
	//$sayi3 = $sayi3 + 5;
// sayi3'e 5 ekle, yine sayi3'e eşitle.
	$sayi3 += 5;
	echo $sayi3;

// sayi3'ü 5 ile çarp, yine sayi3'e eşitle.
	$sayi3 *= 5;
	echo '<br>'.$sayi3;

echo '<br>';
	$sayi4 = 16;
	// karekök alma
	echo sqrt($sayi4);
	echo '<br>';
	// üs alma
	echo pow($sayi4, 2);
	echo '<br>';
	// Dizi oluşturma
//                 0.eleman  1.   2.el.
	$dizi = array('Tunahan', 1, 'Oğuz');
	// Dizide dolaşmak için döngü
	foreach($dizi as &$eleman)
	{
		echo $eleman.'<br>';
	}

	$a = 5;
	echo '<br>';
	// Döngü (a küçük eşit 10 olduğu sürece çalışacak)
	while($a <= 10)
	{
		echo $a.'<br>';
		$a += 1;
	}
	// Döngü (i 1'den başlar 10'a kadar 1 artırır. 10 oluncaya kadar çalışmaya devam eder.)
	for($i = 1; $i <= 10; $i++)
	{
		echo $i.'<br>';
	}

	$yenisayi = 35;

// $yenisayi eğer 30'dan küçükse ekrana Sayı 30dan küçük yazdır.
	if ($yenisayi < 30)
	{
		echo 'Sayı 30dan küçük';
	}
// değilse ekrana Sayı 30dan küçük değil yazdır.
	else
	{
		echo 'Sayı 30dan küçük değil.';
	}

	 $sayi5 = 7;

// if else gibi.
	 switch($sayi5)
	 {
	 	case 4:
	 		echo 'Sayı 4tür.';
	 		break;
	 	case 5:
	 		echo 'Sayı 5tir';
	 		break;
	 	case 6:
	 		echo 'Sayı 6dır';
	 		break;
	 	default:
	 		echo 'Yukarıdakilerin hiçbirini sağlamıyor';
	 		break;
	 }