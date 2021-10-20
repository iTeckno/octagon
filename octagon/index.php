<?php

$wasSubmitted = $_POST['submit'];

$numberOfSides = $_POST['numberOfSides'];
$sidesValue = $_POST['sidesValue'];
$apothem = (float) $_POST['apothem'];

if ($apothem == 0) {
  $errorMessage = 'Error submitting the apothem.';
} else {
  $errorMessage = null;
}

if (isset($apothem) && isset($sidesValue) && isset($numberOfSides)) {
  $area = (($numberOfSides * $sidesValue) * $apothem) / 2;
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Area de un octágono regular</title>
</head>

<body>
  <main>
    <div>
      <h2>
        This webpage calculates the area of a regular octagon following
        this <a href='https://www.universoformulas.com/matematicas/geometria/area-poligono-regular/' target='_blank'>formula</a>.
      </h2>
      <form method='POST' action=<?php echo $_SERVER['PHP_SELF']; ?>>
        <div>
          <label for='numberOfSides'>Number of sides (N)</label>
          <input 
            id='numberOfSides' 
            type='number' 
            name='numberOfSides' 
            value='0' 
          />
        </div>

        <div>
          <label for='sidesValue'>Value of each side (L)</label>
          <input 
            id='sidesValue' 
            type='number' 
            name='sidesValue' 
            value='0' 
          />
        </div>

        <div>
          <label for='apothem'>Apothem (ap)</label>
          <input 
            id='apothem' 
            type='text' 
            name='apothem' 
            placeholder='Integer or decimal'
          />
        </div>

        <?php
        if (!isset($area)) {
          echo '<p>Click <em>"calculate"</em> to see the result!</p>';
        } else {
          echo "<p>Resultado: <strong>$area</strong></p>";
        }

        echo (isset($errorMessage) && isset($wasSubmitted)) ? "<p>$errorMessage</p>" : '';
        ?>

        <button type='submit' name='submit'>Calculate</button>
      </form>

      <p>Jesús Nava - 27266066 - N1013</p>

    </div>
  </main>
  ?>
</body>

</html>