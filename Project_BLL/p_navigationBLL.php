<?php

/**
 * Description of p_navigationBLL
 *
 * @author Syed.Musfar
 */
include '/Project_DAL/p_navigationDAL.php';

class p_navigationBLL {

    function getUserPermission($inuserid) {
        $p_navigationDAL = new p_navigationDAL();
        $userPermissionArray = $p_navigationDAL->getUserPermission($inuserid);
        return $userPermissionArray;
    }

}
