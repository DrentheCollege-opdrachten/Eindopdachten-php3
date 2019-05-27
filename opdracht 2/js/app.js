let cells = [null, null];
//variables used for testing
let delay = 1; // time delay in seconds

$(document).ready(function() {
  $('.cell').onclick(() => {
    if (cells[0] !== null) {
      cells[0] = $(this).attr('id')[1];
    } else {
      cells[1] = $(this).attr('id')[1];
    }

    if (cells[1] != null) {
      checkCorrect();
    }
  });

});

function checkCorrect (arr) {
  cell1 = $('#' + cells[0]).attr('class')[1];
  cell2 = $('#' + cells[1]).attr('class')[1];
  setTimeout(() => {
    if (cell1 === cell2) {
      correct();
    } else {
      wrong();
    }
  } delay * 1000);
}

function hideNumber ()
