<?php
include 'config/config.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo "<p>Message sent successfully!</p>";
  } else {
    echo "<p>Error: " . $conn->error . "</p>";
  }
}
?>
<main>
  <section>
    <h1>Contact Us</h1>
    <form method="POST" action="contact.php">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Send</button>
    </form>
  </section>
</main>
<?php include 'includes/footer.php'; ?>