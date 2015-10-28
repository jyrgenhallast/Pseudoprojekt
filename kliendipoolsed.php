


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
<img id="myImage" onclick="changeImage()" src="kassipilt.jpeg" width="256" height="256">

<script>
    function changeImage() {
        var image = document.getElementById("myImage");
        if (image.src.match("koerapilt")) {
            image.src = "kassipilt.jpeg";
        } else {
            image.src = "koerapilt.jpg";
        }
    }
</script>
<br>

<p>Pseudo 6</p>
<img src="kassipilt.jpeg" id="kass">
<script>
    $("#kass").on({'click': function(){
            $("#kass").attr("src","koerapilt.jpg");
        }
    });
</script>
<br>

</body>
</html>