<?php
    $curr_page = 'bio_contact';
    include('includes/header.php')
?>

    <div class="row top-30">
        <div class="small-12 columns">
            <img src="img/DavidRussellTalbott.jpg" alt="David Russell Talbott" class="border img-left" />
<?php
require_once('includes/recaptchalib.php');
$privatekey = "6LesYcgSAAAAAEU8cIMYf-5jTMsCpYiFb_5q4u8t";
$resp = recaptcha_check_answer (
    $privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]
);

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Please go back and try it again.<p><a href=\"javascript:history.go(-1)\">Go Back</a></p>");
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body =
"Name: $name
Email: $email
Message: $message";

    mail("pulpcore@cox.net", "Message from your website (DavidRussellTalbott.com)", "$body");
    print "<h4>Thanks for contacting me $name.</h4><p>I'll get back to you as soon as possible.</p><p>-David</p>";
}
?>
        </div>
    </div>
</div> <!-- Closes the .small-9.columns from includes/header.php -->

<?php include('includes/footer.php') ?>