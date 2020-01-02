console.log("loaded");

function checkValue() {
    var value = $("#dropDown1 option:selected").val();
    console.log(value);
    
    switch (value){
        case "Default":
            console.log("Default");
            break;
        case "Social":
            console.log("Social");
            break;
    }
    
//    var dropD = document.getElementById("dropDown1");
//    var result = dropD.options[dropD.selectedIndex].value;
//    console.log(result);


}