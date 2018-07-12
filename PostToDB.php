<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
//echo $p;
if (isset($_POST["Partner"]))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $PartnerDB = $_POST["Partner"];
    $ProjectDB = $_POST["Project"];
    $RemarksDB = $_POST["Remarks"];


    $insert = "INSERT INTO `editing_project` (`Partner`,`Project`,  `Remarks`) 
               VALUES ('$PartnerDB','$ProjectDB', '$RemarksDB')";

    if ($conn->query($insert) === True)
    {
        echo 'Project added successfully';
    }
}

if (isset($_POST["AddWONo"]))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    session_start();  //Starting the session so can fetch the value of session array
    $p = $_SESSION["SELECTED_PRJ"];
    $AddWONoDB = $_POST["AddWONo"];
    $AddATANumberDB = $_POST["AddATANumber"];
    $AddOwnerDB = $_POST["AddOwner"];
    $AddWOAdatepickerDB = $_POST["AddWOAdatepicker"];
    $AddSFCKPdatepickerDB = $_POST["AddSFCKPdatepicker"];
    $AddPRDB = $_POST["AddPR"];
    $AddPRQACPdatepickerDB = $_POST["AddPRQACPdatepicker"];
    $AddIRDB = $_POST["AddIR"];
    $AddIRQACPdatepickerDB = $_POST["AddIRQACPdatepicker"];
    $SelectedProject = $_POST["SelectedProject"];
    $name = $_SESSION["emp_name"];
    $ManualDB = $_POST["Manual"];
    $DescriptionTitleDB = $_POST["DescriptionTitle"];
    $TypeofWorkDB = $_POST["TypeofWork"];
    $CustomerDeliveryDateDB = $_POST["CustomerDeliveryDate"];
    $Target = $_POST["AddTarget"];
    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$AddOwnerDB'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    $IRID = '';
    $PRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["Emp_Id"];
    }

    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$AddPRDB'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["Emp_Id"];
    }

    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$AddIRDB'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $IRID = $row["Emp_Id"];
    }
    $insert = "INSERT INTO `associated_wos` (`Project`, `WO No`, `ATA Number`, `Owner`, `WO Allotted date`, `SFCK Date- Planned`, 
                                            `Peer Reviewer`, `Peer QA Completion Date- Planned`, `Internal Reviewer`, 
                                            `Internal QA Completion Date- Planned` , `OID` , `PRID`,`IRID` , `Manual`,
                                            `Description`, `Type of Work`, `Customer Delivery Date` , `Target%`) VALUES
                                             ('$SelectedProject', '$AddWONoDB', '$AddATANumberDB', '$AddOwnerDB', 
                                             '$AddWOAdatepickerDB', '$AddSFCKPdatepickerDB', '$AddPRDB', 
                                             '$AddPRQACPdatepickerDB', '$AddIRDB', '$AddIRQACPdatepickerDB' , '$OID' , 
                                             '$PRID', '$IRID', '$ManualDB','$DescriptionTitleDB', '$TypeofWorkDB', 
                                             '$CustomerDeliveryDateDB' , '$Target')";
    //echo $insert;


    if ($conn->query($insert) === True)
    {
        echo 'Work Order added successfully';
    }
}
// Edit WO Function
if (isset($_POST["EditWONo"]))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    session_start();  //Starting the session so can fetch the value of session array
    $p = $_SESSION["SELECTED_PRJ"];
    $EditWONoDB = $_POST["EditWONo"];
    $EditATANumberDB = $_POST["EditATANumber"];
    $EditOwnerDB = $_POST["EditOwner"];
    $EditWOAdatepickerDB = $_POST["EditWOAdatepicker"];
    $EditSFCKPdatepickerDB = $_POST["EditSFCKPdatepicker"];
    $EditPRDB = $_POST["EditPR"];
    $EditPRQACPdatepickerDB = $_POST["EditPRQACPdatepicker"];
    $EditIRDB = $_POST["EditIR"];
    $EditIRQACPdatepickerDB = $_POST["EditIRQACPdatepicker"];
    //$SelectedProject = $_POST["SelectedProject"];
    $SelectedWO = $_POST["SelectedWO"];
    $EditManual = $_POST["EditManual"];
    $EditTarget = $_POST["EditTarget"];
    $EditDescriptionTitle = $_POST["EditDescriptionTitle"];
    $EditTypeofWork = $_POST["EditTypeofWork"];
    $EditCustomerDeliveryDate = $_POST["EditCustomerDeliveryDate"];
    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$EditOwnerDB'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    $PRID = '';
    $IRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["Emp_Id"];
    }

    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$EditPRDB'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["Emp_Id"];
    }

    $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$EditIRDB'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $IRID = $row["Emp_Id"];
    }
    $update = "UPDATE `associated_wos` SET
                          `WO No` = '$EditWONoDB' ,
                          `ATA Number` = '$EditATANumberDB' , 
                          `Owner` = '$EditOwnerDB' ,
                          `WO Allotted date` = '$EditWOAdatepickerDB' ,
                          `SFCK Date- Planned` = '$EditSFCKPdatepickerDB' ,
                          `Peer Reviewer` = '$EditPRDB' ,
                          `Peer QA Completion Date- Planned` = '$EditPRQACPdatepickerDB' ,
                          `Internal Reviewer` = '$EditIRDB' ,
                          `Internal QA Completion Date- Planned` = '$EditIRQACPdatepickerDB',
                          `Manual` = '$EditManual' ,
                          `Target%` = '$EditTarget' ,
                          `Description` = '$EditDescriptionTitle',
                          `Type of Work` = '$EditTypeofWork' ,
                          `Customer Delivery Date` = '$EditCustomerDeliveryDate',
                          `OID` = '$OID',
                          `PRID` ='$PRID' ,
                          `IRID` = '$IRID'
                           WHERE `ID` = '$SelectedWO'";
    //echo $update;

    if ($conn->query($update) === True)
    {
        echo 'Work Order edited successfully';
    }
}

//Edit Project
if (isset($_POST["EditPartner"]))
{
    //echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';
    //echo "Ritwik";
    session_start();  //Starting the session so can fetch the value of session array
    $p = $_SESSION["SELECTED_PRJ"];
    $EditPartnerDB = $_POST["EditPartner"];
    $EditProjectDB = $_POST["EditProject"];
    $EditRemarksDB = $_POST["EditRemarks"];
    $update = "UPDATE `editing_project` SET 
                                        `Partner` = '$EditPartnerDB',
                                        `Project` = '$EditProjectDB',
                                        `Remarks` = '$EditRemarksDB'
                                        WHERE `Project` = '$p'";
    if ($conn->query($update) === True)
    {
        echo 'Project edited successfully';
    }
}


//Accept Work Order
if (isset($_POST["AcceptWO"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `OID`,`StartDate` FROM `associated_wos` WHERE ID = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    $StartDate = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["OID"];
        $StartDate = $row["StartDate"];
    }
    if ($OID != $empid or $StartDate != '')
    {
        echo 'You can not start this Work Order now';
    }
    else
    {
        date_default_timezone_set("Asia/Kolkata");
        $GetCurrentDate = date("d/m/20y");
        $insert = "INSERT INTO `associated_wos` (`StartDate`) VALUES ('GetCurrentDate')";
        $WO_ID = $_SESSION['SELECTED_WO_ID']; //Session variable containing the value of Unique ID of selected Work Order
        $update = "UPDATE associated_wos SET StartDate = '$GetCurrentDate' WHERE id = $WO_ID";
        if ($conn->query($update) === True)
        {
            echo 'Work Order StartDate Updated Successfully';
        }
        $status = "WO Accepted";
        $statusupd = "UPDATE associated_wos SET `WO Status` = '$status' WHERE `ID` = $WO_ID";
        $conn->query($statusupd);
        $_SESSION["WOWIP"] = 1;
    }
}
if (isset($_POST["AcceptIO"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $empid = $_SESSION["user_id"];
    $IO_ID = $_SESSION["SELECTED_IO_ID"];
    $sql = "SELECT `IID`,`StartDate` FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $IID = '';
    $StartDate = '';
    while ($row = mysqli_fetch_array($result))
    {
        $IID = $row["IID"];
        $StartDate = $row["StartDate"];
    }
    if ($IID != $empid or $StartDate != '')
    {
        echo 'You can not start this Illustartion Order';
    }
    else
    {
        $Status = 'IO Accepted';
        date_default_timezone_set("Asia/Kolkata");
        $GetCurrentDate = date("d/m/20y");
        $IO_ID = $_SESSION['SELECTED_IO_ID']; //Session variable containing the value of Unique ID of selected I Order
        $update = "UPDATE `wo_raisingillustration` SET StartDate = '$GetCurrentDate',
                                                        `Status` = '$Status' 
                                                      WHERE IO_ID = $IO_ID";
        if ($conn->query($update) === True)
        {
            echo 'IO StartDate Updated Successfully';
        }
        $_SESSION["IOWIP"] = 1;
    }
}

//Add Owner Remarks
if (isset($_POST["AddOwnRem"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `OID` FROM `associated_wos` WHERE ID = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["OID"];
    }
    if ($OID != $empid)
    {
        echo 'You can not add Remark for this Work Order';
    }
    else
    {
        $WO_ID = $_SESSION['SELECTED_WO_ID']; //Session variable containing the value of Unique ID of selected Work Order
        $AddOwnerRemarkDB = $_POST["AddOwnRem"];
        //echo $AddOwnerRemarkDB;
        //echo $WO_ID;
        $update = "UPDATE `associated_wos` SET `Owner Remarks` = '$AddOwnerRemarkDB' WHERE `ID` = '$WO_ID'";

        if ($conn->query($update) === True)
        {
            echo 'Remark Added Succesfully';
        }
    }
}

if (isset($_POST["AddIlluRem"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $empid = $_SESSION["user_id"];
    $IO_ID = $_SESSION["SELECTED_IO_ID"];
    $sql = "SELECT `IID` FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $IID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $IID = $row["IID"];
    }
    if ($IID != $empid)
    {
        echo 'You can not start this Illustartion Order';
    }
    else
    {
        $IO_ID = $_SESSION["SELECTED_IO_ID"];
        $AddIlluRemarkDB = $_POST["AddIlluRem"];
        //echo $AddOwnerRemarkDB;
        //echo $WO_ID;
        $update = "UPDATE `wo_raisingillustration` SET `IlluRemarks` = '$AddIlluRemarkDB' WHERE `IO_ID` = '$IO_ID'";

        if ($conn->query($update) === True)
        {
            echo 'Illustrator Remark Added Succesfully';
        }
    }
}

//Add Illustration
if (isset($_POST["AddIllu"]))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    //echo 'ritwik';
    session_start();
    $empid = $_SESSION["user_id"];
    $name = $_SESSION["emp_name"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `OID` FROM `associated_wos` WHERE ID = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["OID"];
    }
    if ($OID != $empid)
    {
        echo 'You can not add Illustration';
    }
    else
    {
        $AddIlluDB = $_POST["AddIllu"];
        $AddIONODB = $_POST["AddIONO"];
        $AddReviewerDB = $_POST["AddReviewer"];
        $AddGraphicIDDB = $_POST["AddGraphicID"];
        $AddTypeDB = $_POST["AddType"];
        $AddRemarksIlluDB = $_POST["AddRemarksIllu"];
        $AddRaisedDateDB = $_POST["AddRaisedDate"];
        $AddRequiredDateDB = $_POST["AddRequiredDate"];
        $WO_ID = $_SESSION['SELECTED_WO_ID'];
        $IID = '';
        $RID = '';
        $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$AddIlluDB'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
        {
            $IID = $row["Emp_Id"];
        }
        $sql = "SELECT Emp_Id FROM tasktrackertool.`employee_details` WHERE `Name` = '$AddReviewerDB'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
        {
            $RID = $row["Emp_Id"];
        }
        $mysql = "SELECT `ATA Number` FROM associated_wos WHERE `ID` = '$WO_ID'";
        $res = mysqli_query($conn, $mysql);
        $ATA = '';
        while ($rownum = mysqli_fetch_array($res))
        {
            $ATA = $rownum["ATA Number"];
        }

        $insert = "INSERT INTO `wo_raisingillustration` (
        `Illustrator`, 
        `Type`, 
        `IO allotted date`, 
        `IO required date`, 
        `Reviewer`, 
        `Graphic ID Old`, 
        `Remarks`,
        `WO_ID` ,
        `IID` ,
        `RID`,
        `ATA Number`,
        `IO No`) VALUES (
        '$AddIlluDB', 
        '$AddTypeDB', 
        '$AddRaisedDateDB', 
        '$AddRequiredDateDB', 
        '$AddReviewerDB', 
        '$AddGraphicIDDB', 
        '$AddRemarksIlluDB',
        '$WO_ID' ,
        '$IID',
        '$RID',
        '$ATA',
        '$AddIONODB')";
        //echo $insert;

        $update = "UPDATE `associated_wos` SET `IID` = '$IID' ,
                                              `Illustrator` = '$AddIlluDB' 
                                              WHERE `ID` = '$WO_ID'";
        //echo $update;
        $conn->query($update);
        if ($conn->query($insert) === True)
        {
            echo 'Illustration added successfully';
        }
    }
}

//Edit Illustrations
if (isset($_POST["EditIllustrator"]))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    //echo 'ritwik';
    session_start();
    $EditIlluDB = $_POST["EditIllustrator"];
    $EditReviewerDB = $_POST["EditReviewer"];
    $EditGraphicIDDB = $_POST["EditGraphicIDOld"];
    $EditTypeDB = $_POST["EditType"];
    $EditRemarksIlluDB = $_POST["EditRemarks"];
    $EditRaisedDateDB = $_POST["EditRaisedDate"];
    $EditRequiredDateDB = $_POST["EditRequiredDate"];
    $IO_ID = $_SESSION['SELECTED_IO_ID'];

    $update = "UPDATE `wo_raisingillustration` SET 
                                        `Illustrator` = '$EditIlluDB',
                                        `Reviewer` = '$EditReviewerDB',
                                        `Graphic ID Old` = '$EditGraphicIDDB',
                                        `Type` = '$EditTypeDB',
                                        `Remarks` = '$EditRemarksIlluDB',
                                        `IO allotted date` = '$EditRaisedDateDB' , 
                                        `IO required date` = '$EditRequiredDateDB'
                                        WHERE `IO_ID` = '$IO_ID'";


    //echo $update;
    if ($conn->query($update) === True)
    {
        echo 'Illustration edited successfully';
    }
}

// Delete IO
if (isset($_POST["DeleteIOID"]))
{
    $DeleteIOIDDB = $_POST["DeleteIOID"];
    $delete = "DELETE FROM `wo_raisingillustration` WHERE `IO_ID` = '$DeleteIOIDDB'";
    if ($conn->query($delete) === True)
    {
        echo 'IO Deleted successfully';
    }
}
//Update SFCK Value
if (isset($_POST["SFCKValue"]))
{
    session_start();
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `OID` FROM `associated_wos` WHERE ID = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $OID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $OID = $row["OID"];
    }
    if ($OID != $empid)
    {
        echo 'You can not SFCK this Work Order';
    }
    else
    {
        $AddSFCKValue = $_POST["SFCKValue"];
        $AddSubDate = $_POST["SubDate"];
        $WO_ID = $_SESSION['SELECTED_WO_ID'];
        $fetch = "SELECT * FROM `associated_wos` WHERE `ID` = '$WO_ID'";
        $result = mysqli_query($conn, $fetch);
        $CurrentSFCKVal = "";
        $SFCKDate = '';
        $PR_SFCKDate = '';
        $IR_SFCKDate = '';
        while ($row = mysqli_fetch_array($result))
        {
            $CurrentSFCKVal = $row['WO Status'];
            $SFCKDate = $row["SFCK SubmissionDate"];
            $PR_SFCKDate = $row["PR_SFCKCompletion"];
            $IR_SFCKDate = $row["IR_SFCKCompletion"];
        }
        //echo $CurrentSFCKVal;
        if ($AddSFCKValue === 'SFCK-Completed' and $SFCKDate == '')
        {
            $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `SFCK SubmissionDate` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";


            if ($conn->query($update) === True)
            {
                echo 'SFCK Submitted successfully';
            }
        }
        elseif (($AddSFCKValue === 'PR COMNTS SFCK' and $SFCKDate != '' and $PR_SFCKDate == '') or ($AddSFCKValue === 'IR COMNTS SFCK' and $SFCKDate != '' and $IR_SFCKDate == ''))
        {
            if ($AddSFCKValue === 'PR COMNTS SFCK')
            {
                $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `PR_SFCKCompletion` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";

                $indate = "UPDATE `wo_reviewerqa` SET
                                                `IncorporationDate` = '$AddSubDate'
                                                WHERE WO_ID = '$WO_ID' AND `reviewType` = 'Peer Review'";
            }
            else
            {
                $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `IR_SFCKCompletion` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";

                $indate = "UPDATE `wo_reviewerqa` SET
                                                `IncorporationDate` = '$AddSubDate'
                                                WHERE WO_ID = '$WO_ID' AND `reviewType` = 'Internal Review'";
            }
            $conn->query($indate);
            if ($conn->query($update) === True)
            {
                echo 'COMNTS SFCK Submitted Successfully';
            }
        }
        /*elseif ($AddSFCKValue === 'IR COMNTS SFCK' and $CurrentSFCKVal === 'PR COMNTS SFCK')
        {

            $update = "UPDATE `associated_wos` SET
                                            `WO Status` = '$AddSFCKValue',
                                            `IR_CompletionDate` = '$AddSubDate'
                                            WHERE `ID` = '$WO_ID'";


            if ($conn->query($update) === True)
            {
                echo 'IR COMNTS SFCK Sumbitted successfully';
            }
        }*/
        else
        {
            echo 'You Need to Complete the Previous Check or you have already completed this check for this Work Order. Please check WO Status';
        }
    }
}


//Update SFCK IO Value
if (isset($_POST["SFCKIOValue"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $empid = $_SESSION["user_id"];
    $IO_ID = $_SESSION["SELECTED_IO_ID"];
    $sql = "SELECT `IID` FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $IID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $IID = $row["IID"];
    }
    if ($IID != $empid)
    {
        echo 'You can not start this Illustartion Order';
    }
    else
    {
        $AddSFCKValue = $_POST["SFCKIOValue"];
        $AddSubDate = $_POST["SubDateIO"];
        $IO_ID = $_SESSION["SELECTED_IO_ID"];
        $fetch = "SELECT * FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
        $result = mysqli_query($conn, $fetch);
        $CurrentSFCKVal = '';
        $SFCKDate = '';
        while ($row = mysqli_fetch_array($result))
        {
            $CurrentSFCKVal = $row['Status'];
            $SFCKDate = $row["SFCK SubmissionDate"];
        }
        //echo $CurrentSFCKVal;
        if ($AddSFCKValue === 'SFCK-Completed' and $SFCKDate === '')
        {
            $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `SFCK SubmissionDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";


            if ($conn->query($update) === True)
            {
                echo 'SFCK Sumbitted successfully';
            }
        }
        elseif (($AddSFCKValue === 'RV COMNTS SFCK' and $SFCKDate === '') or ($AddSFCKValue === 'OWNER COMNTS SFCK' and $SFCKDate === ''))
        {
            if ($AddSFCKValue === 'RV COMNTS SFCK')
            {

                $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `RV_SFCKDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";
            }
            else
            {
                $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `OR_SFCKDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";
            }
            $_SESSION["IO_DONE"] = "IO_COMPLETE";
            if ($conn->query($update) === True)
            {
                echo 'COMNTS SFCK Sumbitted successfully';
            }
        }/*
    elseif ($AddSFCKValue === 'OR COMNTS SFCK' and $CurrentSFCKVal === 'RV COMNTS SFCK')
    {

        $update = "UPDATE `wo_raisingillustration` SET
                                        `Status` = '$AddSFCKValue',
                                        `OR_SFCKDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";


        if ($conn->query($update) === True)
        {
            echo 'IR COMNTS SFCK Sumbitted successfully';
        }
    }*/
        else
        {
            echo 'You Need to Complete the Previous Check or you have already completed this check for this Illustration Order';
        }
    }
}
//Add Reviewer QA
if (isset($_POST["AddErrorCode"]))
{
    session_start();
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `IRID`,`PRID`  FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $PRID = '';
    $IRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["PRID"];
        $IRID = $row["IRID"];
    }
    //echo $PRID;
    //echo $IRID;
    if ($PRID != $empid and $IRID != $empid)
    {
        echo 'You can not add review to this order';
    }
    else
    {
        $AddErrorCodeDB = $_POST["AddErrorCode"];
        $AddErrorDescriptionDB = $_POST["AddErrorDescription"];
        $AddQuantityDB = $_POST["AddQuantity"];
        $AddStartDateDB = $_POST["AddStartDate"];
        $AddCompletionDateDB = $_POST["AddCompletionDate"];
        $AddReviewTypeDB = $_POST["AddReviewType"];
        $WO_ID = $_SESSION['SELECTED_WO_ID'];
        if ($AddReviewTypeDB === 'PR')
        {
            $AddReviewerType = 'Peer Review';
            $insert = "INSERT INTO `wo_errorinfo` (
                        `Error_Code` ,
                        `Error_Description` ,
                        `Error_Quantity` ,
                        `Review_Type` ,
                        `WO_NO`) VALUES (
                        '$AddErrorCodeDB' ,
                        '$AddErrorDescriptionDB' , 
                        '$AddQuantityDB' ,
                        '$AddReviewerType' ,
                        '$WO_ID')";
            //echo $insert;
            if ($AddCompletionDateDB === '')
            {
                $status = 'Peer RWK';
                $update = "UPDATE `associated_wos` SET `WO Status` = '$status',
                                                        `PR_StartDate` = '$AddStartDateDB'
                                                          WHERE `ID` = '$WO_ID'";
            }
            else
            {
                $status = 'Peer Review Complete';
                $update = "UPDATE `associated_wos` SET `WO Status` = '$status',
                                                      `PR_CompletionDate` = '$AddCompletionDateDB'
                                                          WHERE `ID` = '$WO_ID'";
            }
            $conn->query($update);
            $sql = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' AND `reviewType` = '$AddReviewerType'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            if ($num_rows === 0)
            {
                $insertreview = "INSERT INTO `wo_reviewerqa` (
                                `reviewType`,
                                `reviewStartDate`,
                                `reviewCompleteDate`,
                                `WO_ID`) VALUES (
                                '$AddReviewerType',
                                '$AddStartDateDB',
                                '$AddCompletionDateDB' ,
                                '$WO_ID')";
                if ($conn->query($insertreview) === True)
                {
                    echo 'Start date updated successfully';
                }
            }
            else
            {
                if ($AddStartDateDB !== '')
                {
                    echo 'Review Already Started, Start Date cant be changed. Please dont input start date again';
                }
            }

            if ($conn->query($insert) === True)
            {
                echo '\r\nError Code Submitted successfully';
            }
        }
        elseif ($AddReviewTypeDB === 'IR')
        {
            $AddReviewerType = 'Internal Review';
            $insert = "INSERT INTO `wo_errorinfo` (
                        `Error_Code` ,
                        `Error_Description` ,
                        `Error_Quantity` ,
                        `Review_Type` ,
                        `WO_NO`) VALUES (
                        '$AddErrorCodeDB' ,
                        '$AddErrorDescriptionDB' , 
                        '$AddQuantityDB' ,
                        '$AddReviewerType' ,
                        '$WO_ID')";

            if ($AddCompletionDateDB === '')
            {
                $status = 'Internal RWK';
                $update = "UPDATE `associated_wos` SET `WO Status` = '$status',
                                                        `PR_StartDate` = '$AddStartDateDB'
                                                          WHERE `ID` = '$WO_ID'";
            }
            else
            {
                $status = 'Internal Review Complete';
                $update = "UPDATE `associated_wos` SET `WO Status` = '$status',
                                                      `PR_CompletionDate` = '$AddCompletionDateDB'
                                                          WHERE `ID` = '$WO_ID'";
            }
            $conn->query($update);
            $sql = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' AND `reviewType` = '$AddReviewerType'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            if ($num_rows === 0)
            {
                $insertreview = "INSERT INTO `wo_reviewerqa` (
                                `reviewType`,
                                `reviewStartDate`,
                                `reviewCompleteDate`,
                                `WO_ID`) VALUES (
                                '$AddReviewerType',
                                '$AddStartDateDB',
                                '$AddCompletionDateDB' ,
                                '$WO_ID')";

                if ($conn->query($insertreview) === True)
                {
                    echo 'Start date updated successfully';
                }
            }
            else
            {
                if ($AddStartDateDB !== '')
                {
                    echo 'Review Already Started, Start Date cant be changed now';
                }
            }
            if ($conn->query($insert) === True)
            {
                echo '\r\nError Code Submitted successfully';
            }
        }
    }
}
//ADD REVIEWER QA IO
if (isset($_POST["AddErrorCodeIO"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $empid = $_SESSION["user_id"];
    $sql = "SELECT `RID`  FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $RID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $RID = $row["RID"];
    }
    if ($RID != $empid or ($_SESSION["IOWIP"] != 1))
    {
        echo 'You can not add review to this order right now';
    }
    else
    {
        $AddErrorCodeDB = $_POST["AddErrorCodeIO"];
        $AddErrorDescriptionDB = $_POST["AddErrorDescriptionIO"];
        $AddQuantityDB = $_POST["AddQuantityIO"];
        $AddStartDateDB = $_POST["AddStartDateIO"];
        $AddCompletionDateDB = $_POST["AddCompletionDateIO"];

        $insert = "INSERT INTO `io_errorinfo` (
                        `ErrorCode` ,
                        `ErrorDesc` ,
                        `Quantity` ,
                        `IO_ID`) VALUES (
                        '$AddErrorCodeDB' ,
                        '$AddErrorDescriptionDB' , 
                        '$AddQuantityDB' ,
                        '$IO_ID')";
        $conn->query($insert);

        if ($AddCompletionDateDB === '')
        {
            $status = 'REVWR RWK';
            $update = "UPDATE `wo_raisingillustration` SET `Status` = '$status' WHERE `IO_ID` = '$IO_ID'";
        }
        else
        {
            $status = 'Review Complete';
            $update = "UPDATE `wo_raisingillustration` SET `Status` = '$status' WHERE `IO_ID` = '$IO_ID'";
        }
        $conn->query($update);

        $insertreview = "UPDATE `wo_raisingillustration` SET 
                                `ReviewStartDate` = '$AddStartDateDB' , 
                                `ReviewCompleteDate` = '$AddCompletionDateDB' 
                                WHERE `IO_ID` = '$IO_ID'";
        if ($conn->query($insertreview) === True)
        {
            echo 'Start date updated successfully';
        }
    }
}

//Edit Reviewer QA
if (isset($_POST["EditErrorCode"]))
{
    session_start();
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `IRID`,`PRID`  FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $PRID = '';
    $IRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["PRID"];
        $IRID = $row["IRID"];
    }
    if ($PRID != $empid and $IRID != $empid)
    {
        echo 'You can not edit review to this order';
    }
    else
    {
        $EditErrorCodeDB = $_POST["EditErrorCode"];
        $EditErrorDescriptionDB = $_POST["EditErrorDescription"];
        $EditQuantityDB = $_POST["EditQuantity"];
        session_start();
        $Selected_ReviewID = $_SESSION['Selected_ReviewID'];
        $update = "UPDATE `wo_errorinfo` SET 
                                        `Error_Code` = '$EditErrorCodeDB',
                                        `Error_Description` = '$EditErrorDescriptionDB' ,
                                        `Error_Quantity` = '$EditQuantityDB'
                                        WHERE `ID` = '$Selected_ReviewID'";
        //echo $update;
        if ($conn->query($update) === True)
        {
            echo 'Review QA Edited successfully';
        }
    }
}
//Edit Reviewer QA IO
if (isset($_POST["EditErrorCodeIO"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $empid = $_SESSION["user_id"];
    $sql = "SELECT `RID`  FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $RID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $RID = $row["RID"];
    }
    if ($RID != $empid or ($_SESSION["IOWIP"] != 1))
    {
        echo 'You can not edit review for this order right now';
    }
    else
    {
        $EditErrorCodeDB = $_POST["EditErrorCodeIO"];
        $EditErrorDescriptionDB = $_POST["EditErrorDescriptionIO"];
        $EditQuantityDB = $_POST["EditQuantityIO"];
        $Selected_ErrorID = $_SESSION['Selected_Error_ID'];
        $update = "UPDATE `io_errorinfo` SET 
                                        `ErrorCode` = '$EditErrorCodeDB',
                                        `ErrorDesc` = '$EditErrorDescriptionDB' ,
                                        `Quantity` = '$EditQuantityDB'
                                        WHERE `ID` = '$Selected_ErrorID'";
        //echo $update;
        if ($conn->query($update) === True)
        {
            echo 'Review QA Edited successfully';
        }
    }
}
//Delete Reviewer QA
if (isset($_POST["DeleteErrorID"]))
{
    session_start();
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `IRID`,`PRID`  FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $PRID = '';
    $IRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["PRID"];
        $IRID = $row["IRID"];
    }
    if ($PRID != $empid and $IRID != $empid or ($_SESSION["WOWIP"] != 1))
    {
        echo 'You can not edit review to this order';
    }
    else
    {
        $DeleteErrorIDDB = $_POST["DeleteErrorID"];
        $delete = "DELETE FROM wo_errorinfo WHERE ID = '$DeleteErrorIDDB'";
        if ($conn->query($delete) === True)
        {
            echo 'Review QA Deleted successfully';
        }
    }
}

//Delete Reviewer IO
if (isset($_POST["Selected_DeleteErrorIDIO"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $empid = $_SESSION["user_id"];
    $sql = "SELECT `RID`  FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $RID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $RID = $row["RID"];
    }
    if ($RID != $empid or ($_SESSION["IOWIP"] != 1))
    {
        echo 'You can not edit review for this order right now';
    }
    else
    {
        $DeleteErrorIDDB = $_POST["Selected_DeleteErrorIDIO"];
        $delete = "DELETE FROM io_errorinfo WHERE ID = '$DeleteErrorIDDB'";
        if ($conn->query($delete) === True)
        {
            echo 'Review QA Deleted successfully';
        }
    }
}

if (isset($_POST["CalculateReviewID"]))
{
    $SelectedReviewWOID = $_POST["CalculateReviewID"];
    //echo $SelectedReviewWOID;
    $sel = "SELECT * FROM `wo_reviewerqa` WHERE ID = '$SelectedReviewWOID'";
    $res = mysqli_query($conn, $sel);
    $num = mysqli_num_rows($res);
    $reviewType = '';
    while ($row = mysqli_fetch_array($res))
    {
        $reviewType = $row["reviewType"];
        $WO_ID = $row["WO_ID"];
    }
    $select = "SELECT * FROM `wo_errorinfo` WHERE Review_Type = '$reviewType' AND WO_NO = '$WO_ID'";
    $result = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($result);
    $score = 100;
    $totalErrorDeduction = 0;
    while ($row = mysqli_fetch_array($result))
    {
        $Error_Code = $row["Error_Code"];
        $sql = "UPDATE `wo_errorinfo` INNER JOIN `errorcodeinfo` ON wo_errorinfo.Error_Code = errorcodeinfo.errorcode
                            SET wo_errorinfo.ErrorLoss = errorcodeinfo.ded WHERE wo_errorinfo.Error_Code = '$Error_Code'";
        //echo "ritwik";
        //echo $sql;
        $conn->query($sql);
        $ded = $row["ErrorLoss"];
        $quantity = $row["Error_Quantity"];
        $totalErrorDeduction += (int)$ded * (int)$quantity;
    }
    $score -= $totalErrorDeduction;
    $update = "UPDATE `wo_reviewerqa` SET 
                                          `reviewScore` = '$score'
                                            WHERE ID = $SelectedReviewWOID";
    //echo $update;
    if ($conn->query($update) === True)
    {
        echo 'Score Calculated successfully';
    }
}

if (isset($_POST["CalculateQAIO"]))
{
    session_start();
    $SelectedReviewIOID = $_SESSION['SELECTED_IO_ID'];
    $select = "SELECT * FROM `io_errorinfo` WHERE `IO_ID` = '$SelectedReviewIOID'";
    $result = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($result);
    $score = 100;
    $totalErrorDeduction = 0;
    while ($row = mysqli_fetch_array($result))
    {
        $ded = $row["ErrorLoss"];
        $quantity = $row["Quantity"];
        $totalErrorDeduction += (int)$ded * (int)$quantity;
    }
    $score -= $totalErrorDeduction;
    $update = "UPDATE `wo_raisingillustration` SET 
                                          `Score` = '$score'
                                            WHERE `IO_ID` = '$SelectedReviewIOID'";
    //echo $update;
    if ($conn->query($update) === True)
    {
        echo 'Score Calculated successfully';
    }
}


if (isset($_POST["SubmitReviewID"]))
{
    session_start();
    $empid = $_SESSION["user_id"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `IRID`,`PRID`  FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $PRID = '';
    $IRID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $PRID = $row["PRID"];
        $IRID = $row["IRID"];
    }
    if ($PRID != $empid and $IRID != $empid)
    {
        echo 'You can not submit review to this order';
    }
    else
    {
        $SelectedReviewWOID = $_POST["SubmitReviewID"];
        //echo $SelectedReviewWOID;
        ////Starting the session so can fetch the value of session array
        date_default_timezone_set("Asia/Kolkata");
        $GetCurrentDate = date("d/m/20y");
        $update = "UPDATE `wo_reviewerqa` SET 
                                  `reviewCompleteDate` = '$GetCurrentDate'
                                  WHERE `ID` = '$SelectedReviewWOID'";
        $sql = "SELECT `reviewType` FROM `wo_reviewerqa` WHERE `ID` = '$SelectedReviewWOID'";
        $result = mysqli_query($conn, $sql);
        $Status = "Review Submitted";
        $var = '';
        while ($row = mysqli_fetch_array($result))
        {
            $var = $row["reviewType"];
        }
        if ($var === 'Peer Review')
        {
            $Status = 'Peer Review Submitted';
        }
        else
        {
            $Status = 'Internal Review Submitted';
        }
        $statusupd = "UPDATE `associated_wos` SET 
                                  `WO Status` = '$Status'
                                  WHERE `ID` = '$WO_ID'";
        $conn->query($statusupd);
        if ($conn->query($update) === True)
        {
            echo 'Review Submitted successfully';
        }
    }
}

//IO Submit
if (isset($_POST["SubmitReviewIDIO"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $empid = $_SESSION["user_id"];
    $sql = "SELECT `RID`  FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $sql);
    $RID = '';
    while ($row = mysqli_fetch_array($result))
    {
        $RID = $row["RID"];
    }
    if ($RID != $empid or ($_SESSION["IOWIP"] != 1))
    {
        echo 'You can not Submit review for this order right now';
    }
    else
    {
        $SelectedReviewWOID = $_POST["SubmitReviewIDIO"];
        //echo $SelectedReviewWOID;
        date_default_timezone_set("Asia/Kolkata");
        $GetCurrentDate = date("d/m/20y");
        $update = "UPDATE `wo_raisingillustration` SET 
                                  `ReviewCompleteDate` = '$GetCurrentDate'
                                  WHERE `IO_ID` = '$SelectedReviewWOID'";
        if ($conn->query($update) === True)
        {
            echo 'Review Submitted successfully';
        }
    }
}
if (isset($_POST["extReceivedDate"]))
{
    $extReceivedDate = $_POST["extReceivedDate"];
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $sql = "SELECT `PR_CompletionDate` , `IR_CoompletionDate` ,`DraftDeliveryDate`  FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $sql);
    $PR_CompDate = '';
    $IR_CompDate = '';
    $DraftDate = '';
    while ($row = mysqli_fetch_array($result))
    {
        $PR_CompDate = $row["PR_CompletionDate"];
        $IR_CompDate = $row["IR_CoompletionDate"];
        $DraftDate = $row["DraftDeliveryDate"];
    }
    if ($PR_CompDate === '' and $IR_CompDate === '' or ($DraftDate != ''))
    {
        echo 'You can not submit Draft until review is closed';
    }
    else
    {
        $sql = "INSERT into `wo_externalqa`
                                (DraftDeliveryDate, 
                                `WO_ID`) VALUES (
                              '$extReceivedDate',
                              '$WO_ID')";
        $status = 'Draft Delivered';
        $update = "UPDATE `associated_wos` SET `WO Status` = '$status',
                                                `DraftDeliveryDate` = '$extReceivedDate' 
                                                WHERE `ID` = '$WO_ID'";
        $conn->query($update);
        if ($conn->query($sql) === True)
        {
            echo 'Draft Submitted successfully';
        }

        $select = "SELECT * FROM `wo_externalerror` WHERE `WO_ID` = '$WO_ID'";
        $result = mysqli_query($conn, $select);
        $num_rows = mysqli_num_rows($result);
        $score = 100;
        $totalErrorDeduction = 0;
        while ($row = mysqli_fetch_array($result))
        {
            $ded = $row["ErrorLoss"];
            $quantity = $row["Escapes"];
            $totalErrorDeduction += (int)$ded * (int)$quantity;
        }
        $score -= $totalErrorDeduction;
        $update = "UPDATE `wo_externalqa` SET 
                                          `Score` = '$score'
                                            WHERE `WO_ID` = $WO_ID";
    }
}

//IO OWNER ERROR
if (isset($_POST["ErrorCodeQAIO"]))
{
    $ErrorCodeIODB = $_POST["ErrorCodeQAIO"];
    $ErrorDescIODB = $_POST["ErrorDescQAIO"];
    $QuantityIODB = $_POST["QuantityQAIO"];
    $GraphicIDIODB = $_POST["GraphicIDQAIO"];
    $ReceivedDateIODB = $_POST["ReceivedDateQAIO"];
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $insert = "INSERT into `io_ownererror`
                                (`Error_Code`, 
                                `Error_Desc`, 
                                `Quantity`, 
                                `IO_ID`) VALUES (
                              '$ErrorCodeIODB',
                              '$ErrorDescIODB', 
                              '$QuantityIODB',
                              '$IO_ID')";
    $sql = "INSERT into `io_ownerqa`
                                (`StartDate`, 
                                `IO_ID`) VALUES (
                              '$ReceivedDateIODB',
                              '$IO_ID')"; // Work On this
    $status = 'Author RWK';
    $update = "UPDATE `wo_raisingillustration` SET `Status` = '$status' , `OwnerStartDate` = '$ReceivedDateIODB' WHERE `IO_ID` = '$IO_ID'";
    $conn->query($update);
    $conn->query($sql);
    if ($conn->query($insert) === True)
    {
        echo 'Review Submitted successfully';
    }

    $select = "SELECT * FROM `io_ownererror` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($result);
    $score = 100;
    $totalErrorDeduction = 0;
    while ($row = mysqli_fetch_array($result))
    {
        $ded = $row["ErrorLoss"];
        $quantity = $row["Quantity"];
        $totalErrorDeduction += (int)$ded * (int)$quantity;
    }
    $score -= $totalErrorDeduction;
    $update = "UPDATE `io_ownerqa` SET 
                                          `Score` = '$score'
                                            WHERE `IO_ID` = $IO_ID";


}


if (isset($_POST["AcceptCSTMRQA"]))
{
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $sql = "UPDATE `wo_externalqa` SET
                                         `AcceptedDate`= '$GetCurrentDate'
                                         WHERE `WO_ID` = '$WO_ID'";
    $status = 'Accepted/Closed';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
    if ($conn->query($sql) === True)
    {
        echo 'Work Order Closed';
    }
}

if (isset($_POST["AcceptOWNERQA"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $Status = 'Author QA ACCEPTED';
    $sql = "UPDATE `wo_raisingillustration` SET `Status` = '$Status' , `OwnerQAAcceptDate` = '$GetCurrentDate' 
                                                          WHERE `IO_ID` = '$IO_ID'";
    //echo 'Ritwik';
    if ($conn->query($sql) === True)
    {
        echo 'Author QA Accepted';
    }
}

//Shop Verification Function
if (isset($_POST["extCompletionDate"]))
{
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $extCompletionDate = $_POST["extCompletionDate"];
    $sql = "UPDATE `wo_externalqa` SET ShopVerificationDate= '$extCompletionDate' WHERE `WO_ID` = '$WO_ID'";
    if ($conn->query($sql) === True)
    {
        echo 'Shop Verification';
    }
    $status = 'Shop Verification';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
}
if (isset($_POST["extSNDDate"]))
{
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $extSNDDate = $_POST["extSNDDate"];
    $select = "SELECT * FROM `wo_externalqa` WHERE WO_ID = '$WO_ID'";
    $sql = "UPDATE `wo_externalqa` SET `SendDate`= '$extSNDDate' WHERE `WO_ID` = '$WO_ID'";
    if ($conn->query($sql) === True)
    {
        echo 'Product Sent Successfully';
    }
    $status = 'Work Order Closed';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
}

if (isset($_POST["SNDDateIO"]))
{
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
    $SNDDateIODB = $_POST["SNDDateIO"];
    $sql = "UPDATE `io_ownerqa` SET `CompletionDate`= '$SNDDateIODB' WHERE `IO_ID` = '$IO_ID'";
    //echo $sql;
    $check = "UPDATE `wo_raisingillustration` SET `OwnerSendDate`= '$SNDDateIODB' WHERE `IO_ID` = '$IO_ID'";
    $conn->query($check);
    if ($conn->query($sql) === True)
    {
        echo 'IO Sent Successfully';
    }
    $status = 'SND To Author';
    $update = "UPDATE `wo_raisingillustration` SET `Status` = '$status' WHERE `IO_ID` = '$IO_ID'";
    $conn->query($update);
}
?>

