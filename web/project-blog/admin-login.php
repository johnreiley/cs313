<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'components/inject-head.php' ?>
    <title>Sign in</title>
</head>

<body>
    <main>
        <div class="content-container login-container">
            <form class="fancy-form login-form" method="post" action="actions/sign-in.php">
                <h2>Admin Portal</h2>
                <div class="break"></div>
                <div class="fancy-input">
                    <input type="username" id="name" name="name" required>
                    <div class="fancy-input-txt">username</div>
                </div>
                <div class="break"></div>
                <div class="fancy-input">
                    <input type="password" id="email" name="email" required>
                    <div class="fancy-input-txt">password</div>
                </div>
                <div class="break"></div>
                <div class="fancy-btn">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>