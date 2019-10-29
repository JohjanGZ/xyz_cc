   
///  *********   COMUNICACION 

//----- 1ero

  function comunicacion1(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        { 
          titulo:'Comunicación 1ero', 
          color:'#97be2e',
          enlace:'', 
          data:{
              "0":{
                  "ruta":"comunicacion/0",
                  "id":"0",
                  "nombre": "Unidad 0 - Aprendiendo en mi escuela",  
                  "temas": {
                          "0": "Actividad digital"
                           }
                  },
              "1":{
                  "ruta":"comunicacion/1",
                  "id":"0",
                  "nombre": "Unidad 1 - Voy a leer y a escribir",  
                  "temas": {
                          "0": "tema 1"
                           }               
            }
        }
    });
  }

///  *********   MATEMATICAS 

//---- 1ERO

  function matematica1(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        { 
          titulo:'Matematica 1ero', 
          color:'#26c6da',
          enlace:'mate1', 
          data:{
              "0":{
                "id":"1",
                "nombre": "unidad 1",  
                "ejercicios":{
                          "0": "ejericio 1 de la unidad 1 matematica 1",
                          "1": "ejericio 2 de la unidad 1 matematica 1",
                          "2": "ejericio 3 de la unidad 1 matematica 1",
                          "3": "ejericio 4 de la unidad 1 matematica 1",
                          "4": "ejericio 5 de la unidad 1 matematica 1",
                          "5": "ejericio 6 de la unidad 1 matematica 1",
                          } 
              },
              "1":{
                  "id":"2",
                  "nombre": "unidad 2",  
                  "ejercicios": {
                          "0": "ejericio 1 de la unidad 2 matematica 1",
                          "1": "ejericio 2 de la unidad 2 matematica 1",
                          "2": "ejericio 3 de la unidad 2 matematica 1",
                          "3": "ejericio 4 de la unidad 2 matematica 1",
                          "4": "ejericio 5 de la unidad 2 matematica 1",
                          "5": "ejericio 6 de la unidad 2 matematica 1",
                  }
              }
          }
        });
  }

//---- 2DO
    function matematica2(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        {
          titulo:'Matematica 2do', 
          color:'#ce1916',
          enlace:'matematica', 
          data:{
              "0":{
                "ruta":"matematica/2/",
                "id":"1",
                "nombre": "unidad 1",  
                "temas": {
                          "0": "Agrupa los siguientes elementos segun sus caracteristicas",
                          "1": "ejericio 2 de la unidad 1 matematica 1",
                          "2": "ejericio 3 de la unidad 1 matematica 1",
                } 
              },
          }
        });
      }

///  *********   INICIAL


//----- 3AÑOS

    function inicial3(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        { 
          titulo:'Inicial 3 años', 
          color:'#26c6da',
          enlace:'inicial3', 
          data:{
              "0": {
                "ruta":"inicial/3/1",
                "id":"1",
                "nombre": "unidad 1",  
               "ejercicios":{
                          "0": "ejericio 1 de la unidad 1",
                          "1": "ejericio 2 de la unidad 1",
                          "2": "ejericio 3 de la unidad 1",
                          "3": "ejericio 4 de la unidad 1",
                          "4": "ejericio 5 de la unidad 1",
                          "5": "ejericio 6 de la unidad 1",
                        } 
              },
          }
        });
     }

//----- 4AÑOS
            function inicial4(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        { 
          titulo:'Inicial 4 años', 
          color:'#26c6da',
          enlace:'inicial/4', 
          data:{
              "0": {
                "id":"1",
                "nombre": "unidad 1",  
               "ejercicios":{
                          "0": "ejericio 1 de la unidad 1",
                          "1": "ejericio 2 de la unidad 1",
                          "2": "ejericio 3 de la unidad 1",
                          "3": "ejericio 4 de la unidad 1",
                          "4": "ejericio 5 de la unidad 1",
                          "5": "ejericio 6 de la unidad 1",
                        } 
              },
              "1":{
                  "id":"2",
                  "nombre": "unidad 2",  
                  "ejercicios":{
                          "0": "ejericio 1 de la unidad 2",
                          "1": "ejericio 2 de la unidad 2",
                          "2": "ejericio 3 de la unidad 2",
                          "3": "ejericio 4 de la unidad 2",
                          "4": "ejericio 5 de la unidad 2",
                          "5": "ejericio 6 de la unidad 2",
                  } 
              }
        }
        });
}
    function libros() {
       $("#portada").css("display", "block");
       $('#cuerpo').load('view/libros.php');
    }

    $("#portada").css("display", "none");
