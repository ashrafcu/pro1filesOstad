<?php include "header.php"; ?>
<div class="main-wrapper">
  <div class="smaller-wrapper">
    <h2 class="masthead-brand">Temperature Converter | Ostad APP</h2>
    <form method="post" action="">
      <input type="number" name="tempRecord" placeholder="Please Put in the Temperature" required><br />
      <select name="operation">
        <option value="celsius">Celsius &rarr; Fahrenheit</option>
        <option value="fahrenheit">Fahrenheit &rarr; Celsius</option>
      </select><br />
      <button type="submit">Convert</button><br /><br />
      <button type="reset">Input Again</button>
      <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $tempRecord = $_POST["tempRecord"];
          $operation = $_POST["operation"];

          switch ($operation) {
            case "celsius":
              $result = sprintf("%.2f", (($tempRecord * (9 / 5)) + 32));
              echo "Temperature in Fahrenheit Scale is {$result}&deg;F";
              break;
            case "fahrenheit":
              $result = sprintf("%.2f", (($tempRecord - 32) * (5 / 9)));
              echo "Temperature in Celsius Scale is {$result}&deg;C";
              break;
          }
        }
        ?>

      </div>

    </form>
  </div>
</div>
<?php include "footer.php"; ?>