function cloneRow() {
    // get a reference to the table and the row you want to clone
    var table = document.querySelector("table");
    var rowToClone = document.querySelector("tbody");

    // clone the row
    var clonedRow = rowToClone.cloneNode(true);

    // add the cloned row to the table
    table.appendChild(clonedRow);
}
