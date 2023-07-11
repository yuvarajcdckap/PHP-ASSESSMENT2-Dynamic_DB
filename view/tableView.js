let tableBtn = document.querySelector('.createTableRow');
let columnMainDiv = document.querySelector(".columnMainDiv");

let displayDataTypes = ['Number', 'Text', 'Date Time']
let dataTypes = ['int', 'varchar(255)', 'date'];

tableBtn.addEventListener("click", () => {
    let tableDiv = document.createElement('Div');
    tableDiv.setAttribute("class", "columnDiv")

    let createRow = document.createElement('input');
    createRow.name = "columnName[]";
    createRow.placeholder = "Column Name";
    createRow.setAttribute("class", "column")
    tableDiv.append(createRow);

    let createSelect = document.createElement('select');
    createSelect.id = 'selectDatatype';
    createSelect.name = 'dataTypes[]';
    tableDiv.appendChild(createSelect)

    let deleteBtn = document.createElement('button')
    deleteBtn.type = "button";
    deleteBtn.innerHTML = "Delete";
    deleteBtn.setAttribute("class", "deleteBtn");
    tableDiv.appendChild(deleteBtn)
    columnMainDiv.appendChild(tableDiv)

    for (let i = 0; i < dataTypes.length; i++) {
        let createOption = document.createElement('option');
        createOption.value = dataTypes[i];
        createOption.text = displayDataTypes[i];
        createSelect.appendChild(createOption);
    }

    let deleteDiv = document.querySelectorAll(".deleteBtn");
    for (let i = 0; i < deleteDiv.length; i++) {
        deleteDiv[i].addEventListener("click", () => {
            deleteDiv[i].parentElement.remove();
        })
        console.log(deleteDiv[i])

    }

})