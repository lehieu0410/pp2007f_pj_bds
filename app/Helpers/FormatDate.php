<?php
if (!function_exists('formatDate')) {
    function formatDate($date, string $format = 'd/m/yy H:i:s'){
        if ($date instanceof \Carbon\Carbon) {
            return $date->format($format);
        }
        return $date;
    }
}