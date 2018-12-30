<?php

/**
 * Description of p_loginDAL
 *
 * @author Syed.Musfar
 */
include '/Configuration/p_connect.php';

class p_loginDAL {

    function getSiteDetails() {
        $siteDetailArray = array();
        $p_connect = new p_connect();
        $fetchSiteDetails = "CALL SPGETSYSTEMDETAILS()";
        $siteDetailRecords = mysqli_fetch_assoc(mysqli_query($p_connect->getConnectionDetails(), $fetchSiteDetails));
        array_push($siteDetailArray, $siteDetailRecords["SYSTEMNAME"], $siteDetailRecords["SITETITLE"]);
        return $siteDetailArray;
    }

    function getLoginDetails($inuserid, $inpassword) {
        $loginDetailArray = array();
        $p_connect = new p_connect();
        $fetchLoginDetails = "CALL SPGETLOGINDETAILS('$inuserid','$inpassword')";
        $loginDetailRecords = mysqli_fetch_assoc(mysqli_query($p_connect->getConnectionDetails(), $fetchLoginDetails));
        array_push($loginDetailArray, $loginDetailRecords["userCount"]);
        return $loginDetailArray;
    }

}
