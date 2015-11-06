<html>
<head>
  <meta charset="UTF-8">
</head>
	<body>
		<h1> Seulement Url </h1>
		<hr>
		<?php
		 foreach ($flux as $r) {
		 	$r->update();
		 	echo "<a href = \"".$r->url()."\">".$r->titre();
		 	echo "<br><br>";
      	}
      	?>
	</body>
</html> 