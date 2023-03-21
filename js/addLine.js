function cloneRow() {
    // get a reference to the table and the row you want to clone
    var table = document.getElementById("myTable");
    var rowToClone = document.getElementById("rowToClone");

    // clone the row
    var clonedRow = rowToClone.cloneNode(true);

    // add the cloned row to the table
    table.appendChild(clonedRow);
}
