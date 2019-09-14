<?php
//sumber https://code.tutsplus.com/id/tutorials/generate-random-alphanumeric-strings-in-php--cms-32132
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

 $input = $_POST['input'];
 for ($i=0; $i < $input; $i++) { 
     echo generate_string($permitted_chars, 32) . "<br/>";
 }
?>