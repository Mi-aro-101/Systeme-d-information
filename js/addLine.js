function addButtonToRow(row) {
    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";

    deleteButton.style.backgroundColor = "red";
    deleteButton.style.color = "white";
    deleteButton.style.fontWeight = "bold";
    deleteButton.style.borderRadius = "5px";

    deleteButton.addEventListener("click", function () {
      row.remove();
    });
    row.appendChild(deleteButton);
}

function cloneRow() {

    // get a reference to the table and the row you want to clone
    var table = document.querySelector("table");
    var rowToClone = document.querySelector("tbody");
    var clonedRow = rowToClone.cloneNode(true);
    table.appendChild(clonedRow);
    addButtonToRow(clonedRow);
}
