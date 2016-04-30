<?php
session_start();
if(isset($_SESSION['admin'])){
    header("location:admin/index.php");
}else{
?>
<html>
<head>
    <title>.: Perpustakaan :.</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div id="login">
        <h3>Login Admin</h3>
        <form action="proses-admin.php" method="POST" name="login">
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Login"><br><br>
            </div>
                <a href="index.php"><< Kembali</a>
        </form>
    </div>
</body>
</html>
<?php
}
?>
