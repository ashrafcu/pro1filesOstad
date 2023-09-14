<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Grade Calculator | Ostad APP</h2>
        <form method="post" action="">
            <div class="form-group row">
                <label for="subject1" class="col-sm-2 col-form-label col-form-label-lg">Subject 1 &mdash;
                    Physics</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="physicsNo" placeholder="Physics Score" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="subject2" class="col-sm-2 col-form-label col-form-label-lg">Subject 2 &mdash;
                    Chemistry</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="chemistryNo" placeholder="Chemistry Score" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="subject3" class="col-sm-2 col-form-label col-form-label-lg">Subject 3 &mdash;
                    Biology</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="biologyNo" placeholder="Biology Score" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-6">
                    <button type="submit" class="btn btn-lg">Calculate Results</button>
                </div>
                <br />
                <div class="col-6">
                    <button type="reset" class="btn btn-lg">Reset Scores</button>
                </div>
            </div>
            <div id="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $physicsScore = $_POST["physicsNo"];
                    $chemistryScore = $_POST["chemistryNo"];
                    $biologyScore = $_POST["biologyNo"];
                    $avgNumber = ($physicsScore + $chemistryScore + $biologyScore) / 3;
                    if (100 >= $avgNumber && 80 <= $avgNumber):
                        echo "You got A+ with " . $avgNumber . "% score.";
                    elseif (80 > $avgNumber && 70 <= $avgNumber):
                        echo "You got A- with " . $avgNumber . "% score.";
                    elseif (70 > $avgNumber && 60 <= $avgNumber):
                        echo "You got A- with " . $avgNumber . "% score.";
                    elseif (60 > $avgNumber && 50 <= $avgNumber):
                        echo "You got B with " . $avgNumber . "% score.";
                    elseif (50 > $avgNumber && 40 <= $avgNumber):
                        echo "You got C with " . $avgNumber . "% score.";
                    elseif (40 > $avgNumber && 33 <= $avgNumber):
                        echo "You got D with " . $avgNumber . "% score.";
                    elseif (100 < $avgNumber):
                        echo "Invalid Score. Please input numbers smaller than 100.";
                    else:
                        echo "You got F with " . $avgNumber . "% score.";
                    endif;
                }
                ?>
            </div>
        </form>
    </div>

</div>


<?php include "footer.php"; ?>