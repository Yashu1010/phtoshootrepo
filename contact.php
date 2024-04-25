<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us Form</title>
<style>
    /* Basic styling for the form */
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error {
        color: red;
    }
</style>
</head>
<body>

<form id="contactForm" action="cont.php" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <div id="nameError" class="error"></div>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <div id="emailError" class="error"></div>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
        <div id="descriptionError" class="error"></div>
    </div>
    <input type="submit" value="Submit">
</form>

<script>
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Name validation
        const nameInput = document.getElementById('name');
        const nameError = document.getElementById('nameError');
        if (!nameInput.value.trim()) {
            nameError.textContent = 'Name is required';
            isValid = false;
        } else {
            nameError.textContent = '';
        }

        // Email validation
        const emailInput = document.getElementById('email');
        const emailError = document.getElementById('emailError');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value.trim())) {
            emailError.textContent = 'Invalid email address';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        // Description validation
        const descriptionInput = document.getElementById('description');
        const descriptionError = document.getElementById('descriptionError');
        if (!descriptionInput.value.trim()) {
            descriptionError.textContent = 'Description is required';
            isValid = false;
        } else {
            descriptionError.textContent = '';
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if there are errors
        }
    });
</script>

</body>
</html>
