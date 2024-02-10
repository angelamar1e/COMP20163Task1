<?php 
    session_start();
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $pattern = '/^[A-Za-z\s\-]+$/';

        if (preg_match($pattern, $name) or empty($name)) {
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
    <link rel="stylesheet" href="index.css">
    <script src="helper_functions.js"></script>
</head>
<body class="custom-font1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="row w-75 justify-content-center" id="container_div">
                <div class="row p-0 justify-content-center" id="greeting_div">
                    <div class="row w-100 justify-content-center">
                        <h1 class="custom-font2 text-center" id="greeting">Welcome<?php echo isset($_SESSION['name']) && !empty($_SESSION['name']) ? ', ' . $_SESSION['name'] : '!'; ?></h1>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <form class="w-50 d-flex flex-row justify-content-center" action="" method="post" id="name_form">
                            <h3 class="d-flex align-items-center" id="name_label"><label for="name"> Enter your name:</label></h3>
                            <input type="text" name="name" id="name" maxlength="30" onchange="submit_form()" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
                            <span class="d-flex m-2 align-items-end" id="optional_tag">(optional)</span>
                        </form>
                    </div>
                </div>
                <div class="row p-0 justify-content-center">
                    <form action="process_form.php" method="post">
                        <div class="row w-100 flex-row justify-content-center">
                            <div class="col-2 d-flex align-items-center">
                                <img class="w-100" src="images/single-rose.png" alt="A rose">
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <img class="w-75" src="images/single-tulip.png" alt="">
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <img class="w-100" src="images/single-gerbera.png" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h4 class="text-center mt-5"><label for="fave_flower">Out of these three flowers, what's your favorite?</label></h4>
                            <select class="w-25 text-center" name="fave_flower" id="fave_flower" onchange="get_fave_flower()" required>
                                <option value="Roses">Roses</option>
                                <option value="Tulips">Tulips</option>
                                <option value="Gerbera">Gerbera</option>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <h4 class="text-center mt-5"><label for="quantity">How many of this flower would you like? (Max of 99)</label></h4>
                            <input class="w-25 text-center" type="number" name="quantity" id="quantity" oninput="restrictDigits()" min="1" max="99" required>
                        </div>
                        <div class="row justify-content-center">
                            <h4 class="text-center mt-5"><label for="arrangement">Which flower arrangement do you prefer?</label></h4>
                        </div>
                
                        <!-- to display if favorite flower is rose -->
                        <div class="row align-items-center flex-column" id="roses_arrangement">
                            <!-- arrangement images -->
                            <div class="row w-75 justify-content-center p-2" id="roses_arrangement_images">
                                <div class="col-3">
                                    <img class="w-100" src="images/roses_vertical_arrangement.jpg" alt="Roses in vertical arrangement">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/roses_biedermeier.jpg" alt="">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/roses_shower_bouquet.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- to display if favorite flower is tulip -->
                        <div class="row align-items-center flex-column" id="tulips_arrangement">
                            <!-- arrangement images -->
                            <div class="row w-75 justify-content-center p-2" id="tulips_arrangement_images">
                                <div class="col-3">
                                    <img class="w-100" src="images/tulips_vertical_arrangement.jpg" alt="Tulips in vertical arrangement">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/tulips_biedermeier.jpg" alt="">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/tulips_shower_bouquet.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- to display if favorite flower is gerbera -->
                        <div class="row align-items-center flex-column" id="gerbera_arrangement">
                            <!-- arrangement images -->
                            <div class="row w-75 justify-content-center p-2" id="gerbera_arrangement_images">
                                <div class="col-3">
                                    <img class="w-100" src="images/gerbera_vertical_arrangement.jpg" alt="Tulips in vertical arrangement">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/gerbera_biedermeier.jpg" alt="">
                                </div>
                                <div class="col-3">
                                    <img class="w-100" src="images/gerbera_shower_bouquet.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- arrangement types -->
                        <div class="row align-items-center flex-column">
                            <div class="row w-75 justify-content-center p-2" id="arrangement_types">
                                <div class="col-3 p-0 text-center">
                                    <input class="m-2" type="radio" name="arrangement" id="vertical" value="Vertical Arrangement" required>
                                    <label for="vertical">Vertical Arrangement</label>
                                </div>
                                <div class="col-3 p-0 text-center">
                                    <input class="m-2" type="radio" name="arrangement" id="biedermeier" value="Biedermeier Bouquet" required>
                                    <label for="">Biedermeier Bouquet</label>
                                </div>
                                <div class="col-3 p-0 text-center">
                                    <input class="m-2" type="radio" name="arrangement" id="cascade" value="Cascade Arrangement" required>
                                    <label for="">Cascade Arrangement</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-5 justify-content-center">
                            <input class="col-1" type="submit" value="Submit" id="submit_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>