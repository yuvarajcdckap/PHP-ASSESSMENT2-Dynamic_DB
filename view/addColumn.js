let tableDiv = document.querySelector('.inputField');
let tableBtn = document.querySelector('.createTableRow');

let dataTypes = ['int','varchar(255)','timestamp'];
let displayDataTypes = ['Number','Text','Date Time']

tableBtn.addEventListener("click",()=>{
    let createRow = document.createElement('input');
    createRow.name = "columnName[]";
    tableDiv.append(createRow);

    let createSelect = document.createElement('select');
    createSelect.id = 'selectDatatype';
    createSelect.name = 'dataTypes[]';
    tableDiv.appendChild(createSelect)

    for(let i=0;i<dataTypes.length;i++){
        let createOption = document.createElement('option');
        createOption.value = dataTypes[i];
        createOption.text = displayDataTypes[i];
        createSelect.appendChild(createOption);
    }
});
