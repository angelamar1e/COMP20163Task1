<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
            <!-- arrangement types radio group -->
            <div id="arrangement_types_div">
                <div id="vertical_radio" class="arrangement_type_div">
                    <input type="radio" name="arrangement_types" class="arrangement_types">
                    <label for="Vertical Arrangement">Vertical Arrangement</label>
                </div>
                <div id="biedermeier_radio" class="arrangement_type_div">
                    <input type="radio" name="arrangement_types" class="arrangement_types">
                    <label for="Biedermeier Bouquet">Biedermeier Bouquet</label>
                </div>
                <div id="cascade_radio" class="arrangement_type_div">
                    <input type="radio" name="arrangement_types" class="arrangement_types">
                    <label for="Cascade Arrangement">Cascade Arrangement</label>
                </div>
            </div>
        </form>
    </div>
</body>
</html>