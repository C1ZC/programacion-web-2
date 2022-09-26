var total = 0;
var j = 0;

function ccal() {
  var num = document.getElementById("ical").value;

  while(j <= num){
      total +=j;
      j++;
  }
  document.getElementById("rCal").innerHTML = total;
}
function obj() {
    var notebook={

        marca: "samsumng",
        procesador: "i5 10th",
        color: "Negro",
        modelo: "n3239ax",
        memoria: "500 GB"
    }

    //como imprimir de java script a html usa JSON.stringify(objeto)
  document.getElementById("robj").innerHTML = JSON.stringify(notebook);
}

function jq(){
    $(document).ready(function (){
      var h = $("h1");
    console.log("h1");

    });
    
}

