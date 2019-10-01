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
                Please choose your major:
                <?php include("majors.php"); ?>
                <br /><input type="radio" name="major" value="Computer Science" checked> Computer Science
                <br /><input type="radio" name="major" value="Web Design and Development"> Web Design and Development
                <br /><input type="radio" name="major" value="Computer information Technology"> Computer Information and
                Technology
                <br /><input type="radio" name="major" value="Computer Engineering"> Computer Engineering
            </div>

            <div>
                Please enter any comments you have: <br />
                <textarea name="comments"></textarea>
            </div>

            <div>
                Select the place you have visited: <br/>
                <select name="places[]" multiple>
                    <option id="na" value="North America"> North America</option>
                    <option id="sa" value="South America"> South America</option>
                    <option id="eu" value="Europe"> Europe</option>
                    <option id="as" value="Asia"> Asia</option>
                    <option id="at" value="Australia"> Australia</option>
                    <option id="af" value="Africa"> Africa</option>
                    <option id="an" value="Antarctica"> Antarctica</option>
                </select>
            </div>

            <br />
            <input type="submit" value="Submit Form">
        </form>
    </div>
</body>

</html>