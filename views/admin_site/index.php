<?php
    require '../../constant.php';
    //require Context
    require_once DIR . '\Context/DBContext.php';
    
    //require Models            
    require_once DIR . '\Models\Account_Models.php';

    //require Controller
    require_once DIR . '\Controllers\admin_site\signIn_Controller.php';

    //require Views
    include DIR . '\views\admin_site\signIn.php';

