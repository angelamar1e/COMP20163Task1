<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
    <div id="form_div">
        <form action="" id="flower_survey_form" class="flower_survey_form">
            <label for="Name">Enter your name: </label>
            <input type="text" class="form_fields">
            <br>
            <label for="flower_types">Which flower is your favorite out of these three?</label>
            <select name="flower_types" id="flower_types">
                <option value=""></option>
                <option value=""></option>
            </select><br>
            <label for="flower_quantity">How many of this flower would you like?</label>
            <input type="number" class="form_fields"><br>

            <label for="arrangement_types">Select your preferred flower arrangement:</label>
            <!-- arrangement types radio group if roses is chosen -->
            <div id="arrangement_types_roses">
                <div id="arrangement_type_images">
                    <img src="images/roses_vertical_arrangement.jpg" alt="" class="arrangement_type_image">
                    <img src="images/roses_biedermeier.jpg" alt="" class="arrangement_type_image">
                    <img src="images/roses_shower_bouquet.jpg" alt="" class="arrangement_type_image">
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>