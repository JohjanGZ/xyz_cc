      var r = 0;
      var ul = document.querySelector('#listA');
      for (var i = ul.children.length; i >= 0; i--) {
          ul.appendChild(ul.children[Math.random() * i | 0]);
      }
      var r = 0;
      $('.a').click(function() {

          $(this).css({
              "border": "solid",
              "border-color": "#37D3F7",
              "background": "#B6ECFF"
          });
          var element = $(this).attr("alt");
          var select = $(this).attr("value");
          if (select != "seleccionado") {

              if (element == "n") {
                  r++;
                  $(this).attr("value", "seleccionado");
              } else {
                  r--;
                  $(this).attr("value", "seleccionado");
              }
              console.log(r);
          }
      });

      function result_tipo_1_0_12() {
          var min = $('#Minutos').text();
          var seg = $('#Segundos').text();
          var milseg = $('#Centesimas').text();
          var tiempo = min + ":" + seg + ":" + milseg;



          if (r == 6) {
              localStorage.setItem("Nota2-1-12", nota);
              localStorage.setItem("Time2-1-12", tiempo);
              correcto();
          } else {
              incorrecto();
              localStorage.setItem("Nota2-1-12", "0");
              localStorage.setItem("Time2-1-12", tiempo);
          }

      }