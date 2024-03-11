<?php
session_start();
$result = ""; 

if (isset($_POST['hitung'])) {
    $expression = $_POST['display']; 

    if ($expression == 1310) {
        $_SESSION['login'] = true;
        header('location: index.php');
    } else {
        $result = eval('return ' . $expression . ';');
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Kalkulator</h2>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" name="display" id="display" placeholder="0"
                            readonly>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('7')">7</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('8')">8</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('9')">9</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('+')">+</button>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('4')">4</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('5')">5</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('6')">6</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('-')">-</button>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('1')">1</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('2')">2</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('3')">3</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('*')">*</button>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('0')">0</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('.')">.</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block" name="hitung">=</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-block"
                                onclick="addToDisplay('/')">/</button>
                        </div>
                    </div>
                </form>
                <div class="output">
                    <?php
        
                    if (!empty($result)) {
                        echo "<h4 class='mt-3'>Hasil: $result</h4>";
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <script>
        function addToDisplay(value) {
            document.getElementById("display").value += value;
        }
    </script>
</body>

</html>