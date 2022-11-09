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



    <!--Hier beginnen de events-->
    <section id="events">
        <div class="register">
            <form class="form-group">
                <br>
                <h2>Registreren</h2>
                <hr>
                <div class="form-group">
                    <label for="Course">Opleiding</label><br>
                    <input type="radio" name="fav_color" value="Red">Travel
                    <input type="radio" name="fav_color" value="Blue" checked>Evenementen
                    <input type="radio" name="fav_color" value="Yellow">Dapa
                    <input type="radio" name="fav_color" value="Yellow">leisure
                </div>
                <br>

                <div class="form-group">
                    <label for="phone_number">Studenten nummer</label>
                    <input type="tel" class="form-control" id="phone_number" placeholder="1234567891">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="first_name">Voornaam</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" required autofocus
                           autocomplete="on">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="last_name">Achternaam</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name" required autofocus
                           autocomplete="on">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="email_address">E-mailadres</label>
                    <input type="email" class="form-control" id="email_addr" placeholder="Email address" required>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="email_address_confirm">E-mailadres bevestigen</label>
                    <input type="email" class="form-control" id="email_address_confirm" placeholder="Confirm email address"
                           required autocomplete="off">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="email_address_confirm">Wachtwoord</label>
                    <input type="password" class="form-control" id="email_address_confirm" placeholder="Wachtwoord"
                           required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <span class="help-block"></span>
                </div>


                <br>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Account aanmaken</button>
            </form>

        </div>




    </section>
<?php
include_once "defaults/script.php";
?>
</body>

</html>