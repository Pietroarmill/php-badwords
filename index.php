<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  $bad_Word = $_GET["badword"];
  $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla excepturi voluptatibus, velit totam autem aliquam consequuntur explicabo obcaecati saepe adipisci eveniet illum cupiditate quaerat! Accusamus voluptate quam earum doloremque nobis!";
  ?>
  
  <p>
    <?php
    echo $lorem;
    ?>
  </p>

  <span>
    <?php 
    echo strlen($lorem)
    ?>
  </span>

  <p>
    <?php
    $new_lorem = str_replace($bad_Word, "***", $lorem);
    echo $new_lorem
    ?>
  </p>

  <span>
    <?php 
    echo strlen($new_lorem)
    ?>
  </span>

</body>
</html>