<?php

function area_circle($r){
    $r_square = $r ** 2;
    $area = 3.142 * $r_square;
    return $area;
};

// echo area_circle(3);