<?php include "header.php"; ?>
<div class="main-wrapper">
    <div class="smaller-wrapper">
        <h2 class="masthead-brand">Even &amp; Odd Number Checker | Ostad APP</h2>
        <form method="post" action="">
            <input type="number" name="numberData" placeholder="Type a Number Here" required><br />

            <button type="submit">Is it an even or odd number?</button> <br /></br />
            <button type="reset">Reset the Number</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numberData = $_POST["numberData"];
                $numberChecker = (0 == $numberData % 2) ? "$numberData is an even number" : "$numberData is an odd number.";
                echo $numberChecker;
            }

            ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>