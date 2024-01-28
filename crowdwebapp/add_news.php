<?php
session_start();

// Check for success or error message
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p style='color: green;'>News added successfully!</p>";
} elseif (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<p style='color: red;'>Error adding news. Please try again.</p>";
}

// Rest of your admin_page.php code
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #00BCD4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #1565C0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add News</h1>
        <form action="add_news_check.php" method="post">
            <label for="newsTitle">News Title:</label>
            <input type="text" id="newsTitle" name="newsTitle" required>

            <label for="newsDesc">News Description:</label>
            <textarea id="newsDesc" name="newsDesc" required></textarea>

            <label>Date:</label>
            <input type="date" id="newsDate" name="newsDate" required>

            <button type="submit">Add News</button>
        </form>
    </div>
</body>
</html>
