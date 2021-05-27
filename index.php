<?php
require_once('./src/BasicCryptoAlgebra.php');
if (isset($_GET['num1']) && $_GET['num2'] && $_GET['algo']) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $algo = $_GET['algo'];
} else {
    $num1 = 77;
    $num2 = 411;
    $algo = "inverse";
}
switch ($algo) {
    case "gcd":
        $result = gcd((int)$num1, (int)$num2);
        break;
    case "modulo":
        $result = modulo((int)$num1, (int)$num2);
        break;
    case "inverse":
        $result = mult_inv($num1, $num2);
        break;
    default:
        echo "hello";
        break;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Basic Crypto Algebra | Modulo of Two numbers | Greatest Common Divisor (GCD) of Two Numbers!|Inverse of two numbers</title>
</head>

<body>
    <div class="container">
        <h1>Finding Modulo/GCD/Multiplicative Inverse</h1>
        <form>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput1" placeholder="-1023" name="num1" value="<?php echo $num1; ?>">
                        <label for="floatingInput">Number 1</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput2" placeholder="12345" name="num2" value="<?php echo $num2; ?>">
                        <label for="floatingInput2">Number 2</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="algo">
                        <option disabled>Select function to perform</option>
                        <option <?php if ($algo == 'gcd') echo 'selected'; ?> value="gcd">Greatest Common Divisor</option>
                        <option <?php if ($algo == 'modulo') echo 'selected'; ?> value="modulo">Modulo of two numbers</option>
                        <option <?php if ($algo == 'inverse') echo 'selected'; ?> value="inverse">Multiplicative inverse of a number</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary right">Calculate</button>

        </form>
        <div class="">
            <?php
                echo 'The '.$algo.' of '.$num1.' and '.$num2.' is '.$result.'';
            ?>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>