let cells = [null, null];
const player1 = $('#player1_score');
const player2 = $('#player2_score');
const delaySlider = $('#delay');
let ignoreClick = false;
let delay = 500; // the delay to turn the tiles
let currentPlayer = 0; // to get the current player increase by 1

// function that is called when someone clicks on a cell
function clicked (cell) {
  if (ignoreClick) {  return; }
    if (cells[0] !== null) {
      cells[1] = cell;
      checkCorrect();
    } else {
      cells[0] = cell;
    }
  showCell(cell);
}

// function to show what number is in the cell
function showCell (cell) {
    cell.text(cell.attr('class').split(' ')[1]);
}
// function to show if the cells have the same number
function checkCorrect () {
  cell1 = cells[0].attr('class').split(' ')[1];
  cell2 = cells[1].attr('class').split(' ')[1];
  ignoreClick = !ignoreClick
  setTimeout(() => {
    if (cell1 === cell2) {
      correct();
    }

    nextPlayer();
    hideNumber();
    ignoreClick = !ignoreClick
  }, delay);
}
// function to show which players turrn it is
function nextPlayer() {
  if (currentPlayer) {
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#222222";
    currentPlayer = 0;
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#144a80";
  } else {
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#222222";
    currentPlayer = 1;
    document.getElementById(`player${currentPlayer + 1}`).style.backgroundColor = "#144a80";
  }
}
// function if the cells are correct
function correct () {
  hidecells();
  increaseScore();
}
// function to increase the score of the player that has the correct answer
async function increaseScore () {
  if (currentPlayer) {
    let player2Txt = Number(player2.text().trim()) + 1;
    player2.textContent = "";
    player2.html(`${player2Txt}`)
  } else {
    let player1Txt = Number(player1.text().trim()) + 1;
    player1.textContent = "";
    player1.html(`${player1Txt}`)
  }
}

// function to change the number back to a questionmark
async function hideNumber () {
  for (var i = 0; i < cells.length; i++) {
    cells[i].text('?');
  }
  cells[0] = cells[1] = null;

}
// function to hide the cells if the pair is found
async function hidecells() {
  for (var i = 0; i < cells.length; i++) {
    document.getElementById(cells[i].attr('id')).style.visibility = 'hidden';
  }
}
