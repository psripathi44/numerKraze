<html>
<head>
<title>NumerKraze</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<h1 class="title"> NumerKraze - conversion made easy</h1>
<span class="subTitle">For all all the people who follows numerology and want a quick conversion.</span><br/><br/><br/>
<input type="number" name="input" value="" placeholder="Enter input here" class = "formTextbox" required/> 
<input type="submit" name="submit" class= "formButton" value="Submit"/>
</form>
<div class="results">
<?PHP
	function result($inpVal){
		while(1){
			$buffArr = str_split($inpVal);
			$buffArr = array_map('intval', $buffArr);
			$buff = array_sum($buffArr);
			$inpVal = $buff;
			if($inpVal <= 9)
				return $inpVal;
		}
	}
	if(isset($_POST["submit"])){
		$inpVal = $_POST["input"];
		print "<span class='outcome'>Result: ".result($inpVal)."</span>";
	}
?>
<br/><br/><br/>
<span class="description">
Numerology is any belief in the divine or mystical relationship between a number and one or more coinciding events. It is also the study of the numerical value of the letters in words, names and ideas. It is often associated with the paranormal, alongside astrology and similar divinatory arts.<br/><br/>
</span><br/>
<span class="endCred">Think your friends can use this, share it.</span>
<br/><br/>
</div>
</body>
</html>