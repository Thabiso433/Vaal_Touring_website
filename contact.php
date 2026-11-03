<?php


require_once 'includes/language.php';

$pageTitle = t('contact', $text, $lang);


$name = '';
$email = '';
$message = '';
$feedback = '';
$feedbackClass = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

   
    if ($name !== '' && $message !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $feedback = t('form_success', $text, $lang);
        $feedbackClass = 'success';
       
        $name = $email = $message = '';
    } else {
        $feedback = t('form_error', $text, $lang);
        $feedbackClass = 'error';
    }
}

require_once 'includes/header.php';
?>

    
    <section class="page-banner">
        <h1><?php echo t('contact_title', $text, $lang); ?></h1>
    </section>

    <section class="contact-grid">

        
        <div>
            <h2><?php echo t('contact_title', $text, $lang); ?></h2>
            <p><?php echo t('contact_intro', $text, $lang); ?></p>

            <?php if ($feedback !== ''): ?>
               
                <p class="form-feedback <?php echo $feedbackClass; ?>"><?php echo $feedback; ?></p>
            <?php endif; ?>

           
            <form id="contactForm" method="post" action="contact.php">
                <label for="name"><?php echo t('form_name', $text, $lang); ?></label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

                <label for="email"><?php echo t('form_email', $text, $lang); ?></label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

                <label for="message"><?php echo t('form_message', $text, $lang); ?></label>
                <textarea id="message" name="message" rows="5"><?php echo htmlspecialchars($message); ?></textarea>

                <button type="submit" class="btn"><?php echo t('form_send', $text, $lang); ?></button>
            </form>
        </div>

        
        <div class="contact-details">
            <h2><?php echo t('footer_contact', $text, $lang); ?></h2>
            <p><strong>Discover Vaal &amp; Free State (Pty) Ltd</strong></p>
            <p>Email: info@discovervaalfreestate.co.za</p>
            <p>Phone: +27 85 896 5555</p>
            <p>Address: 12 Andrew Murray, Vanderbijlpark, South Africa</p>

            <h3><?php echo t('footer_social', $text, $lang); ?></h3>
            <div class="social-links dark">
                <a href="https://facebook.com" target="_blank" rel="noopener">Facebook</a>
                <a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a>
                <a href="https://twitter.com" target="_blank" rel="noopener">Twitter</a>
            </div>
        </div>

    </section>

<?php
require_once 'includes/footer.php';
?>
