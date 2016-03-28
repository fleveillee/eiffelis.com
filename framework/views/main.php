<!DOCTYPE html>
<html>
<head>
	<title><?=$view->title();?></title>
	<meta charset="UTF-8">
	<link href="/stylesheets/main.css" rel="stylesheet">
</head>
<body>

<nav>
    <a class="first" href="index.html">Home</a>
    <a href="contact.html">Contact Us</a>
    <a href="portfolio.html">Portfolio</a>
</nav>

<header>
    <div class="logo"></div>
</header>

<?=$view->renderBody(); ?>

<footer>
    <p>&copy; eiffelis 2014
</footer>
</body>

</html>
<link href="/stylesheets/normalize.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|Raleway:400,300,200' rel='stylesheet' type='text/css'>