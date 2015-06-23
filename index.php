<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php //include(dirname(__FILE__)."/src/php/_index.php"); ?>
<?php include_once (dirname(__FILE__)."/conf/config.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
	<head>
		<title><?=$conf['PAGE_TITLE']; ?></title>
		<link href="src/css/style.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<div id="head">
				<h1><?=$conf['HEADER_TITLE']; ?></h1>
			</div>
			<div id="content">
				<h2>Random Question:</h2>
				<div class="quizbox">
					<h2>Q: Lorem ipsum dolor sit amet?</h2>
					<table align="center" border="1" width="95%">
					<tr>
						<th><button type="submit" name="answer" id="1">Hello World!</button></th>
						<th><input type="radio" id="2" name="answer" value="2">H3ll0 W0rld</th>
					</tr>
					<tr>
						<th><input type="radio" id="3" name="answer" value="3">Hallo Welt!</th>
						<th><input type="radio" id="4" name="answer" value="4">!Welt Hallo</th>
					</tr>
					</table>
				</div>
			</div>
			<div id="footer">
				<br/>Source Code available at <a href="https://github.com/hecki97/QuizKit.git">GitHub</a>
			</div>
		</div>
	</body>
</html>