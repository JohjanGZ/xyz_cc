var arr = ['a', 'z'];
for (var i = arr[0].charCodeAt(); i <= arr[1].charCodeAt(); i++) {
    $('.abecedario').append("<div class='letras'><span  id='" + String.fromCharCode(i) + "'>" + String.fromCharCode(i) + "</span></div>");
    // console.log(i);
}
var r = 0;
crucigrama();