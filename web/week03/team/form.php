<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form id="team_form" action="welcome.php" method="post">
            <h1>This is our assignment!</h1>

            <div>
                Name: <input type="text" name="firstname">
                <br />
                Email: <input type="text" name="email">
            </div>

            <div>
                Please choose your major: <br/>
                <?php include("majors.php"); ?>
            </div>

            <div>
                Please enter any comments you have: <br />
                <textarea name="comments"></textarea>
            </div>

            <div>
                Select the place you have visited: <br />
                <select name="places[]" multiple>
                    <option id="na" value="na"> North America</option>
                    <option id="sa" value="sa"> South America</option>
                    <option id="eu" value="eu"> Europe</option>
                    <option id="as" value="as"> Asia</option>
                    <option id="at" value="at"> Australia</option>
                    <option id="af" value="af"> Africa</option>
                    <option id="aq" value="aq"> Antarctica</option>
                </select>
            </div>

            <br />
            <input type="submit" value="Submit Form">
        </form>
    </div>
</body>

</html>