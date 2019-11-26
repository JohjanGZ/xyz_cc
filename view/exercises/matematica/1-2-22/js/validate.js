    $('select').formSelect();
    // Random
    var div = document.querySelector('.grid-container');
    for (var i = div.children.length; i >= 0; i--) {
        div.appendChild(div.children[Math.random() * i | 0]);
    }
    // Select
    var r = 0;
    $("#slc1").change(function() { if ($(this).val() == 6) { r++; } });
    $("#slc2").change(function() { if ($(this).val() == 2) { r++; } });
    $("#slc3").change(function() { if ($(this).val() == 1) { r++; } });
    $("#slc4").change(function() { if ($(this).val() == 4) { r++; } });
    // $("#slc5").change(function() { if ($(this).val() == 26) { r++; } });
    // $("#slc6").change(function() { if ($(this).val() == 36) { r++; } });
    // $("#slc7").change(function() { if ($(this).val() == 47) { r++; } });
    // $("#slc8").change(function() { if ($(this).val() == 21) { r++; } });
    // $("#slc9").change(function() { if ($(this).val() == 15) { r++; } });
    // $("#slc10").change(function() { if ($(this).val() == 32) { r++; } });
    // $("#slc11").change(function() { if ($(this).val() == 44) { r++; } });
    // $("#slc12").change(function() { if ($(this).val() == 45) { r++; } });
    // $("#slc13").change(function() { if ($(this).val() == 3) { r++; } });
    // $("#slc14").change(function() { if ($(this).val() == 3) { r++; } });
    // $("#slc15").change(function() { if ($(this).val() == 6) { r++; } });
    // $("#slc16").change(function() { if ($(this).val() == 5) { r++; } });
    // $("#slc17").change(function() { if ($(this).val() == 4) { r++; } });
    // $("#slc18").change(function() { if ($(this).val() == 9) { r++; } });