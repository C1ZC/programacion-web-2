function validar(){
                 
  var flagmatricula=false;
  var flagano=false;
  
  var CaracteresMatricula=document.getElementById("matricula").value.length;    
  var matricula=document.getElementById("matricula").value;   
     
     if(CaracteresMatricula < 6){
         
         flagmatricula=false; 
     }else{
      flagmatricula=true;
    }

var CaracteresAno=document.getElementById("año").value.length;    
var año=document.getElementById("año").value;

if(CaracteresAno < 4){
        
        flagano=false; 
    }else{
        flagano=true;
    }

if(flagmatricula==true && flagano==true){
    alert("Los datos son validos");
    return true;
}else{
    alert("Los datos NO son validos");
    return false;
}
}