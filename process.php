<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    $phone = htmlspecialchars($_POST['phone']);

    if ($password === $confirm_password) {
        echo "<div style='background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); width: 80%; margin: 20px auto;'>";
        echo "<h1 style='text-align: center;'>Registration Successful</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "</div>";
    } else {
        echo "<div style='background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); width: 80%; margin: 20px auto;'>";
        echo "<h1 style='text-align: center;'>Registration Failed</h1>";
        echo "<p>Passwords do not match. Please try again.</p>";
        echo "<a href='index.html'>Go Back</a>";
        echo "</div>";
    }
}
?>
