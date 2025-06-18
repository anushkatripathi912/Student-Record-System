function validateForm() {
            const name = document.getElementById('name').value.trim();
            const age = parseInt(document.getElementById('age').value.trim());
            const email = document.getElementById('email').value.trim();
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');

            errorMessage.innerText = '';
            successMessage.style.display = 'none';

            if (name.length < 3) {
                errorMessage.innerText = 'Name must be at least 3 characters long.';
                return false;
            }

            if (isNaN(age) || age < 1 || age > 100) {
                errorMessage.innerText = 'Please enter a valid age between 1 and 100.';
                return false;
            }

            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                errorMessage.innerText = 'Please enter a valid email address.';
                return false;
            }

            // Show success message (can be removed if server handles it)
            successMessage.style.display = 'block';

            // Allow form to submit to PHP
            return true;
        }

