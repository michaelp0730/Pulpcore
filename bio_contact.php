<?php
    $curr_page = 'bio_contact';
    include('includes/header.php')
?>

 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>

    <div class="row top-30">
        <div class="small-12 columns">
            <img src="img/DavidRussellTalbott.jpg" alt="David Russell Talbott" class="border img-left" />
            <p>David Russell Talbott's art harkens back to the golden age of pulp illustration. Characters reminiscent of those in hardboiled crime fiction fill his one panel stories; boxers, con-artists, hit-men, and b-movie scream queens. His ongoing American Pulpcore series examines the relationship between society and the media during 1940's and 1950's.</p>
            <p>Talbott has exhibited across the United States and Europe and has been published internationally. His artwork has been seen in <a href="http://www.juxtapoz.com/" target="_blank">JUXTAPOZ,</a> <a href="http://www.sleek-mag.com/" target="_blank">Sleek Magazine,</a> &amp; <a href="http://www.sdcitybeat.com/sandiego/" target="_blank">San Diego Citybeat.</a></p>
            <p>To contact David, please complete the form below and he will get back to you as soon as possible.</p>
        </div>
    </div>
    <div class="row top-30">
        <div class="small-10 small-offset-1 medium-9 medium-offset-1 columns">
            <h3>Contact David Russell Talbott</h3>
            <form id="contact-form" method="post" action="process.php" data-abide>
                <div class="row name-field">
                    <label for="name">Your Name: <small>required</small>
                        <input id="name" type="text" name="name" required pattern="[a-zA-Z]+" />
                    </label>
                    <small class="error">Please enter your name.</small>
                </div>
                <div class="row email-field">
                    <label for="email">Your Email: <small>required</small>
                        <input id="email" type="text" name="email" required />
                    </label>
                    <small class="error">Please enter your email address.</small>
                </div>
                <div class="row">
                    <label for="message">Message: <small>required</small>
                        <textarea id="message" name="message" required></textarea>
                    </label>
                    <small class="error">Please include a message.</small>
                </div>
                <div class="row top-30">
                    <button type="submit" id="contact-submit" class="button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> <!-- Closes the .small-9.columns from includes/header.php -->

<?php include('includes/footer.php') ?>
