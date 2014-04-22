$(document).ready(function(){
        $(".toggle").slideToggle();
        $(".button").click(function(){
            var x = $(this).attr("id").substr(7,100);
            $("#toggle_"+x).slideToggle();
        });
            $(".ministeps").click(function(){
            var x = $(this).attr("id").substr(10,100);
            //alert(x);
            $("#ministep_"+x).slideToggle();
        });
            $(".plannerlink").click(function(){
            $(".planner").slideToggle();
        });
    });
