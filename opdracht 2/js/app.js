let cells = [null, null];
//variables used for testing
let delay = 1; // time delay in seconds

$(document).ready(() => {
  $('.cell').click(() => {
    if (cells[0] !== null) {
      cells[1] = $(this).attr('id');
      console.log(cells[1]);
    } else {
      cells[0] = $(this).attr('id');
      console.log(cells[0]);
    }
    console.log($(this).attr('id'))
    console.log(cells);
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
  }, delay * 1000);
}
function wrong () {}

function hideNumber () {

}
