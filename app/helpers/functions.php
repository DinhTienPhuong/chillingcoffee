<?php
function toSlug($str){
    return $str;
}

function textShorten($text, $limit = 400)
{
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text.".....";
    return $text;
}

function currency_format($number, $suffix = ' đ') {
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . "{$suffix}";
    }
}