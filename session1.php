<?php 

// session_start();

// set session //
// $_SESSION['name'] = 'Halen';

// echo $_SESSION['name'];

// remove session
// session_destroy();

// $_SESSION['counter'] = $_SESSION['counter'] ?? 0 ;
// $_SESSION['counter']++;
// echo $_SESSION['counter'];


// .............................................//

// session_start([
//     'cookie_lifetime'=>60
// ]);

// $_SESSION['name'] = 'Foyez';

// echo $_SESSION['name'];

// session_destroy();


// name session //
session_name('myApp');

session_start([
    'cookie_lifetime' => 60
]);

$_SESSION['name'] = "Nesar Ahamed";

echo $_SESSION['name'];


