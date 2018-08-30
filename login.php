<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="">
</head>
<body>

<?php
require_once 'DB.php';

$ID = $_POST["ID"];
$password = $_POST["password"];

$mysqli = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=oliverapppg_workmanagement;charset=utf8',$db['user'],$db['pass']);
$sql = "SELECT * FROM oliverapppg_workmanagement.member WHERE ID = :ID AND password = :password";
$stmt = $mysqli->prepare($sql);
$stmt->bindValue(':ID', $ID);
$stmt->bindValue(':password', $password);
$res = $stmt->execute();
if($stmt->fetch() == false)
{
	echo "ログインに失敗しました";
	exit();
}
else
{
}

?>

<nav>ID: <?php echo $ID ?> </nav>
<aside>
a<br>
b<br>
c<br>
d<br>
</aside>
<article>
main
</article>
<footer></footer>
<!-- SCRIPTS -->
</body>
</html>
