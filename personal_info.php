<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Personal Information | Ostad APP</h2>
            <div class="personal-info-text">
                <?php
                $name = "Ashraf Ahmed";
                $age = 36;
                $country = "Bangladesh";
                $profession = "teacher";
                $briefIntro = "I am from Moulvibazar Sadar, Moulvibazar. I live with my parents. I am fond of online contents. I write blogs using WordPress CMS and also edit videos. I use online contents to a great extent to connect with my students.";

                echo "My name is {$name} and I am {$age} at the moment. I am from {$country} and I love my country a lot. I am a {$profession} now but I fell in love with codes years ago. {$briefIntro}";
                ?>
            </div>
    </div>
</div>


<?php include "footer.php"; ?>