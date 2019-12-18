$('.seleccion').formSelect();

var r = 0;
$(".slc").change(function() {
    if ($("#slc1").attr("alt") < $("#slc1").val()) {
        r++;
    }else if($("#slc2").attr("alt") > $("#slc2").val()){
        r++;
    }else if($("#slc3").attr("alt") < $("#slc3").val()){
        r++;
    }else if($("#slc4").attr("alt") = $("#slc4").val()){
        r++;
    }else if($("#slc5").attr("alt") > $("#slc5").val()){
        r++;
    }else if($("#slc6").attr("alt") < $("#slc6").val()){
        r++;
    }
});