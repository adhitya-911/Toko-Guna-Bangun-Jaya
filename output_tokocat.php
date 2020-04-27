<?php
$n=$_POST['nama'];
$a=$_POST['alamat'];
$jc=$_POST['jenis_cat'];
$wc=$_POST['warna_cat'];
$jb=$_POST['jumlah_beli'];

if($jc=="MOWILEX")
	{
	$h=20000;
	}
elseif($jc=="DANAPAINT")
	{
	$h=30000;
	}
elseif($jc=="CATYLAC")
	{
	$h=40000;
	}
else
	{
	$h=0;
	}

$th=$h*$jb;

if($jb>=5)
	{
	$dis=(($th*5)/100);
	}
elseif($jb>=10)
	{
	$dis=(($th*10)/100);
	}
else
	{
	$dis=0;
	}
		
$tb=$th-$dis;
?>

<html>
<head>
<title>PERHITUNGAN TOKO CAT GUNA BANGUN JAYA</title>
</head> 
<body>
<link rel="stylesheet" type="text/css" href="output_edit.css">
<h2>TOKO CAT GUNA BANGUN JAYA</h2>
<table>

<tr>
<td>Nama Costumer</td>
<td></td>
<td> : </td>
<td><?php echo $n; ?></td>
</tr>

<tr>
<td>Alamat</td>
<td></td>
<td> : </td>
<td><?php echo $a; ?></td>
</tr>

<tr>
<td>Jenis Cat</td>
<td></td>
<td> : </td>
<td><?php echo $jc; ?></td>
</tr>

<tr>
<td>Warna</td>
<td></td>
<td> : </td>
<td><?php echo $wc; ?></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td><br></td>
</tr>

<tr>
<td>Harga</td>
<td></td>
<td> : </td>
<td><?php echo "Rp. " .$h; ?></td>
</tr>

<tr>
<td>Jumlah Beli</td>
<td></td>
<td> : </td>
<td><?php echo $jb; ?></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td>---------------------------------- (*)</td>
</tr>

<tr>
<td>Total Harga</td>
<td></td>
<td> : </td>
<td><?php echo "Rp. " .$th; ?></td>
</tr>

<tr>
<td>Diskon</td>
<td></td>
<td> : </td>
<td><?php echo "Rp. " .$dis; ?></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td>---------------------------------- (-)</td>
</tr>

<tr>
<td>Total Bayar</td>
<td></td>
<td> : </td>
<td><?php echo "Rp. " .$tb; ?></td>
</tr>

</table>

<a href="input_tokocat.php">Kembali</a>
</body>
</html>