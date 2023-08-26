<?php
    require '../../../constant.php';
    //require Context
    require_once DIR . '\Context/DBContext.php';
    
    //require Models            
    require_once DIR . '\Models\Category_Modes.php';

    //require Controller
    require_once DIR . '\Controllers\admin_site\editCategory_Controller.php';

    //require Views
    include DIR . '\views\admin_site\category\edit.php';


