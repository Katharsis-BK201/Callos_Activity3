<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="task2.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="task3.php"><button>View Product List</button></a>

</body>
</html>
