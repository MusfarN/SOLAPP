<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of p_loginBLL
 *
 * @author Syed.Musfar
 */
include '/Project_DAL/p_loginDAL.php';

class p_loginBLL {

    function getSiteDetails() {
        $p_loginDAL = new p_loginDAL();
        $siteDetailArray = $p_loginDAL->getSiteDetails();
        return $siteDetailArray;
    }

    function getLoginDetails($inuserid,$inpassword) {
        $p_loginDAL = new p_loginDAL();
        $loginDetailArray = $p_loginDAL->getLoginDetails($inuserid,$inpassword);
        return $loginDetailArray;
    }

}
