


<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<p>Pseudo 2</p>
<button onclick="tereMaailm()">Tere Maailm</button>
<script>
    function tereMaailm() {
        alert("Tere Maailm");
    }
</script>
<br>

<p>Pseudo 3</p>
<script type="text/javascript">
    function linkAlert(node) {
        return alert("Tere Maailm");
    }
</script>
<a href="http://www.khk.ee" onclick="return linkAlert(this);">Tere Maailm</a>
<br>

<p>Pseudo 4</p>
<script type="text/javascript">
    function linkAlert(node) {
        return alert("Jaame siia");
    }
</script>
<a href="www.khk.ee" onclick="linkAlert(this); return false;">Jaame siia</a>
<br>

<p>Pseudo 5</p>
<img id="myImage" onclick="changeImage()" src="kassipilt1.jpeg" width="256" height="256">

<script>
    function changeImage() {
        var image = document.getElementById("myImage");
        if (image.src.match("koerapilt1")) {
            image.src = "kassipilt1.jpeg";
        } else {
            image.src = "koerapilt1.jpg";
        }
    }
</script>
<br>

<p>Pseudo 6</p>
<img src="kassipilt1.jpeg" id="kass">
<script>
    $("#kass").on({'click': function(){
            $("#kass").attr("src","koerapilt1.jpg");
        }
    });
</script>
<br>

<p>Pseudo 7</p>
<button id="red">Red</button>
<button id="green">Green</button>
<button id="blue">Blue</button>
<script>
    $("#red").on( "click", function() {
        $("body").css("background-color","red");
    });
    $("#green").on( "click", function() {
        $("body").css("background-color","green");
    });
    $("#blue").on( "click", function() {
        $("body").css("background-color","blue");
    });
</script>
<br>

<p>Pseudo 8</p>
<button id="col1">Red</button>
<button id="col2">Green</button>
<button id="col3">Blue</button>
<script>
        $("#col1").on( "click", function() {
            var btnCol = $(this);
        $("body").css("background-color", btnCol.text() );
    });
    $("#col2").on( "click", function() {
        var btnCol = $(this);
        $("body").css("background-color",btnCol.text());
    });
    $("#col3").on( "click", function() {
        var btnCol = $(this);
        $("body").css("background-color",btnCol.text());
    });
</script>
<br>

<p>Pseudo 9</p>
<p>$("body").contextmenu( function() {
    return false;
    });</p>
<!--
<script>
    $("body").contextmenu( function() {
        return false;
    });
</script> -->
<br>

<p>Pseudo 10</p>
<button id="clickOk">Luba parem klikk</button>
<script>
    $(document).ready(function(){
        $(this).bind("contextmenu", function(click) {
            click.preventDefault();
        });

        $("#clickOk").click(function(){
            $(document).ready(function(){
                $(this).unbind();
            });
        });
    });
</script>
<br>

<p>Pseudo 11</p>
<button>Kassipildi tegemise ja peitmise nupp</button>
<img src="kassipilt.jpeg" id="kassipilt" style="display: none" />
<script>
    $( "button" ).click(function() {
        $( "#kassipilt" ).toggle();
    });
</script>
<br>


</body>
</html>