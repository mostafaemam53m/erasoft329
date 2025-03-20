<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = trim($_POST["name"]);
    $pass  = $_POST["password"];
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $phone = preg_replace('/[^0-9]/', '', $_POST["phone"]); // Remove non-numeric characters

    $name  = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $pass  = htmlspecialchars($pass, ENT_QUOTES);

    if (!$email) {
        echo "<h2>Please enter a valid email</h2>";
    } elseif (strlen($name) < 2) {
        echo "<h2>Name must be at least 2 characters long</h2>";
    } elseif (strlen($pass) < 6 || !preg_match('/[a-z]/', $pass) || !preg_match('/[0-9]/', $pass) || !preg_match('/[A-Z]/', $pass)) {
        echo "<h2>Password must be at least 6 characters and include a mix of uppercase, lowercase, and numbers</h2>";
    } elseif (!ctype_digit($phone) || strlen($phone) < 8) {
        echo "<h2>Please enter a valid phone number</h2>";
    } else {
        function saveData($name, $email, $pass, $phone) {
            $hashedPass = password_hash($pass, PASSWORD_BCRYPT); // Secure password hashing
            $mydata = "$name,$email,$hashedPass,$phone\n";
            return file_put_contents("regdata.txt", $mydata, FILE_APPEND);
        }

        saveData($name, $email, $pass, $phone);
        echo "<h2>Registration successful!</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password (6+ chars)" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <button type="submit">Register</button>
        </form>
    </div>

    <div class="form-container">
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Password (Hashed)</th>
                <th>Phone Number</th>
            </tr>
            <?php
            if (file_exists("regdata.txt")) {
                $dataFile = file("regdata.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($dataFile as $line) {
                    $data = explode(",", $line);
                    echo "<tr>";
                    foreach ($data as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
