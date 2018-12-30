<?php

/**
 * Description of p_navigationDAL
 *
 * @author Syed.Musfar
 */
include '/Configuration/p_connect.php';

class p_navigationDAL {

    function getUserPermission($inuserid) {
        $userPermissionArray = array();
        $p_connect = new p_connect();
        $fetchUserPermissionDetails = "CALL SPGETUSERPERMISSIONS('$inuserid')";
        $sqlQuery = mysqli_query($p_connect->getConnectionDetails(), $fetchUserPermissionDetails);
        while ($userPermssionRecords = mysqli_fetch_assoc($sqlQuery)) {
            array_push($userPermissionArray, array($userPermssionRecords["DISPLAYNAME"], $userPermssionRecords["PAGEURL"]));
        }
        return $userPermissionArray;
    }

}
