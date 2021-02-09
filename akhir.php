<?php
$url = 'https://safecity.denpasarkota.go.id/?page=236&domain=&language=id&action=viewdata&indikator=&kkj_id=&tahun=';
$content = file_get_contents($url);
$first_step = explode( "</table>" , $content );
$text1 = $first_step[0];
$file = fopen('c3VrYW5p.html', 'w');
fwrite($file, $text1);
fclose($file);

$url2 = 'https://safecity.denpasarkota.go.id/?page=236&domain=&language=id&action=viewdata&indikator=&kkj_id=&tahun=';
$content2 = file_get_contents($url2);
$first_step2 = explode( "</table>" , $content2 );
$text2 = $first_step2[1];
$file2 = fopen('c3VrYW5p2.html', 'w');
fwrite($file2, $text2);
fclose($file2);

for ($i = 0; $i < 107; $i++){
$row_number = 0;
$file_out = file("c3VrYW5p.html");
unset($file_out[$row_number]);
file_put_contents("c3VrYW5p.html", implode("", $file_out));
}

for ($x = 0; $x < 57; $x++){
$row_number2 = 0;
$file_out2 = file("c3VrYW5p2.html");
unset($file_out2[$row_number2]);
file_put_contents("c3VrYW5p2.html", implode("", $file_out2));
}

$fileku = fopen("c3VrYW5p.html", "a");
$tulisi = "\n</table><style>table { width: 750px; border-collapse: collapse; margin:50px auto;}tr:nth-of-type(odd) { background: #eee; }th { background: #4CAF50; color: white; font-weight: bold; }td, th { padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 18px;}@media only screen and (max-width: 760px),(min-device-width: 768px) and (max-device-width: 1024px)  {table { width: 100%; }table, thead, tbody, th, td, tr { display: block; }thead tr { position: absolute;top: -9999px;left: -9999px;}tr { border: 1px solid #ccc; }td { border: none;border-bottom: 1px solid #eee; position: relative;padding-left: 50%; }td:before { position: absolute;top: 6px;left: 6px;width: 45%; padding-right: 10px; white-space: nowrap;content: attr(data-column);color: #000;font-weight: bold;}}</style>\n";
fwrite($fileku, $tulisi);
fclose($fileku);

$file12 = fopen("c3VrYW5p.html", 'a+');
$file22 = file_get_contents("c3VrYW5p2.html");
fwrite($file12, $file22);

for ($k = 183; $k < 330; $k++){
$row_number3 = 183;
$file_out3 = file("c3VrYW5p.html");
unset($file_out3[$row_number3]);
file_put_contents("c3VrYW5p.html", implode("", $file_out3));
}

unlink("c3VrYW5p2.html");
?>
