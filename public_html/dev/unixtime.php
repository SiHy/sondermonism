<!-- sondermonism.com -->
<!-- /dev/unixtime -->

<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8">
        <meta http-equiv="content-language" content="en-gb">
        <meta name= "viewport" content= "width= device-width, initial-scale= 1.0">
        <meta name= "description" content= "seconds passed since the start of January 1st 1970">
        <meta name= "keywords" content= "unix time, UTC, seconds passed">
        <meta name= "author" content= "SiHy">
        <link rel= "stylesheet" href= "/public_html/standardstyle.css">
        <title>
            <?php echo "unixtime " . date_default_timezone_get() . " :: dev :: sonder \u{0298} monism" ?>
        </title>
    </head>
    <body>
        <h2>
            unix time:
        </h2>
        <h3>
            (seconds passed since 01-01-1970)
        </h3>
        <?php
        /*
        1 minute = 60
        1 hour = 3600
        1 day = 86400
        1 week = 604800
        1 month(30.44 days) = 2629743
        1 year(365.24 days) = 31556926
        */
        echo sprintf('%.2f', round(microtime(true), 2))
        ?>
    </body>
</html>