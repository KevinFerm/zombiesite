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


	$(document).ready(function(){
		$(".toggle").slideToggle();
		$(".button").click(function(){
			var x = $(this).attr("id").substr(7,100);
			$("#toggle_"+x).slideToggle();
		});
    
        var $slide = new Array();
        $(".swipe").on("swiperight",function(){
            var x = $(this).attr("id").split("_");
            if($slide[$x[1]] == null){
                $slide[$x[1]] = 0;
            }
            else{
                $slide[$x[1]]++;
            }
            $.ajax({
            type: "POST",
            url: "<?= base_url().'assets/ajax/slide.php' ?>",
            data: { id: $x[1], slide: $slide[$x[1]] }
            })
            .done(function( msg ) {
            $(this).html(msg);
            });
        });

    });
