<html>
<head>
  <meta charset="UTF-8">
</head>
  <body>
    <h1> Uniquement les images </h1>
    <?php
     foreach ($nouvelles as $img) {
            if ($img->image() == '') {
                $image = './images/default.jpg';
            } else {
              $image = $img->image();
            }
           ?>   <!--  <img src=<?php echo $img->image() ?> alt="some_text" style="width:300px; height:150px;"> --> 

              <input  type="image" 
                      name="photo" 
                      src=<?php echo $image?>
                      title=<?php echo "\" ".$img->description()."\" ";?>
                      style="width:300px; height:150px;" > 
              </input>
         <?php
        }
        ?>
  </body>
</html>
