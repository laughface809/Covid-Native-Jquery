<?php
//INDONESIA
 $konten = file_get_contents('https://indonesia-covid-19.mathdro.id/api/');
 $data = json_decode($konten, true);
//PROVINSI
 $konten2 = file_get_contents('https://indonesia-covid-19.mathdro.id/api/provinsi');
 $data2 = json_decode($konten2, true);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Data Corona</title>
</head>
<body>
<h1> INDONESIA </h1>
 <table border="1">
  <tr>
   <th>Meningal</th>
   <th>Sembuh</th>
   <th>Perawatan</th>
   <th>Jumlah kasus</th>
  </tr>
  <?php
    print "<tr>";
    print "<td>".$data['meninggal']."</td>";
    print "<td>".$data['sembuh']."</td>";
    print "<td>".$data['perawatan']."</td>";
    print "<td>".$data['jumlahKasus']."</td>";
    print "</tr>";
  ?>
 </table>
<br>
<h1> PROVINSI </h1>
 <table border="1">
  <tr>
   <th>Provinsi</th>
   <th>Kasus Positif</th>
   <th>Kasus Sembuh</th>
   <th>Kasus Meninggal</th>
  </tr>
  <?php
   for($a=0; $a < count($data2['data']); $a++)
   {
    print "<tr>";
    print "<td>".$data2['data'][$a]['provinsi']."</td>";
    print "<td>".$data2['data'][$a]['kasusPosi']."</td>";
    print "<td>".$data2['data'][$a]['kasusSemb']."</tds>";
    print "<td>".$data2['data'][$a]['kasusMeni']."</td>";
    print "</tr>";
   }
  ?>
 </table>
<h1> BALI </h1>
 <table border="1">
  <tr>
   <th>Provinsi</th>
   <th>Kasus Positif</th>
   <th>Kasus Sembuh</th>
   <th>Kasus Meninggal</th>
  </tr>
  <?php
    print "<tr>";
    print "<td>".$data2['data'][8]['provinsi']."</td>";
    print "<td>".$data2['data'][8]['kasusPosi']."</td>";
    print "<td>".$data2['data'][8]['kasusSemb']."</tds>";
    print "<td>".$data2['data'][8]['kasusMeni']."</td>";
    print "</tr>";
  ?>
 </table>
<h1> KELURAHAN </h1>
<?php
$homepage = file_get_contents('c3VrYW5p.html');
echo $homepage;
?>
</body>
</html>