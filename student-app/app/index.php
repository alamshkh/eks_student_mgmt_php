<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #333;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Welcome to the Student Management API</h1>
    <p>Click the buttons below to perform different actions.</p>

    <form action="fetch_all_students.php" method="get">
        <button type="submit">Fetch All Students</button>
    </form>

    <form action="add-student.php" method="get">
        <button type="submit">Add Student</button>
    </form>

    <form action="fetch_studentid.php" method="get">
        <label for="studentid">Enter Student ID:</label>
        <input type="text" name="studentid" id="studentid" required>
        <button type="submit">Fetch Student by ID</button>
    </form>

</body>
</html>
