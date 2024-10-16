document.addEventListener('DOMContentLoaded', (event) => {
        // Get the elements
        const signUpButton = document.getElementById('signUpButton');
        const popup = document.getElementById('signupPopup');
        const closeBtn = document.querySelector('.popup .close');

        // Open the popup when the sign-up button is clicked
        signUpButton.addEventListener('click', (event) => {
            event.preventDefault();
            popup.style.display = 'block';
        });

        // Close the popup when the close button is clicked
        closeBtn.addEventListener('click', () => {
            popup.style.display = 'none';
        });

        // Close the popup when clicking outside of the popup content
        window.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    });

