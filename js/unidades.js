   
///  *********   COMUNICACION 

//----- 1ero

  function comunicacion1(){
       $("#portada").css("display", "block");
       $('#cuerpo').load('unidades.php',
        { 
          titulo:'Comunicación 1ero', 
          color:'#97be2e',
          libros:{
                  "0":{"title":"Libro 1", "enlace":"com1-1"},
                  "1":{"title":"Libro 2", "enlace":"com1-2"}
                   }, 
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
                          "0": "Comprensión lectora: Cuatro letritas",
                          "1": "Comprensión lectora: Mi colegio",
                          "2": "Comprensión lectora: Patito travieso",
                          "3": "Lectoescritura: Palabras con P - p",
                          "4":"Lectoescritura: Palabras con M - m",
                          "5":"Lectoescritura: Palabras con L - l",

                           }
                         },
              "2":{
                  "ruta":"comunicacion/2",
                  "id":"2",
                  "nombre": "Unidad 2 - Juego con mis amigos y amigas", 
                  "temas":{
                          "0": "Lectoescritura: Palabras con D-d",
                          "1": "¿Qué será? Mi oído me ayudará",
                          "2": "Discriminacion visual",
                          "3": "Lectoescritura: Palabras con T - t",
                          "4": "Una canción",
                          "5": "Una revisión media",
                          "6": "Lectoescritura: Palabras con N-n" ,  
                          "7": "Lectoescritura: Palabras con F-f" , 
                          "8": "Familia de palabras", 
                          "9":  "El sustantivo"
                          }
                  },
              "3":{
                  "ruta":"comunicacion/3",
                  "id":"3",
                  "nombre": "Unidad 3 - Leo en familia",  
                  "temas": {
                          "0": "Lectura: Ondas Expresivas",
                          "1": "Un cuento",
                          "2": "Desplazamiento",
                          "3": "¿Qué será? Mi oído me ayudará",
                          "4": "Lectoescritura: Palabras con V-v",
                          "5": "Lectoescritura: Palabras con R-r",
                           }
                  },     

                            
            
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