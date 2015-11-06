<html>
<head>
  <meta charset="UTF-8">
</head>
	<body>
		<h1> Seulement Url </h1>
		<hr>
		<?php
		 foreach ($nouvelles as $img) {
		 	echo "<a href = \"".$img->link()."\">".$img->description();
		 	echo "<br><br>";
      	}
      	?>
	</body>
</html> 