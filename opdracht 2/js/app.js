let cells = [null, null];
//variables used for testing
let delay = 1; // time delay in seconds

function clicked (cell) {
    if (cells[0] !== null) {
      cells[1] = cell;
    } else {
      cells[0] = cell;
    }
    showCells();
    console.log(cells);
}

function checkCells () {
  for (var i = 0; i < cells.length; i++) {
    cells[i].text($(this).attr('id'));
  }
}

function checkCorrect (arr) {
  cell1 = $('#' + cells[0]).attr('class')[1];
  cell2 = $('#' + cells[1]).attr('class')[1];
  setTimeout(() => {
    if (cell1 === cell2) {
      correct();
    } else {
      wrong();
    }
  }, delay * 1000);
}
function wrong () {}

function hideNumber () {
  for (var i = 0; i < cells.length; i++) {
    cells[i].text('?');
  }
}
