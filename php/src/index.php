<?php

    $host = 'pg_container';
    $dbname = 'POSTGRES_DB';
    $user = 'POSTGRES_USER';
    $pass = 'POSTGRES_PASSWORD';

    $db_handle = pg_connect("host=$host dbname=$dbname user=$user password=$pass");

    if ($db_handle) {

    echo 'Connection attempt succeeded.';

    } else {

    echo 'Connection attempt failed.';

    }

    pg_close($db_handle);

?>