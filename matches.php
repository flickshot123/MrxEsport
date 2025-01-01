<?php
include 'config/config.php';
include 'includes/header.php';

// Fetch matches from the database
$sql = "SELECT * FROM matches";
$result = $conn->query($sql);
?>
<main>
  <section>
    <h1>Upcoming Matches</h1>
    <?php if ($result->num_rows > 0): ?>
      <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
          <li><?= $row['date'] ?> - <?= $row['teams'] ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No matches scheduled.</p>
    <?php endif; ?>
  </section>
</main>
<?php include 'includes/footer.php'; ?>