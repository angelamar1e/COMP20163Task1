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