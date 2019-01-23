<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WP2-09</title>
  </head>
  <body>
  <?php 
      $health = 100;
      $kill = 0;
      define('MAX_killS',100);
        while (($health <> 10)&&($kill <= MAX_ATTEMPTS)) {
          $health=rand(0,20);
          echo $health . "<br>";
          $attempt++;
    ?>         <br />
    <?php
        }
        if (($health == 10 )&&($health != MAX_ATTEMPTS)) {
          if ($attempt ==1) {
            echo  $attempt . " pokus.";
          }
          else {
            echo  $attempt . " pokusů.";
          }
        }
        else {
          echo "Jan smůla smůlička ";
        }
    ?>
  </body>
  </html>
