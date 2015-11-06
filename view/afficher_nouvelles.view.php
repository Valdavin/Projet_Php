<html>
<head>
  <meta charset="UTF-8">
</head>
	<body>
		<h1> Image et description </h1>
    <hr>
		<?php
		 foreach ($nouvelles as $img) {
           ?> 
          <br>
          <img src=<?php echo $img->image(); ?> alt="some_text" style="width:300px; height:150px;"> 
          <h2> <?php echo $img->titre(); ?>  </h2>
          <p> <?php echo $img->description(); ?></p>
          <hr>
           <?php

      	}
      	?>
	</body>
</html> 