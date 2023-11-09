<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DB_NAME", "cit_moderna");
// cit_moderna
try {
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
} catch (Exception $e) {
    echo "Database Connection Error!" . $e->getMessage();
    die();
}
