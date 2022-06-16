<html>

<head>
    <style>
        div.form_box {
            width: 400px;
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body>

    <form method="post">
        <div class="form_box">
            <h1>Simple Ping Site</h1>
            <label for="ping">Enter IP or domain:</label>
            <input type="text" id="ping" name="ping"><br><br>
            <div><input type="submit" value="Ping!"></div>
        </div>
    </form>
    <hr>

<?php 
    if (isset($_POST['ping'])) {
        $ip = $_POST['ping'];
        $output = shell_exec("ping -c 1 ".$ip);
        echo "<pre>".$output."</pre>";
    }
?>
</body>

</html>
