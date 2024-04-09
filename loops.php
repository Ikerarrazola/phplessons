
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
</html>
  <?php
    include 'includes/header.php';
  ?>     


<?php
    //loop

    //while loop
    //do while loop
    //for loop
    //foreach loop
    $x = 1;
    while ($x <= 5) {
        echo "hi there<br>";
        $x++;
    }
    //end of video 17

    //start of video 18
    $x = 1;
    do  {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
    //end of video 18

    //start of video 19
    for ($x = 1; $x <=10; $x++) {
        echo "hi<br>";
    }
    //end of video 19

    //start of video 20
    $array = array("Daniel","jane", "jacob","john", "mariane");

    foreach ($array as $loopdata) {
        echo "my name is ".$loopdata."<br>";
    }
    //end of video 20

    


?>

    <h1>Hello, world!</h1>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>