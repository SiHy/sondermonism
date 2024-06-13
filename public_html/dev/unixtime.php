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
        <link rel= "stylesheet" href= "/standardstyle.css">
        <title>
            unixtime :: dev :: sonder &#x0298; monism
        </title>
    </head>
    <body>
        <h1>
            <a href="https://www.sondermonism.com">sonder &#x0298; monism</a>
        </h1>
        <h2>
            <a href="https://www.sondermonism.com/dev">dev</a> :: unix time
        </h2>
        <h3>
            aka seconds passed since 00:00:00 UTC, 01-01-1970:
        </h3>
        <?php
        echo sprintf('%.2f', round(microtime(true), 2));
        ?>
        <br>
        <br>
        <pre>
            1 millisecond =======        0.001
            1 centisecond =======        0.01
            1 decisecond ========        0.1
            1 second ============        1
            1 minute ============       60
            1 hour ==============     3600
            1 day ===============    86400
            1 week ==============   604800
            1 month(30.44 days) =  2629743
            1 year(365.24 days) = 31556926
        </pre>
        <br>
        and your timezone is:
        <?php
        echo date_default_timezone_get();
        ?>
        <br>
        <p>
            not that it matters; unix time is universal
        </p>
    </body>
</html>