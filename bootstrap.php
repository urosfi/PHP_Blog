<?php
session_start();
$config =require "configure.php";
require "CLASS/Connection.Class.php";

$db=Connection::connect($config['DATABASE']);
require "CLASS/QueryBuilder.Class.php";
require "CLASS/User.Class.php";
require "CLASS/Posts.Class.php";

$user = new User($db);
$post = new Post($db);
?>