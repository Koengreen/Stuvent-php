<!DOCTYPE html>
<html lang="en">

<?php
include_once "defaults/head.php";
?>

<body>
<?php
include_once "defaults/jumbotron.php";
?>
<!--Hier is de nav bar-->
<?php
include_once "defaults/nav-bar.php";
?>




    <div class="register">
        <form class="form-group">
            <br>
            <h2>Inloggen</h2>
            <hr>



            <div class="form-group login">
                <label for="email_address">Studentnummer</label>
                <input type="email" class="form-control" id="email_addr" placeholder="Email address" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group login">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" placeholder="Wachtwoord"
                       required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <span class="help-block"></span>
            </div>

            <br>

            <button class="btn btn-lg btn-primary btn-block login" type="submit">Log in</button>
        </form>

    </div>


<?php
include_once "defaults/script.php";
?>
</body>

</html>