<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $studentid = $_POST['studentid'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    // Insert student data into the database
    $query = "INSERT INTO students (studentid, name, dob, address, email, contact) VALUES ('$studentid', '$name', '$dob', '$address', '$email', '$contact')";
    if ($conn->query($query) === TRUE) {
        $message = "New student added successfully.";
    } else {
        $message = "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
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
        .message {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Add Student</h1>

    <form method="POST" action="add-student.php">
        <input type="text" name="studentid" placeholder="Student ID" required><br>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="date" name="dob" placeholder="Date of Birth" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="contact" placeholder="Contact Number" required><br>
        <button type="submit">Add Student</button>
    </form>

    <?php if (!empty($message)) { ?>
    <div class="message"><?php echo $message; ?></div>
    <?php } ?>

</body>
</html>
