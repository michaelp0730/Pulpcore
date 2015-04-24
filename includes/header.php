<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pulpcore - The Art of David Russell Talbott</title>
    <meta name="description" content="Pulpcore - The Art of David Russell Talbott">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="row">
        <img src="img/skull.png" alt="Skull Logo - David Russell Talbott" class="skull-img" />
        <?php include("includes/sidebar.php") ?>
        <div class="small-12 medium-9 columns">
            <div class="row main-header-rows">
                <div class="tagline border small-12 columns">
                    <h1>Pulpcore:</h1>
                    <h4>The Art Of</h4>
                    <h2 class="white">David Russell Talbott</h2>
                </div>
            </div>
            <div class="row main-header-rows">
                <nav>
                    <ul>
                        <li <?php echo ($curr_page == 'home') ? 'class="current"' : '' ?>><a href="index.php">Home</a></li>
                        <li <?php echo ($curr_page == 'new_pulp') ? 'class="current"' : '' ?>><a href="new_pulp.php">New Pulp</a></li>
                        <li <?php echo ($curr_page == 'american_pulpcore') ? 'class="current"' : '' ?>><a href="american_pulpcore.php">American Pulpcore</a></li>
                        <li <?php echo ($curr_page == 'hollywood_pulpcore') ? 'class="current"' : '' ?>><a href="hollywood_pulpcore.php">Hollywood Pulpcore</a></li>
                        <li <?php echo ($curr_page == 'bio_contact') ? 'class="current"' : '' ?>><a href="bio_contact.php">Bio/Contact</a></li>
                    </ul>
                </nav>
            </div>