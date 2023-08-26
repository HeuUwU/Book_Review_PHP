
<?php
session_start();
require 'constant.php';

// require context
require_once('Context/DBContext.php');

// require models
require_once('Models/Account_Models.php');
require_once('Models/Product_Models.php');

// require controllers
require_once 'Controllers/signIn_Controller.php';

// require views
include 'views/book.php'; 
