<?php
    function clean($string) {
        $string = str_replace(".", "-dot-pranah-", $string);
        $string = str_replace("@", "-at-the-rate-", $string);
        $string = str_replace(' ', '', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $string = str_replace("-dot-pranah-", ".", $string);
        $string = str_replace("-at-the-rate-", "@", $string);
        return str_replace("-", "", $string);  // Removes special chars. 
    }
    function cleanWithSpaces($string) {
        $string = str_replace(".", "-dot-pranah-", $string);
        $string = str_replace("@", "-at-the-rate-", $string);
        $string = str_replace(' ', '--tmincspaces--', $string);
        $string = str_replace('+', '--tmincadd--', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $string = str_replace("-dot-pranah-", ".", $string);
        $string = str_replace('--tmincadd--', '+', $string);
        $string = str_replace("-at-the-rate-", "@", $string);
        $string = str_replace("--tmincspaces--", " ", $string);  // Removes special chars. 
        $string = str_replace("--", "", $string);
        return $string;
    }
    function linient($string){
        $string = str_replace("--", "", $string);
        $string = str_replace("'", "\'", $string);
        return $string;
    }
?>
