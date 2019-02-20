<html>
<head>
    <title>Masuk</title>
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$username=$_POST['name'];
$password=$_POST['password'];
if($username == "Anndrf" && $password == "07"){
    echo "<h1>LOGIN BERHASIL</h1>";
}else{
    echo "<h1>LOGIN GAGAL</h1>";
}
?>
<div class="cancel">
<h1><a href="index.php"> <input type="button"  value="KEMBALI" name="button"> </a></h1>
</div>
</body>
</html>