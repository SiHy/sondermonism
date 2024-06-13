<!-- sondermonism.com -->
<!-- /dev/_unixtime -->
<!-- no frills unix time return -->

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