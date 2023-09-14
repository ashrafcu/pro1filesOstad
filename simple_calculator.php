<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Simple Calculator | Ostad APP</h2>
        <form method="post" action="">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="number1"
                        placeholder="Please Type the first number here" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="number2"
                        placeholder="Please type the second number here" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <select name="calculation" class="form-select" aria-label="Default select">
                        <option selected>Please select an option from here</option>
                        <option value="add">Addition</option>
                        <option value="substract">Substraction</option>
                        <option value="multiply">Multiplication</option>
                        <option value="divide">Division</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-6">
                    <button type="submit" class="btn btn-lg">Calculate</button>
                </div>
                <br />
                <div class="col-6">
                    <button type="reset" class="btn btn-lg">Reset Numbers</button>
                </div>
            </div>
            <div id="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numOne = $_POST["number1"];
                    $numTwo = $_POST["number2"];
                    $calculate = $_POST["calculation"];

                    if ("add" == $calculate) {
                        $result = $numOne + $numTwo;
                        echo "The result is $result.";
                    } elseif ("substract" == $calculate) {
                        $result = $numOne - $numTwo;
                        echo "The result is $result.";
                    } elseif ("multiply" == $calculate) {
                        $result = $numOne * $numTwo;
                        echo "The result is $result.";
                    } elseif ("divide" == $calculate) {
                        if ($numTwo != 0) {
                            $result = $numOne / $numTwo;
                            echo "The result is $result.";
                        } else {
                            echo "The result is &#8734.";
                        }
                    } else {
                        echo "This is not a valid number. Please select the right operator from the menu.";
                    }
                }
                ?>

            </div>
        </form>
    </div>
</div>
<?php include "footer.php"; ?>