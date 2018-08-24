<?php
  include("function.php");  
?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php
		$urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=sports&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

		$urlSourcesArray = json_decode($urlSources,true);	
			$articlesName = $urlSourcesArray['articles'];
$url = ("https://www.soccerladuma.co.za/news/articles/international/categories/laliga/laliga-players-to-strike-us-matches/300640");
			$article = file_get_contents("$url");
			echo $article;
	?>



</body>
</html>