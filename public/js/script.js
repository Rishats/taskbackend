$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
});
$(document).ready(function(){
    $("#kill").click(function(){
        var zagon_1 = $("#zagon_1").val();
        var zagon_2 = $("#zagon_2").val();
        var zagon_3 = $("#zagon_3").val();
        var zagon_4 = $("#zagon_4").val();
        if(zagon_1 != '' || zagon_2 != '' || zagon_3 != '' || zagon_4 != '')
        {
            // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "ajax",
                data: { zagon_1: zagon_1,zagon_2: zagon_2,zagon_3: zagon_3,zagon_4: zagon_4},
                cache: false,
                success: function(result){
                    alert(result);
                }
            });
        }
        else
        {
            alert("Выберите хоть одну овцу!");
        }
        return false;
    });
});