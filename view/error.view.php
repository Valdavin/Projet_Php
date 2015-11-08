<html>
<head>
  <meta charset="UTF-8">
</head>
	<body>
		<h2> Erreur </h2>
		<?php
			if (isset($error)) {
				echo $error;
			} else {
				echo "erreur inconnue";
			}
      	?>
	</body>
</html> 