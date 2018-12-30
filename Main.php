<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* include '/Project_BLL/p_loginBLL.php';
          $p_loginBLL = new p_loginBLL();
          // $outRetVal = 0;
          //        $valueBLL = ARRAY();
          $valueBLL = $p_loginBLL->getLoginDetails('marketingUser','3051fef103f828697a9717b022b6988d');
          echo $valueBLL[0];
          echo $_SERVER["SERVER_NAME"]."/SOLAPP";

          $p_loginBLL = new p_loginBLL();
          //$valueBLL2 = $p_loginBLL->getSiteDetails();
          //echo $valueBLL2; */
        include '/Project_BLL/p_navigationBLL.php';
        $p_navigationBLL = new p_navigationBLL();
        $valueBLL = $p_navigationBLL->getUserPermission('marketingUser');
        foreach ($valueBLL as $data) {
            echo $data[0];
            echo $data[1];
        }
    //  echo $valueBLL;
        ?>
    </body>
</html>
