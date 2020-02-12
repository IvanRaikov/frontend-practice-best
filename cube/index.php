<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css">

        <script src="bootstrap.js"></script>
    </head>
    <body>
        <div class="wrap">
            <div id="cube">
                <div class="side" id="side1"><i class="fa fa-female"></i></div>
                <div class="side" id="side2"><i class="fa fa-sun-o"></i></div>
                <div class="side" id="side3"><i class="fa fa-beer"></i></div>
                <div class="side" id="side4"><i class="fa fa-bed"></i></div>
                <div class="side" id="side5"><i class="fa fa-wifi"></i></div>
                <div class="side" id="side6"><i class="fa fa-gamepad"></i></div>
            </div>
        </div>
    </body>
    <script src='/jquery.js'></script>
    <script>
        $(document).mousemove(function(e){
            $('#cube').css('transform', 'rotateX(-'+e.pageY+'deg) rotateY(+'+e.pageX+'deg)');
            });
    </script>
</html>