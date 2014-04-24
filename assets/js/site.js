$(document).ready(function(){
    $(".toggle").slideToggle();
                $.ajax({
                   type: "POST",
                   url: "index.php/mainstep/ajaxSteps/ajax",
                   // success: function(response){
                   //            $("#steps").html(response);
                   //          }
           });
    $(".button").click(function(){
        var x = $(this).attr("id").substr(7,100);
        $("#toggle_"+x).slideToggle();
        $.get("http://42foo.com/zombiesite/index.php/ajax/slide/"+x+"/0", function (msg) {
            $("#swipe_"+x).html(msg);
        });
    });
    $(".ministeps").click(function(){
        var x = $(this).attr("id").substr(10,100);
        $("#ministep_"+x).slideToggle();
                $.get("index.php/mainstep/getStepsText/"+x, function (msg) {
                $("#ministep_"+x).html(msg);
        });
    });
    $(".plannerlink").click(function(){
        $(".planner").slideToggle();
    });

    var slide = new Array();
    $(".swipe").on("swiperight",function(){
        var x = $(this).attr("id").split("_");
        if(slide[x[1]] == null){
            slide[x[1]] = 1;
        }
        else
        {
             slide[x[1]]++;
        }
        $.get("http://42foo.com/zombiesite/index.php/ajax/slide/"+x[1]+"/"+slide[x[1]], function (msg) {
            if (msg != "")
            {
                $("#swipe_"+x[1]).html(msg);
            }
            else
            {
                slide[x[1]]--;
            }
        });
    });

    $(".swipe").on("swipeleft",function(){
        var x = $(this).attr("id").split("_");
        if(slide[x[1]] == null)
        {
            return;
        }
        else
        {
            if(slide[x[1]] != 0)
            {
                slide[x[1]]--;
            }
        }
        $.get("http://42foo.com/zombiesite/index.php/ajax/slide/"+x[1]+"/"+slide[x[1]], function (msg) {
            $("#swipe_"+x[1]).html(msg);
        });
    });

});
