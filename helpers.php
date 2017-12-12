<?php

function logToConsole($str) {
    echo "<script>console.log( 'Debug Objects: " . $str . "' );</script>";
}

function dateToHTML($dt) {
    if($dt != '') {
        $arr = explode(' ', $dt);
        $times = explode(':', $arr[1]);
        $formatted_time = $times[0].':'.$times[1];
        $arr = [$arr[0],$formatted_time];
        return implode('T',$arr);
    }else {
        return 'N/A';
    }
}
