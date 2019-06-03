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
        // try {
        //   $screen = new Screen();
        //   $screen->show();
        // } catch (\Exception $e) { echo $e;}

        ?>
          <tbody>
            <tr id="row0">
              <td class="cell 1" id="0" onclick="clicked($(this))"> ? </td>
              <td class="cell 1" id="1" onclick="clicked($(this))"> ? </td>
              <td class="cell 2" id="2" onclick="clicked($(this))"> ? </td>
              <td class="cell 2" id="3" onclick="clicked($(this))"> ? </td>
            </tr>
            <tr id="row1">
              <td class="cell 3" id="4" onclick="clicked($(this))"> ? </td>
              <td class="cell 3" id="5" onclick="clicked($(this))"> ? </td>
              <td class="cell 4" id="6" onclick="clicked($(this))"> ? </td>
              <td class="cell 4" id="7" onclick="clicked($(this))"> ? </td>
            </tr>
            <tr id="row2">
              <td class="cell 5" id="8" onclick="clicked($(this))"> ? </td>
              <td class="cell 5" id="9" onclick="clicked($(this))"> ? </td>
              <td class="cell 6" id="10" onclick="clicked($(this))"> ? </td>
              <td class="cell 6" id="11" onclick="clicked($(this))"> ? </td>
            </tr>
            <tr id="row3">
              <td class="cell 7" id="12" onclick="clicked($(this))"> ? </td>
              <td class="cell 7" id="13" onclick="clicked($(this))"> ? </td>
              <td class="cell 8" id="14" onclick="clicked($(this))"> ? </td>
              <td class="cell 8" id="15" onclick="clicked($(this))"> ? </td>
            </tr>
        </tbody>
      </table>
    </div>

    <script src="./js/app.js" charset="utf-8"></script>
  </body>
</html>
