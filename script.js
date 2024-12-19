// script.js
$(document).ready(function () {
    $('#registration-form').on('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        // Validate email format
        let email = $('#email').val();
        let emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            isValid = false;
        }

        // Validate password match
        let password = $('#password').val();
        let confirmPassword = $('#confirm-password').val();
        if (password !== confirmPassword) {
            alert('Passwords do not match.');
            isValid = false;
        }

        if (isValid) {
            $.ajax({
                url: 'process.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    $('body').html(response);
                }
            });
        }
    });
});
