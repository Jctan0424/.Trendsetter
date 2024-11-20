document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('signUpPassword');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text'; // Show password
            eyeIcon.classList.remove('fa-eye'); // Change to eye-slash icon
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password'; // Hide password
            eyeIcon.classList.remove('fa-eye-slash'); // Change back to eye icon
            eyeIcon.classList.add('fa-eye');
        }
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
        const confirmPasswordField = document.getElementById('confirmPassword');
        const confirmEyeIcon = document.getElementById('confirmEyeIcon');
        
        if (confirmPasswordField.type === 'password') {
            confirmPasswordField.type = 'text'; // Show confirm password
            confirmEyeIcon.classList.remove('fa-eye'); // Change to eye-slash icon
            confirmEyeIcon.classList.add('fa-eye-slash');
        } else {
            confirmPasswordField.type = 'password'; // Hide confirm password
            confirmEyeIcon.classList.remove('fa-eye-slash'); // Change back to eye icon
            confirmEyeIcon.classList.add('fa-eye');
        }
    });
});