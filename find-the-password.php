<?php

$password = readline('Type the correct password here (Hey! It\'s not admin123 ;) ): ');

echo PHP_EOL . PHP_EOL;

$hash = password_hash('admin123', PASSWORD_DEFAULT);

if(password_verify($password, $hash)) {
    echo 'Congratulations! You\'ve discovered the password' . PHP_EOL;
    echo 'The correct password is: ' . $password . PHP_EOL;
    echo 'The password hash is: ' . $hash . PHP_EOL;
} else {
    echo 'WRONG PASSWORD! TRY admin123';
}

