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
            element.removeClass("pieza");
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
            element.removeClass("pieza");
        }

    });
        