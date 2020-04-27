<html>
<head><title>TOKO CAT GUNA BANGUN JAYA</title>
</head>
<body>
<form action="output_tokocat.php" method="POST">
<link rel="stylesheet" type="text/css" href="input_edit.css">
<h2>TOKO CAT GUNA BANGUN JAYA</h2>
<table>
<b>

<tr>
<td>Nama Costumer</td>
<td></td>
<td> : </td>
<td><input type="text" name="nama" size="32"></td>
</tr>

<tr>
<td>Alamat</td>
<td></td>
<td> : </td>
<td><input type="text" name="alamat" size="32"></td>
</tr>

<tr>
<td>Jenis Cat</td>
<td></td>
<td> : </td>
<td><select name="jenis_cat">
<option value="MOWILEX">MOWILEX
<option value="DANAPAINT">DANAPAINT
<option value="CATYLAC">CATYLAC
</td>
</tr>

<tr>
<td>Warna Cat</td>
<td></td>
<td> : </td>
<td>
<input type="radio" name="warna_cat" value="Merah">Merah
<input type="radio" name="warna_cat" value="Biru">Biru
<input type="radio" name="warna_cat" value="Kuning">Kuning
</td>
</tr>

<tr>
<td>Jumlah Beli</td>
<td></td>
<td> : </td>
<td><input type="text" name="jumlah_beli" size="32"></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td>
<input type="submit" value="Bayar">
<input type="reset" value="Batal">
</td>
</tr>

</b>
</table>
</body>
</html>