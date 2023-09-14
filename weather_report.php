<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Weather Report | Ostad APP</h2>
        <form method="post" action="">
            <div class="form-group row">
                <label for="subject1" class="col-sm-2 col-form-label col-form-label-lg">
                    <h2>Today's Temperature is (&deg;C)</h2>
                </label>
                <div class="col-sm-10 col-4">
                    <input type="number" class="form-control" name="temperature" placeholder="Type the Number Only"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-6">
                    <button type="submit" class="btn btn-lg">Tell Me About Today's Weather</button>
                </div>
                <br />
                <div class="col-6">
                    <button type="reset" class="btn btn-lg">Reset the Temperature</button>
                </div>
            </div>
            <div id="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperatureData = $_POST["temperature"];
                    if (31 <= $temperatureData && 55 >= $temperatureData):
                        echo "$temperatureData" . "&deg;C ! Wow, it's really hot out there. Don't forget your sunscreen.";
                    elseif (30 > $temperatureData && 19 <= $temperatureData):
                        echo "$temperatureData" . "&deg;C is quite normal. It's sunny and pleasant.";
                    elseif (19 > $temperatureData && 11 <= $temperatureData):
                        echo "$temperatureData" . "&deg;C is not a bad one. It might rain a little. A raincoat will help.";
                    elseif (11 > $temperatureData && 7 <= $temperatureData):
                        echo "$temperatureData" . "&deg;C is quite chilly. Put on some warm clothes.";
                    elseif (7 > $temperatureData && 2 <= $temperatureData):
                        echo "$temperatureData" . "&deg;C. It's snowing outside. Don't forget your overcoat.";
                    elseif (2 > $temperatureData && -20 <= $temperatureData):
                        echo "$temperatureData" . "&deg;C. Really! It must be freezing out there.";
                    else:
                        echo "Really! That doesn't make sense.";
                    endif;
                }
                ?>

            </div>
        </form>
    </div>

</div>
<?php include "footer.php"; ?>