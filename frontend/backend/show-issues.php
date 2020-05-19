<?php
require 'classes.php';

if (isset($_POST['IDnum'])) {
  $viewIssues = new IssueController($data_store);
  #SANITATION IF TIME SPARES
  $issues = $viewIssues->viewIssuesByHallMemberID($_POST['IDnum']);
  #$idCount = count($issues);
  #$i = 0;
?>
  <?php foreach ($issues as $issue) : ?>
    <div class="form-card">
      <!---->
      <h1>Track Issue#: <?= $issue['issueID']; ?></h1>
      <h5>Description: <?= $issue['description']; ?></h5>
      <div class="viewissue">
        <!--<h6>Issue Number:</h6>-->
        <h6>Date Logged: <?= $issue['date']; ?></h6>
        <h6>Status: <?= $issue['status']; ?></h6>
        <p id="feedback-id" style="display: hidden"></p>
        <a href="give-feedback.php">Add feedback</a>
      </div>
      <h4>Appointment Date: <?= $issue['appDate']; ?></h4>
      <h4>Appointment Time: <?= $issue['appTime']; ?></h4>
      <h2>Confirmed: <?= $issue['Confirmed']; ?></h2>
    </div>
    <!---->
  <?php endforeach; ?>
<?php
}
?>