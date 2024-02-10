<?php 
    include('connection.php');

    if(isset($_POST['name']) and isset($_POST['fave_flower']) and isset($_POST['quantity']) and isset($_POST['arrangement'])){

    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $pattern = '/^[A-Za-z\s\-]+$/';

        if (preg_match($pattern, $name)) {
            $_SESSION['name'] = $name;
        }
        else{
            alert('Please enter a valid name.');
        }
    }

    function alert($message){
        echo '<script>
                alert("'.$message.'");
            </script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="helper_functions.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h1 id="greeting">Welcome<?php echo isset($_SESSION['name']) ? ', ' . $_SESSION['name'] : '!'; ?></h1>
            <div class="row">
                <form action="" method="post" id="name_form">
                    <label for="name">Enter your name:</label>
                    <input type="text" name="name" id="name" maxlength="30" onchange="submit_form()" required value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
                </form>
            </div>
            <div class="row">
                <form action="" method="post">
                    <label for="fave_flower">Out of these three flowers, what's your favorite?</label>
                    <select name="fave_flower" id="fave_flower">
                        <option value="Roses">Roses</option>
                        <option value="Tulips">Tulips</option>
                        <option value="Gerbera">Gerbera</option>
                    </select>
                    <label for="quantity">How many of this flower would you like?</label>
                    <input type="number" name="quantity" id="quantity" oninput="restrictDigits()" min="1" max="99">
                    <label for="arrangement">Which flower arrangement do you prefer?</label>
                    <label for=""></label>
                    <input type="radio" name="arrangement" id="">
                    <label for=""></label>
                    <input type="radio" name="arrangement" id="">
                    <label for=""></label>
                    <input type="radio" name="arrangement" id="">
                </form>
            </div>
        </div>
    </div>
</body>
</html>