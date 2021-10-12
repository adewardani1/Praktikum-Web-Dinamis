<?php
$filecounter = "counter.txt";       //Menginisialisasikancounter.txt dengan variabel $filecounter
$fl = fopen($filecounter, "r+");    //Menginisalisasikan $fl lalu membuka dan menulis (r+) kedalam file counter.txt
$hit = fread($fl, filesize($filecounter)); //Menginisialisasikan $hit lalu mambaca isi dari $filecounter
//Output html dan css menggunakan php echo
echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo ("<td width=250 valign=middle align=center>");
echo ("<font face=verdana size=2 color=#FF0000><b>");
echo ("Anda pengunjung yang ke:");
echo ($hit); //output variabel $hit (pengunjung)
echo ("</b></font>");
echo ("</td>");
echo ("</tr></table>");
fclose($fl); //Menutup $fl (file counter.txt)
$fl = fopen($filecounter, "w+"); //Menginisalisasikan $fl lalu membuka dan menulis (w+) kedalam file counter.txt
$hit = $hit + 1;    //Menambahkan jumlah pengunjung
fwrite($fl, $hit, strlen($hit)); //Mencetak pengunjung
fclose($fl); //Menutup $f1 (file counter.txt)
