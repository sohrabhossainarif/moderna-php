<?php

function get_query_result($db_connection, $table_name, $limit = '')
{
    $query = "select * from ";
    if ($table_name) {
        $query .= "$table_name";
    }

    $query .= " where status = 1";

    if ($limit != '') {
        $query .= " limit  $limit";
    }
    // echo $query;
    $result = mysqli_query($db_connection, $query);
    return $result;
}
