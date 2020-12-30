//Declaracion de arreglos
var autos=["Chevrolet","Ford","BMW","Nissan","GSM"];

var dato=document.getElementById("datos");
var mod=document.getElementById("modificaciones");
autos.reverse();

//extrae un elemento del arreglo
autos.pop() //Adiios Nissan

dato.innerHTML="<h1>"+autos.join(" * ")+"</h1>";

autos.push("sabaru"); // Insertar un elemento al arreglo
autos.push("cadillac");
//extrae el primer elemento del arreglo
autos.shift() //Adios Chevrolet
//inserta un elemento al principio del arreglo
autos.unshift("volkswagen") // Bienvenido Volkswagen
autos.sort();
var txt="";
autos.forEach(mostrarArreglo);
mod.innerHTML=txt;
function mostrarArreglo(value,){
    txt=txt+"<li>"+value+"</li>"+"<br>";
}

 /*Objetos en JavaScript*/
 var persona1={
     nombre:"Esther",
     apellido:"Trejo",
     edad:"2..",
     telefono:"482-102-1751",
     nombreCompleto:function(){
         return this.nombre +" "+this.apellido;
        }

     }

     persona1.apellido="Glz."
     
     function persona(nombre,apellido,edad){
         this.nombre=nombre,
         this.apellido=apellido,
         this.edad=edad
     }
     //Abuelo
     var abuelo=new persona("Jose","Gonzalez",60);
     var abuela=new persona("Aurelia","Sanchez",52);
     
                     /*mod.innerHTML="<h1>"+autos.join(" * ")+"</h1><br>";*/
     var datosPersona=document.getElementById("datosPersona");
     datosPersona.innerHTML="mi abuelo se llama "+abuelo.nombre+"y mi abuela se llama "+abuela.nombre;
     
 
   