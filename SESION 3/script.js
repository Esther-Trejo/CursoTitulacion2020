
        /* COMENTARIOS EN 
        JavaScript
        */

        
        alert("mi primer codigo de JS");
        var a=5;
        var b=3;
        console.log("la suma de a+b=");
        console.log("la resta de a-b");
        console.log("la multiplicacion de a x b=" + (a*b));
        console.log("la division de a / b= "+ (a/b));
        //declarar variables
        var nombreAlumno="pedro";
        var Nombre="Juan";
        var _nombreCompleto="Juan...";
        // mostrar conslola de numeros variables
        console.log(nombreAlumno);
        console.log(_nombreCompleto);
        //funciones
        function suma(){
            let a=Number(document.forms["formulario"]["num1"].value);
            let b=Number(document.forms["formulario"]["num2"].value);
            alert("la suma de los valores es:" +(a+b) );
           // console.log(a+b);

        }
               function calculadora(){
                   var x=document.getElementById("valor1").value;
                   var y=document.getElementById("valor2").value;
                   var x=Number(x);
                   var y=Number(y);
                   

                   var op=document.getElementById("operacion").value;
                   var resultado =document.getElementById("resultado");
                   resultado.style.color="blue"
                   resultado.style.fontSize="24px"

                   var calc=document.getElementById("calculadora");
                   calc.style.backgroundcColor="lightblue";
                   switch(op){
                       case "sum":
                           resultado.style.color="blue";
                           resultado.innerHTML=(x+y);
                           break;
                        case "res":resultado.style.color="red";
                            resultado.innerHTML=(x-y);
                            break;
                        case "mul":
                            resultado.style.color="green";
                            resultado.innerHTML=(x*y);
                            break;
                        case "div":resultado.style.color="black";
                            resultado.innerHTML=(x/y);
                            break;
                        default:
                            resultado.style.color="purple";
                            resultado.innerHTML="opcion no valida";
                   }
                }
                   //document.getElementById(Resultado).innerHTML=(x+y);
              
    