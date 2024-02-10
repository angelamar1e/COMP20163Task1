function submit_form(){
    document.getElementById('name_form').submit();
}

function validate_name(){
    var nameInput = document.getElementById('name').value.trim();

    var namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(nameInput)) {
        // alert('Please enter a valid name containing only letters.');
        return false;
    }
    else{
        submit_form();
    }
}