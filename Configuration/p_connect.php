<?php
class p_connect {

    function getConnectionDetails() {
        $user = "_usersolapp";
        $password_key = "YfvVwsXdnVuxLSLPS57hEb3LaCN6xym6LcshDwWCfHucXMGmtcbxxvSh2zXHbrAA";
        $database = "_dbsolapp";
        $host = "localhost";
        $connect = mysqli_connect($host, $user, $password_key, $database);
        if (!$connect) {
            echo "Database Error" . mysqli_error();
        }
        return $connect;
    }

}
