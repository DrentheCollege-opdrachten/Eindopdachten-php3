<?php
  include_once "./php/classes/screen.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.css">
    <title>eindopdracht 2 | php 3</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="playerscores">
        <div id="player1">
          <span>player 1: <span id="player1_score"> 0 </span><span> points </span></span>
        </div>
        <div id="player2">
          <span>player 2: <span id="player2_score"> 0 </span><span> points </span></span>
        </div>
      </div>

      <table>
        <?php
        try {
          $screen = new Screen();
          $screen->show();
        } catch (\Exception $e) { echo $e;}

        ?>
      </table>

      <div class="reset_div">
        <form action="index.php" method="post">
            <button id="reset" type="submit" name="button">Click me to reset the fields!</button>
        </form>
      </div>
    </div>

    <script src="./js/app.js" charset="utf-8"></script>
  </body>
</html>
