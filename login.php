
<form action="admin.php" method="post">
<!DOCTYPE html>
<html>
<head>
 <title>Membuat Login Multi User Level Dengan PHP dan MySQLi - www.malasngoding.com</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <h1>UNTUK LOGIN ADMIN</h1>

 <?php 
 if(isset($_GET['pesan'])){
 if($_GET['pesan']=="gagal"){
 echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
 }
 }
 ?>

 <div class="kotak_login">
 <p class="tulisan_login">LOGIN DULU</p>

 <form action="admin.php" method="post">
 <label>Username</label>
 <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

 <label>Password</label>
 <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

 <input type="submit" class="tombol_login" value="LOGIN">

 <br/>
 <br/>
 <center>
 <a class="link" href="admin.php">SUBMIT</a>
 </center>
 </form>

 </div>


</body>
</html>