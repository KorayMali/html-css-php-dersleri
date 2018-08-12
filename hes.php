<form action=”” method=”post” name=”form1″> //post methodu ile formumuzu açtık
  <label></label>
  <table width=”369″ height=”162″ border=”0″>
    <tr>
      <td width=”198″ rowspan=”2″>Sayi 1      
      <input name=”sayi1″ type=”text” id=”sayi1″ />//1.sayı girişi

</td>
      <td width=”155″><label>
        <input name=”radiobutton” type=”radio” value=”topla” />//topla radiobuttonu 
      Topla</label></td>
    </tr>
    <tr>
      <td height=”31″><label>
        <input name=”radiobutton” type=”radio” value=”cikar” />
      &Ccedil;ıkar</label></td>
    </tr>
    <tr>
      <td rowspan=”3″>Sayi 2
      <input name=”sayi2″ type=”text” id=”sayi2″ />//2.sayı girişi

</td>
      <td><label>
        <input name=”radiobutton” type=”radio” value=”carp” />
      &Ccedil;arp</label></td>
    </tr>
    <tr>
      <td><input name=”radiobutton” type=”radio” value=”bol” />
      Böl</td>
    </tr>
    <tr>
      <td><label>
        <input type=”submit” name=”Submit” value=”Hesapla” />
      </label></td>
    </tr>
    <tr>
      <td>Sonu&ccedil; :
      <?
  
$kontrol=$_POST[‘radiobutton’]; //radiobutton ismindeki radiobutonlarımızı $kontrol değişkenimize post methodu ile attık

  if($kontrol==topla) // eğer kontrol değişkeninde yani ismi radiobutton olan radiobutonlarımızda topla işaretli ise $sonuç değişkeninde sayi1 ve sayi2’yi topla..
  $sonuc=$sayi1+$sayi2;
 
  if($kontrol==cikar)
  $sonuc=$sayi1-$sayi2;
 
  if($kontrol==carp)
  $sonuc=$sayi1*$sayi2;
 
  if($kontrol==bol)
  $sonuc=$sayi1/$sayi2;
 
  echo $sonuc;//hangi radiobutton işaretliyse o sonucu yazar

 

 
 
  ?>

</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>