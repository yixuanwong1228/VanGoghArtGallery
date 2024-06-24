var puzzlename=document.getElementById('puzzlename').value;

var rows = 3;
var columns = 3;

var currTile;
var otherTile;
var turns = 0;

window.onload = function() {
    // Initialize the 3x3 board
    for (let r = 0; r < rows; r++) {
        for (let c = 0; c < columns; c++) {
            // Create blank tiles for the board
            let tile = document.createElement("img");
            tile.src = "/assets/img/Puzzle/blank.jpg";

            // Add drag functionality to each tile
            tile.addEventListener("dragstart", dragStart); // click on image to drag
            tile.addEventListener("dragover", dragOver);   // drag an image
            tile.addEventListener("dragenter", dragEnter); // dragging an image into another one
            tile.addEventListener("dragleave", dragLeave); // dragging an image away from another one
            tile.addEventListener("drop", dragDrop);       // drop an image onto another one
            tile.addEventListener("dragend", dragEnd);     // after you complete dragDrop

            document.getElementById("board").append(tile);
        }
    }

    // Initialize the pieces
    let pieces = [];
    for (let i = 1; i <= rows * columns; i++) {
        pieces.push(i.toString()); 
    }

    // Shuffle pieces
    pieces = pieces.sort(() => Math.random() - 0.5);

    // Append pieces to the piece container
    for (let i = 0; i < pieces.length; i++) {
        let tile = document.createElement("img");
        tile.src = `/assets/img/Puzzle/${puzzlename}/` + pieces[i] + ".png";

        // Add drag functionality to each tile
        tile.addEventListener("dragstart", dragStart); // click on image to drag
        tile.addEventListener("dragover", dragOver);   // drag an image
        tile.addEventListener("dragenter", dragEnter); // dragging an image into another one
        tile.addEventListener("dragleave", dragLeave); // dragging an image away from another one
        tile.addEventListener("drop", dragDrop);       // drop an image onto another one
        tile.addEventListener("dragend", dragEnd);     // after you complete dragDrop

        document.getElementById("pieces").append(tile);
    }
}

// DRAG TILES
function dragStart() {
    currTile = this; // this refers to the image that was clicked on for dragging
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
}

function dragLeave() {}

function dragDrop() {
    otherTile = this; // this refers to the image that is being dropped on
}

function dragEnd() {
    if (currTile.src.includes("blank")) {
        return;
    }

    // Swap images between the current tile and the other tile
    let currImg = currTile.src;
    let otherImg = otherTile.src;
    currTile.src = otherImg;
    otherTile.src = currImg;

    // Increment the turn counter
    turns += 1;
    document.getElementById("turns").innerText = turns;
}
