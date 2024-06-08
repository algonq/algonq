<?php include 'includes/header.php'; ?>
<main>
    <h1>About Us</h1>
    <?php
    $team = [
        ["name" => "John Doe", "role" => "CEO", "image" => "images.jpeg"],
        ["name" => "Jane Smith", "role" => "CTO", "image" => "download.jpeg"],
        ["name" => "Emily Jones", "role" => "CFO", "image" => "download (1).jpeg"],
    ];
    ?>
    <h2>Our Team</h2>
    <ul class="team-list">
        <?php foreach ($team as $member): ?>
            <li>
                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>'s photo" class="team-photo">
                <div class="team-info">
                    <h3><?= $member['name'] ?></h3>
                    <p><?= $member['role'] ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>