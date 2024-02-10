function submit_form(){
    document.getElementById('name_form').submit();
}

function restrictDigits() {
    var input = document.getElementById('quantity');
    var maxDigits = 2; // Maximum number of digits allowed

    // Convert the input value to a string and remove leading zeros
    var inputValue = input.value.toString().replace(/^0+/, '');

    // Restrict the number of digits
    if (inputValue.length > maxDigits) {
        input.value = inputValue.slice(0, maxDigits);
    }
}

function get_fave_flower(){
    selectElement = document.getElementById('fave_flower');
    roses = document.getElementById('roses_arrangement');
    tulips = document.getElementById('tulips_arrangement');
    gerbera = document.getElementById('gerbera_arrangement');

    // Get the selected value
    var selectedValue = selectElement.value;

    if (selectedValue === 'Roses'){
        roses.style.display = 'flex';
        tulips.style.display = 'none';
        gerbera.style.display = 'none';
    }
    else if (selectedValue === 'Tulips'){
        roses.style.display = 'none';
        tulips.style.display = 'flex';
        gerbera.style.display = 'none';
    }
    else {
        roses.style.display = 'none';
        tulips.style.display = 'none';
        gerbera.style.display = 'flex';
    }
}
