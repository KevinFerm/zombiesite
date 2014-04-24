    <div class="planner l-box-lrg pure-g-r">
    <div class="pure-u-1-5">

    </div>
    </div>
<script>
function callMe()
        {
            $.ajax({
                   type: "POST",
                   url: "index.php/mainstep/ajaxSteps/ajax",
                     success: function(response){
                                $("#test").html(response);
                              }
           });
        }
        setInterval(callMe, 5000);
</script>
<div id="steps">
<?php echo Modules::run('mainstep/mainstep/index'); ?>
<?php $test = $this->session->userdata('substep1'); ?>
<?php #print_r($test); ?>
</div>

<div id="test">
</div>
    </div>

</body>
</html>
