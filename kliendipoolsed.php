


<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
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


</body>
</html>