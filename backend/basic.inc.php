<?php


function getmonth($timestamp) {
    if(date("j", strtotime($timestamp))>15) {
        return date("F Y", strtotime($timestamp . " +18 day"));
    }
    else {
        return date("F Y", strtotime($timestamp));
    }
}