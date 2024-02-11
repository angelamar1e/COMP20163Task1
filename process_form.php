<?php
include('connection.php');

session_start();

// handling form submission variables
if(isset($_POST['fave_flower']) and isset($_POST['quantity']) and isset($_POST['arrangement'])){
    
    $fave_flower = $_POST['fave_flower'];
    $qty = $_POST['quantity'];
    $arrangement = $_POST['arrangement'];
    
    // query for adding into database if name was entered
    if (isset($_SESSION['name'])){
        $name = $_SESSION['name'];
        $query = "INSERT INTO entries (name, favorite_flower, flower_quantity, preferred_arrangement) 
        VALUES ('$name','$fave_flower',$qty,'$arrangement')";
    }
    else{
        // query for adding into database if name was not entered
        $query = "INSERT INTO entries (favorite_flower, flower_quantity, preferred_arrangement) 
        VALUES ('$fave_flower',$qty,'$arrangement')";
    }
   
    $result = mysqli_query($conn, $query);

    // handle result of the query
    if ($result){ ?>
         <script>
            alert("Form submitted successfully!");
        </script>
    <?php
        session_destroy();
    }
?>

    <!--  to display previously inputted data -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yay!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="process_form.css">
    </head>
    <body class="custom-font1 vh-100">
        <div class="container-fluid vh-100">
            <div class="row justify-content-center h-75">
                <div class="row w-75 h-100 justify-content-center" id="container_div">
                    <div class="row flex-column justify-content-evenly" id="greeting_div">
                        <div class="row w-100 justify-content-center">
                            <h1 class="custom-font2 text-center" id="greeting">Yay!</h1>
                        </div>
                        <div class="row w-100 m-2 justify-content-center">
                            <img class="col-3" src="images/cat.gif" alt="GIF of a cat">
                        </div>
                        <div class="row">
                            <?php 
                            if ($arrangement == 'Biedermeier Bouquet' or $arrangement == 'Cascade Bouquet'){ ?>
                                <h3 class="text-center m-0 d-flex justify-content-center align-items-center">You want a <?php echo $arrangement ?> with <?php echo $qty ." ". $fave_flower . "."; ?></h3>
                            <?php
                            }
                            else{ ?>
                                <h3 class="text-center m-0 d-flex justify-content-center align-items-center">You want a <?php echo $arrangement ?> of <?php echo $qty ." ". $fave_flower . "."; ?></h3>
                            <?php
                            } 
                            
                            if (isset($name)){ ?>
                                <h3 class="text-center m-0 d-flex justify-content-center align-items-center">I'll manifest you receive this on Valentine's Day, <?php echo $name ?>!</h3>
                            <?php
                            }
                            else{ ?>
                                <h3 class="text-center m-0 d-flex justify-content-center align-items-center">I'll manifest you receive this on Valentine's Day!</h3>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row mt-5 d-flex justify-content-end">
                            <h3 class="w-50 text-end"><a href="index.php">Go back to the form</a></h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php
}
?>