<!-- process.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Confirmation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Application Submitted</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="form.html">Application Form</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = htmlspecialchars($_POST['name']);
          $email = htmlspecialchars($_POST['email']);
          $phone = htmlspecialchars($_POST['phone']);
          $address = htmlspecialchars($_POST['address']);
          echo "<h2>Thank You, $name!</h2>";
          echo "<p>Your application has been submitted successfully.</p>";
          echo "<ul>";
          echo "<li><strong>Email:</strong> $email</li>";
          echo "<li><strong>Phone:</strong> $phone</li>";
          echo "<li><strong>Address:</strong> $address</li>";
          echo "</ul>";
      } else {
          echo "<p>Error: No data received.</p>";
      }
    ?>
  </main>
  <footer>
    <p>&copy; 2024 Online Application System</p>
  </footer>
</body>
</html>
