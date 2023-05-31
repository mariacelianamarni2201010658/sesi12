<?php
    $dta["NIM"] = "1122334455";
    $dta["NAMA"] = "Intan tunti";
    $dta["ALAMAT"] = "Manggarai";
    $dta["TGL_LAHIR"] = "15 februari";
    $dta["JKEL"] = "P";
    $dta["HOBI"] = "Begadang";


    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);