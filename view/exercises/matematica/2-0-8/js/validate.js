let element;
    let conLetraT = 0;
    let conLetraK = 0;

        $(".palabra").draggable({
            start: function() {
                element=$(this).attr("id");

            }
        });

        $(".letraT").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $(this).css("border", "#333");
        //$( this ).target.append(event.target);

        if(element=="transporte"){
            conLetraT++
        }
            ui.draggable.draggable("disable", 1);
        }

    });

    $(".letraK").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $(this).css("border", "#333");
        //$( this ).target.append(event.target);

        if(element=="animal"){
            conLetraK++
        }
            ui.draggable.draggable("disable", 1);
        }

    });
        


    // Formulario - Registrados

    function result_tipo_2_0_5(){
        var  min= $('#Minutos').text();
        var  seg= $('#Segundos').text();
        var  milseg= $('#Centesimas').text();
        var tiempo=min+":"+seg+":"+milseg;

            if( conLetraT == 3 && conLetraK == 4 ){
                
                localStorage.setItem("Nota2-0-5","2");
                localStorage.setItem("Time2-0-5", tiempo);
                correcto(); 

            }

            else {

                incorrecto();
                localStorage.setItem("Nota2-0-5","0");
                localStorage.setItem("Time2-0-5", tiempo);
                
            }    
    } 