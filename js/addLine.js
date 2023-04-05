function cloneRow() {

    // get a reference to the table and the row you want to clone
    var table = document.querySelector("table");
    var rowToClone = document.querySelector("tbody");
    var clonedRow = rowToClone.cloneNode(true);
    var credit = clonedRow.querySelectorAll('input[name="Credit[]"]');
    var debit = clonedRow.querySelectorAll('input[name="Debit[]"]');
    var tablecredit = [];
    var tabledebit = [];
    // console.log("ETO OA");

    //add event listener
    credit.forEach(function(input){
        input.addEventListener("input",function(){
            var credit1= parseInt(input.value);
            tablecredit.push(credit1);
        })
    })
    
    debit.forEach(function(input2){
        input2.addEventListener("input",function(){
            var debit1= input2.value;
            tabledebit.push(debit1);
        })
    })

    let sum1 = tablecredit.reduce(function(a,b){
        return a+b;
    });

    let sum2 = tabledebit.reduce(function(a,b){
        return a+b;
    });
    var somme = sum1 - sum2;

    if (somme != 0){
        alert("Votre journal n'est pas equilibre");
    }
    //create table
    // clone the row

    // add the cloned row to the table
    table.appendChild(clonedRow);
}
