<?php
    $curr_page = 'bio_contact';
    include('includes/header.php')
?>

    <div class="row top-30">
        <div class="small-12 columns">
            <img src="img/DavidRussellTalbott.jpg" alt="David Russell Talbott" class="border img-left" />
<?php
$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body =
"Name: $name
Email: $email
Message: $message";

    mail("pulpcore@cox.net", "Message from your website (DavidRussellTalbott.com)", "$body");
    print "<h4>Thanks for contacting me $name.</h4><p>I'll get back to you as soon as possible.</p><p>-David</p>";
?>
        </div>
    </div>
</div> <!-- Closes the .small-9.columns from includes/header.php -->

<?php include('includes/footer.php') ?>
