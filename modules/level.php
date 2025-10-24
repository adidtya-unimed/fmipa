<?php
defined('FMIPA_APP') or exit('Forbidden...!');

$conn = db_mysqli();
$users = [
    ['Admin', 'admin-simmipa@unimed.ac.id', '(admin123)', 'admin'],

];

foreach ($users as $user) {
    $query = sprintf(
        "INSERT INTO user(`nama`,`username`,`password`,`role`) 
        VALUES('%s','%s','%s','%s')
    ",
        $user[0],
        $user[1],
        password_hash($user[2], PASSWORD_DEFAULT),
        $user[3]
    );
    mysqli_query($conn, $query);
}
