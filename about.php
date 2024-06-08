<!-- /about.php -->
<?php include 'INCLUDES/header.php'; ?>

<main>
    <h1>About Us</h1>
    <p>Welcome to ElectroByte Hub. We are dedicated to providing the best products and services to our customers.</p>
    <p>Our team works tirelessly to bring you the latest and greatest products at affordable prices.</p>
    <?php
   $team = [
    ["name" => "Kiran Pannu", "role" => "CEO"],
    ["name" => "Jashan Randhawa", "role" => "CTO"],
    ["name" => "Pawan Pannu", "role" => "CFO"],
];
?>
<h2>Our Team</h2>
<ul>
<?php foreach ($team as $member): ?>
<li><?= $member['name'] ?> - <?= $member['role'] ?></li>
<?php endforeach; ?>
</ul>
</main>
<?php include 'INCLUDES/footer.php'; ?>
   
