<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <h2>Frontend-Backend Communication Test</h2>

    <form method="post" action="./process_data.php">
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" required>
        <input type="submit" value="Send">
    </form>

    <!-- Display message from PHP -->
    <p>Response from PHP: <span id="response"></span></p>

    <script>
        // Simple JavaScript to fetch PHP response and update the page
        document.querySelector('form').addEventListener('submit', async function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const response = await fetch('./process_data.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.text();
            document.getElementById('response').innerText = result;
        });
    </script>
</body>
</html>