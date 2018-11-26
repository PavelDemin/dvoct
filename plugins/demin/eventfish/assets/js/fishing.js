;$(document).ready(function($) {

    $( "#want_to_fishing" ).click(function() {
        $(".button_go_fishing").hide();
        $( "#form1" ).toggle("slow");

    });
    $( "#invite_to_fishing" ).click(function() {
        $(".button_go_fishing").hide();
        $( "#form2" ).toggle("slow");

    });

  /*  $("#type_fishing_id1").keyup(function() {
   var valInput =  $(this).val();
        $('#form1').request('onGet',{
            data:{value:valInput},
            success: function(data) {
                //$('#type_fishng_id1').prop("placeholder", data);
                $("#type_fishing_id1").val(data.city);
                $("#type_fishing_id1").attr("value",data.city);
            }});
        console.log(valInput);
    });*/

    var idSelect = $("#city_id");
    var cities;
    idSelect.keyup(function() {
        var valInput =  $(this).val();
        console.log(valInput);
        $('#form1').request('onGet',{
            data:{value:valInput},
            success: function(data) {
                cities = data;
            }});
    });
    idSelect.select2({
        data: cities
        //

    });




});
