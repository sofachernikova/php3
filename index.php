<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<title>Черникова Софья Кирилловна, Использование Get-параметров в ссылках. Виртуальная клавиатура</title>
</head>
<body>
<header>
<img src="Mospolytech_logo.jpg" alt="Mospolytech">
</header>
<main>
<div class = "calculator">
<?php
if (!isset($_GET['key'])){
$_GET['store'] = '';
$_GET['count'] = 0;
}
else {
if ($_GET['key'] == 'reset'){
$_GET['store'] = '';
$_GET['count'] ++;
}
else{
$_GET['store'] .= $_GET['key'];
$_GET['count'] ++;
}
}
echo '<div class = "result">'.$_GET['store'].'</div>';
?>

<div class = "keyboard">
<a href = '?key=1&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>1</a>
<a href = '?key=2&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>2</a>
<a href = '?key=3&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>3</a>
<a href = '?key=4&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>4</a>
<a href = '?key=5&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>5</a>
<a href = '?key=6&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>6</a>
<a href = '?key=7&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>7</a>
<a href = '?key=8&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>8</a>
<a href = '?key=9&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>9</a>
<a href = '?key=0&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>0</a>
<a class = "reset" href = '?key=reset&count=<?= $_GET['count']?>&store=<?= $_GET['store']?>'>СБРОС</a>
</div>
</div>

</main>
<footer>
<p><?php echo $_GET['count'];?></P>
</footer>
</body>
</html>