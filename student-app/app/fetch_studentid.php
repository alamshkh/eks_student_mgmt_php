<?php
include 'db.php';

$student = null;
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['studentid'])) {
    $studentid = $_GET['studentid'];

    // Fetch student by ID
    $query = "SELECT * FROM students WHERE studentid = '$studentid'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        $message = "No student found with ID $studentid.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Student by ID</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input {
            padding: 10px;
            margin: 10px;
            width: 300px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        .message, .student-details {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Fetch Student by ID</h1>

    <form method="GET" action="fetch_studentid.php">
        <input type="text" name="studentid" placeholder="Enter Student ID" required>
        <button type="submit">Fetch Student</button>
    </form>

    <?php if (!empty($message)) { ?>
    <div class="message"><?php echo $message; ?></div>
    <?php } ?>

    <?php if ($student) { ?>
    <div class="student-details">
        <p><strong>Student ID:</strong> <?php echo $student['studentid']; ?></p>
        <p><strong>Name:</strong> <?php echo $student['name']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $student['dob']; ?></p>
        <p><strong>Address:</strong> <?php echo $student['address']; ?></p>
        <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
        <p><strong>Contact:</strong> <?php echo $student['contact']; ?></p>
    </div>
    <?php } ?>

</body>
</html>
