


<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Add your custom CSS styles here */
        .contact-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 5px rgba(10, 255, 5, 0.2);
        }
        .contact-card h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <h2>Contact Information</h2>
        <ul>
            <li>
                <strong>Phone:</strong>
                <a href="tel:+917339017111">733-901-7111</a><br>
                <button onclick="copyPhoneNumber()">Copy</button>
            </li><br><br>
            <li>
                <strong>Email:</strong>
                <a href="mailto:info@example.com">snega0606@gmail.com</a><br>
                <button onclick="sendEmail()">Open in Gmail</button>
            </li><br><br>
            <li>
                <strong>Address:</strong>
                123 College Street,chennai, India<br>
                <a href="https://www.google.com/maps?q=123+College+Street+City+Country" target="_blank">View on Map</a>
            </li>
        </ul>
        <button onclick="goBack()" style="background-color: #333; color: white; padding: 10px 20px; border: none; cursor: pointer;">Back</button>

    </div>
    

    <script>
        function copyPhoneNumber() {
            var phoneNumber = '123-456-7890'; // Replace with the actual phone number
            var tempInput = document.createElement('input');
            tempInput.value = phoneNumber;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Phone number copied: ' + phoneNumber);
        }

        function sendEmail() {
            var email = 'info@example.com'; // Replace with the actual email address
            window.location.href = 'mailto:' + email;
        }
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
