<html>
<head>
  <meta charset="UTF-8">
</head>
	<body>
		<h1> Uniquement les images </h1>
		<?php
		 foreach ($nouvelles as $img) {
           ?> <img src=<?php echo $img->image() ?> alt="some_text" style="width:300px; height:150px;"> <?php

      	}
      	?>
	</body>
</html>
