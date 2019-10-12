<!-- ini adalah caramengirim kan data ke php-->
<!DOCTYPE html>
<html>
<head>
    <title>Form Php</title>
</head>
<body>
<h2>Belajar form html - dengan php</h2>
<!--ini adalah tempat dimana kita memasukan data dan akan di kirimkan ke file php-->
<form action="../menampilkan_data_ke_php/ProsesPost.php" method="post">
Nama : <input type="text" name="nama"/> <!--ini tempat untuk memasukan data nama -->
<br>
Email : <input type="text" name="email"/> <!--ini tempat untuk memasukan data email -->
<br>
<input type="submit" value="proses data"/> <!--ini untuk membuat tombol proses untuk mengirim data ke file php -->
</form>
</body>
</html>