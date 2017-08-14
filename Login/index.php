<!DOCTYPE HTML>
<html>
<title>Form Đăng nhập</title>
<style type="text/css">
    .login {
        height:180px; width:340px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <div class="login">
        <h2>Form Đăng Nhập</h2>
        UserName: <input type="text" name="username" size="30"  placeholder="username" />
        PassWord: <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Đăng Nhập"/>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];
    if ($username == "admin" && $password == "admin") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>

</body>
</html>