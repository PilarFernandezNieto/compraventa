!function () {
    document.addEventListener('DOMContentLoaded', function () {

        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('password-addon');
        const icon = toggleButton.querySelector('i');

        toggleButton.addEventListener('click', function () {
            // Alternar tipo
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            // Cambiar icono
            icon.classList.toggle('ri-eye-fill');
            icon.classList.toggle('ri-eye-off-fill');
        });

    });



}();
