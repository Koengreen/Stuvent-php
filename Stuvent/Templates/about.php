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
    <div class="about">
        <div class="about-text">
            <br>
            <h1>Over Stuvent</h1> <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus fugiat rerum aspernatur provident
                asperiores ipsam non beatae sit accusantium ratione molestias voluptates enim dolore autem, recusandae maiores
                alias maxime nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias nulla sunt
                necessitatibus commodi sequi quisquam sed, dolor corrupti fugiat eligendi consequuntur, sit, possimus
                voluptate odio. Inventore rerum fugit unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                laborum dolore fuga reprehenderit. Voluptatum excepturi laboriosam, esse id exercitationem magnam blanditiis
                quam quasi, ipsum temporibus eum. Accusamus, hic. Exercitationem, praesentium? Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Eos animi nisi harum labore vitae sint nulla, eius placeat quod molestiae.
                Consectetur quaerat, nihil mollitia quidem suscipit amet omnis voluptas nobis! Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Aut, doloribus. Asperiores, repellat, officia unde impedit laborum quasi labore
                aliquam eos, sequi quam molestias fugit rem harum nemo esse in assumenda.</p>
            <hr>
            <h2 class="w3-center">Fotos</h2>

            <div class="w3-content w3-display-container shadow-img">
                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                <img class="carrousel" src="img/img1.png" style="width:100%">
                <img class="carrousel" src="img/img2.jpg" style="width:100%">
                <img class="carrousel" src="img/opbouwen2.jpg" style="width:100%">
                <img class="carrousel" src="img/opouwen.jpg" style="width:100%">
            </div>
        </div>
    </div>
    </section>
<?php
include_once "defaults/script.php";
?>
</body>

</html>
