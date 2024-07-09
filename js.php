<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body onload="DynamicTimer();">
        <p id="grouopa"></p>
        <script>
            document.getElementById('grouopa').innerHTML = "This is my first JS code";
        </script>
        <br><br>

        <button type="button" onclick="document.getElementById('MyImg').src='OIP.jpeg'">Turn On</button>

        <img src="OIP.jpeg" alt="" id="MyImg" style="width: 300px;">

        <button type="button" onclick="document.getElementById('MyImg').src='OIP.jpeg'">Turn Off</button>
        <br><br>
        <?php date_default_timezone_set("Africa/Nairobi"); ?>
        Static timer: <?php print date("H:i:s"); ?>
        <br>
        Dynamic timer: <span id="dtmer"></span>

        <br><br>

        <script>
            document.write(5 * 3);
        </script>

        <br><br>

        <script>
            window.alert('Your database is ready!!');
        </script>

        <br><br>
        <script>console.log('Add information here');</script>
        

        <script src="script.js"></script>
    </body>
</html>