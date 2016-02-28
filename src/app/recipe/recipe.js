function addRow(tableID) {
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var colCount = table.rows[0].cells.length;
    var inputs = [
        {el:"input", type:"checkbox", label:"", name:"checkbox"},
        {el:"input", type:"text", label:"Ingredient", name:"ingredient"},
        {el:"input", type:"text", label:"Quantity", name:"quantity"},
        {el:"select", type:"", label:"Measurement", name:"measurement", options:[
                                                                            {key:"cups", value:"Cups"},
                                                                            {key:"ounce", value: "Ounces"},
                                                                            {key:"tablespoon", value:"Tablespoon"},
                                                                            {key:"teaspoon", value:"Teaspoon"},
                                                                            {key:"pound", value:"Pounds"},
                                                                        ]}
    ];
    for(var i=0; i <colCount; i++) {
        var newcell = row.insertCell(i);
        var inp = inputs[i],
            input = document.createElement(inp.el), 
            label = document.createElement('label');
        label.innerHTML = inp.label;
        input.type = inp.type;
        input.name = "ingredients["+rowCount+"]["+inp.name+"]";
       
        if(inp.el === "select") {
            for(var j=0; j < inp.options.length; j++) {
                var option = document.createElement("option"), 
                    opt = inp.options[j];
                option.value = opt.key;
                option.innerHTML = opt.value;
                input.appendChild(option);
            }
        }
        
        if(inp.label) newcell.appendChild(label);
        newcell.appendChild(input);
        // newcell.innerHTML = table.rows[0].cells[i].innerHTML;
    }
};

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for (var i=0; i<rowCount; i++) {
        var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all Ingredients.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
            i--;
		}
	}
};


