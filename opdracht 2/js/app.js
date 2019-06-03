let cells = [null, null];
const player1 = $('#player1_score');
const player2 = $('#player2_score');
let currentPlayer = 0; // to get the current player increase by 1
//variables used for testing
let delay = 1; // time delay in seconds

function clicked (cell) {
    if (cells[0] !== null) {
      cells[1] = cell;
      checkCorrect();
    } else {
      cells[0] = cell;
    }
    showCell(cell);
}

function showCell (cell) {
    cell.text(cell.attr('class').split(' ')[1]);
}

function checkCorrect () {
  cell1 = cells[0].attr('class').split(' ')[1];
  cell2 = cells[1].attr('class').split(' ')[1];
  setTimeout(() => {
    if (cell1 === cell2) {
      correct();
    } else {
      wrong();
    }
    nextPlayer();
    hideNumber();
  }, delay * 1000);
}

function nextPlayer() {
  if (currentPlayer) {
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "white";
    currentPlayer = 0;
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#29ffcd";
  } else {
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "white";
    currentPlayer = 1;
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#29ffcd";
  }
}
function wrong () {console.log('wrong');}
function correct () {
  console.log('correct')
  // hidecells();
}

function hideNumber () {
  for (var i = 0; i < cells.length; i++) {
    cells[i].text('?');
  }
  cells[0] = cells[1] = null;

}

function hidecells() {
  for (var i = 0; i < cells.length; i++) {
    cells[i].css('vissibility', 'hidden');
  }
}
