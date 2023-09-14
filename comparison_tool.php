<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Comparison Tool | Ostad APP</h2>
        <form method="post" action="">
            <input type="number" name="numberOne" placeholder="Please Type the First Number" required><br />
            <input type="number" name="numberTwo" placeholder="Please Type the Second Number" required><br />
            <button type="submit">Which one is larger?</button> <br /></br />
            <button type="reset" class="btn btn-warning">Change the Numbers</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numberOne = $_POST["numberOne"];
                $numberTwo = $_POST["numberTwo"];
                $largerNumber = ($numberOne > $numberTwo) ? "The larger number is $numberOne" : (($numberOne < $numberTwo) ? "The larger number is $numberTwo" : "The numbers are equal.");
                echo $largerNumber;
            }
            ?>
        </div>
    </div>

</div>
<?php include "footer.php"; ?>