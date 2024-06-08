<?php include 'includes/header.php'; ?>
<main>
    <h1>Contact Us</h1>
    <form action="contact_submit.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>