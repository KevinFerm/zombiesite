$(document).ready(function(){
        $(".toggle").slideToggle();
        $(".button").click(function(){
            var x = $(this).attr("id").substr(7,100);
            $("#toggle_"+x).slideToggle();
        });
            $(".plannerlink").click(function(){
            $(".planner").slideToggle();
        });
    });
