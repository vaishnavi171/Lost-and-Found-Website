<html>
    <head>
        <script type="text/javascript" src="autocomplete.js"></script>
    </head>
    <body>
        <p><b>Type the name</b></p>
        <form method="POST" action="index.php">
            <p><input type="text" size="40" id="txtHint" onkeyup="showName(this.value)"></p>
        </form>
        <p>Matches: <span id="txtName"></span></p>
    </body>

</html>