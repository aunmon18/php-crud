<?php
function connectDB()
{
    $serverName = "127.0.0.1";
    $userName = "root";
    $userPassword = "";
    $dbName = "php_crud";

    $objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    mysqli_set_charset($objCon, "utf8");
    return $objCon;
}

function date_th($date) {
    if($date == '0000-00-00')
        return '-';

    $date_array = explode('-', $date);
    $th_date = $date_array[2] .
     '/' . $date_array[1] . '/' .
      ($date_array[0] + 543);

      return $th_date;
}

function date_en($date) {
    $date_array = explode('/', $date);
    $en_date = ($date_array[2] - 543) . '-' . 
    $date_array[1] . '-' . $date_array[0];
    return $en_date;
}