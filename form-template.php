<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="form">
        <h2 id='sp_contact_form_heading'>Contact Us</h2>
        <form class="sp_contactForm" id="contactForm" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="hidden" name="action" value="custom_contact_form_submit">
            <?php wp_nonce_field('sp_contact_form_nonce', 'nonce'); ?>

            <button type="submit" class="submit_button">Submit</button>
        </form>

        <div id="response"></div>
    </div>
</body>

</html>