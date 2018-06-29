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
    $ManualDB = $_POST["Manual"];
    $TargetDB = $_POST["Target"];
    $DescriptionTitleDB = $_POST["DescriptionTitle"];
    $TypeofWorkDB = $_POST["TypeofWork"];
    $CustomerDeliveryDateDB = $_POST["CustomerDeliveryDate"];
    $RemarksDB = $_POST["Remarks"];


    $insert = "INSERT INTO `editing_project` (`Partner`,`Project`, `Manual`, `Target%`, `Description`, `Type of Work`, `Customer Delivery Date`, `Remarks`) VALUES ('$PartnerDB','$ProjectDB', '$ManualDB', '$TargetDB', '$DescriptionTitleDB', '$TypeofWorkDB', '$CustomerDeliveryDateDB', '$RemarksDB')";

    if ($conn->query($insert) === True)
    {
        echo "<script type='text/javascript'>alert('Project added successfully');</script>";
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


    $insert = "INSERT INTO `associated_wos` (`Project`, `WO No`, `ATA Number`, `Owner`, `WO Allotted date`, `SFCK Date- Planned`, `Peer Reviewer`, `Peer QA Completion Date- Planned`, `Internal Reviewer`, `Internal QA Completion Date- Planned`) VALUES ('$SelectedProject', '$AddWONoDB', '$AddATANumberDB', '$AddOwnerDB', '$AddWOAdatepickerDB', '$AddSFCKPdatepickerDB', '$AddPRDB', '$AddPRQACPdatepickerDB', '$AddIRDB', '$AddIRQACPdatepickerDB')";

    if ($conn->query($insert) === True)
    {
        echo "<script type='text/javascript'>alert('Work Order added successfully');</script>";
    }
}

// Edit WO Function 
//NOT WORKING properly
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
    $SelectedProject = $_POST["SelectedProject"];
    $update = "UPDATE `associated_wos` SET
                          `WO No` = '$EditWONoDB' ,
                          `ATA Number` = '$EditATANumberDB' , 
                          `Owner` = '$EditOwnerDB' ,
                          `WO Allotted date` = '$EditWOAdatepickerDB' ,
                          `SFCK Date- Planned` = '$EditSFCKPdatepickerDB' ,
                          `Peer Reviewer` = '$EditPRDB' ,
                          `Peer QA Completion Date- Planned` = '$EditPRQACPdatepickerDB' ,
                          `Internal Reviewer` = '$EditIRDB' ,
                          `Internal QA Completion Date- Planned` = '$EditIRQACPdatepickerDB'
                           WHERE `Project` = '$SelectedProject'"; //This Line is Problem


    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Work Order edited successfully');</script>";
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
    $EditManualDB = $_POST["EditManual"];
    $EditTargetDB = $_POST["EditTarget"];
    $EditDescriptionTitleDB = $_POST["EditDescriptionTitle"];
    $EditTypeofWorkDB = $_POST["EditTypeofWork"];
    $EditCustomerDeliveryDateDB = $_POST["EditCustomerDeliveryDate"];
    $EditRemarksDB = $_POST["EditRemarks"];
    $update = "UPDATE `editing_project` SET 
                                        `Partner` = '$EditPartnerDB',
                                        `Project` = '$EditProjectDB',
                                        `Manual` = '$EditManualDB',
                                        `Target%` = '$EditTargetDB',
                                        `Description` = '$EditDescriptionTitleDB',
                                        `Type of Work` = '$EditTypeofWorkDB' , 
                                        `Customer Delivery Date` = '$EditCustomerDeliveryDateDB' ,
                                        `Remarks` = '$EditRemarksDB'
                                        WHERE `Project` = '$p'";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Project edited successfully');</script>";
    }
}


//Accept Work Order
if (isset($_POST["AcceptWO"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $insert = "INSERT INTO `associated_wos` (`StartDate`) VALUES ('GetCurrentDate')";
    $WO_ID = $_SESSION['SELECTED_WO_ID']; //Session variable containing the value of Unique ID of selected Work Order
    $update = "UPDATE associated_wos SET StartDate = '$GetCurrentDate' WHERE id = $WO_ID";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Work Order StartDate Updated Successfully');</script>";
    }
}
if (isset($_POST["AcceptIO"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $IO_ID = $_SESSION['SELECTED_IO_ID']; //Session variable containing the value of Unique ID of selected I Order
    $update = "UPDATE `wo_raisingillustration` SET StartDate = '$GetCurrentDate' WHERE IO_ID = $IO_ID";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('IO StartDate Updated Successfully');</script>";
    }
}

//Add Owner Remarks
if (isset($_POST["AddOwnRem"]))
{
    session_start();  //Starting the session so can fetch the value of session array
    $WO_ID = $_SESSION['SELECTED_WO_ID']; //Session variable containing the value of Unique ID of selected Work Order
    $AddOwnerRemarkDB = $_POST["AddOwnRem"];
    //echo $AddOwnerRemarkDB;
    //echo $WO_ID;
    $update = "UPDATE `associated_wos` SET `Owner Remarks` = '$AddOwnerRemarkDB' WHERE `ID` = '$WO_ID'";

    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Remark Added Succesfully');</script>";
    }
}
if (isset($_POST["AddIlluRem"]))
{
    session_start();
    $IO_ID = $_SESSION["SELECTED_IO_ID"];
    $AddIlluRemarkDB = $_POST["AddIlluRem"];
    //echo $AddOwnerRemarkDB;
    //echo $WO_ID;
    $update = "UPDATE `wo_raisingillustration` SET `Remarks` = '$AddIlluRemarkDB' WHERE `IO_ID` = '$IO_ID'";

    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Illustrator Remark Added Succesfully');</script>";
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
    $AddIlluDB = $_POST["AddIllu"];
    $AddReviewerDB = $_POST["AddReviewer"];
    $AddGraphicIDDB = $_POST["AddGraphicID"];
    $AddTypeDB = $_POST["AddType"];
    $AddRemarksIlluDB = $_POST["AddRemarksIllu"];
    $AddRaisedDateDB = $_POST["AddRaisedDate"];
    $AddRequiredDateDB = $_POST["AddRequiredDate"];
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    //echo nl2br ($AddIlluDB."\n:");
    //echo $AddReviewerDB;
    //echo $AddGraphicIDDB;
    //echo $AddTypeDB;
    $insert = "INSERT INTO `wo_raisingillustration` (
        `Illustrator`, 
        `Type`, 
        `IO allotted date`, 
        `IO required date`, 
        `Reviewer`, 
        `Graphic ID Old`, 
        `Remarks`,
        `WO_ID`) VALUES (
        '$AddIlluDB', 
        '$AddTypeDB', 
        '$AddRaisedDateDB', 
        '$AddRequiredDateDB', 
        '$AddReviewerDB', 
        '$AddGraphicIDDB', 
        '$AddRemarksIlluDB',
        '$WO_ID')";
    //echo $insert;
    if ($conn->query($insert) === True)
    {
        echo "<script type='text/javascript'>alert('Illustration added successfully');</script>";
    }
}

//Edit Iluustrations
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
        echo "<script type='text/javascript'>alert('Illustration edited successfully');</script>";
    }
}
//Update SFCK Value
if (isset($_POST["SFCKValue"]))
{
    $AddSFCKValue = $_POST["SFCKValue"];
    $AddSubDate = $_POST["SubDate"];
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $fetch = "SELECT `WO Status` FROM `associated_wos` WHERE `ID` = '$WO_ID'";
    $result = mysqli_query($conn, $fetch);
    $CurrentSFCKVal = "";
    while ($row = mysqli_fetch_array($result))
    {
        $CurrentSFCKVal = $row['WO Status'];
    }
    //echo $CurrentSFCKVal;
    if ($AddSFCKValue === 'SFCK-Completed' and $CurrentSFCKVal === '')
    {
        $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `SFCK SubmissionDate` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('SFCK Sumbitted successfully');</script>";
        }
    }
    elseif ($AddSFCKValue === 'PR COMNTS SFCK' and $CurrentSFCKVal === 'SFCK-Completed')
    {
        $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `PR_CompletionDate` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('PR COMNTS SFCK Sumbitted successfully');</script>";
        }
    }
    elseif ($AddSFCKValue === 'IR COMNTS SFCK' and $CurrentSFCKVal === 'PR COMNTS SFCK')
    {

        $update = "UPDATE `associated_wos` SET 
                                        `WO Status` = '$AddSFCKValue',
                                        `IR_CoompletionDate` = '$AddSubDate'
                                        WHERE `ID` = '$WO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('IR COMNTS SFCK Sumbitted successfully');</script>";
        }
    }
    else
    {
        echo 'You Need to Complete the Previous Check or you have already completed this check for this Work Order';
    }
}
//Update SFCK IO Value
if (isset($_POST["SFCKIOValue"]))
{
    $AddSFCKValue = $_POST["SFCKIOValue"];
    $AddSubDate = $_POST["SubDateIO"];
    session_start();
    $IO_ID = $_SESSION["SELECTED_IO_ID"];
    $fetch = "SELECT `Status` FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
    $result = mysqli_query($conn, $fetch);
    $CurrentSFCKVal = '';
    while ($row = mysqli_fetch_array($result))
    {
        $CurrentSFCKVal = $row['Status'];
    }
    //echo $CurrentSFCKVal;
    if ($AddSFCKValue === 'SFCK-Completed' and $CurrentSFCKVal === '')
    {
        $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `SFCK SubmissionDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('SFCK Sumbitted successfully');</script>";
        }
    }
    elseif ($AddSFCKValue === 'RV COMNTS SFCK' and $CurrentSFCKVal === 'SFCK-Completed')
    {
        $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `RV_SFCKDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('RV COMNTS SFCK Sumbitted successfully');</script>";
        }
    }
    elseif ($AddSFCKValue === 'OR COMNTS SFCK' and $CurrentSFCKVal === 'RV COMNTS SFCK')
    {

        $update = "UPDATE `wo_raisingillustration` SET 
                                        `Status` = '$AddSFCKValue',
                                        `OR_SFCKDate` = '$AddSubDate'
                                        WHERE `IO_ID` = '$IO_ID'";


        if ($conn->query($update) === True)
        {
            echo "<script type='text/javascript'>alert('IR COMNTS SFCK Sumbitted successfully');</script>";
        }
    }
    else
    {
        echo 'You Need to Complete the Previous Check or you have already completed this check for this Work Order';
    }
}
//Add Reviewer QA
if (isset($_POST["AddErrorCode"]))
{
    $AddErrorCodeDB = $_POST["AddErrorCode"];
    $AddErrorDescriptionDB = $_POST["AddErrorDescription"];
    $AddQuantityDB = $_POST["AddQuantity"];
    $AddStartDateDB = $_POST["AddStartDate"];
    $AddCompletionDateDB = $_POST["AddCompletionDate"];
    $AddReviewTypeDB = $_POST["AddReviewType"];
    session_start();
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

        if ($AddCompletionDateDB === '')
        {
            $status = 'Peer RWK';
            $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
        }
        else
        {
            $status = 'Peer Review Complete';
            $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
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
                echo "<script type='text/javascript'>alert('Start date updated successfully');</script>";
            }
        }
        else
        {
            if ($AddStartDateDB !== '')
            {
                echo "<script type='text/javascript'>alert('Review Already Started, Start Date cant be changed');</script>";
            }
        }

        if ($conn->query($insert) === True)
        {
            echo "<script type='text/javascript'>alert('Error Code Submitted successfully');</script>";
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
            $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
        }
        else
        {
            $status = 'Internal Review Complete';
            $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
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
                echo "<script type='text/javascript'>alert('Start date updated successfully');</script>";
            }
        }
        else
        {
            if ($AddStartDateDB !== '')
            {
                echo "<script type='text/javascript'>alert('Review Already Started, Start Date cant be changed');</script>";
            }
        }
        if ($conn->query($insert) === True)
        {
            echo "<script type='text/javascript'>alert('Error Code Submitted successfully');</script>";
        }
    }
}
//ADD REVIEWER QA IO
if (isset($_POST["AddErrorCodeIO"]))
{
    $AddErrorCodeDB = $_POST["AddErrorCodeIO"];
    $AddErrorDescriptionDB = $_POST["AddErrorDescriptionIO"];
    $AddQuantityDB = $_POST["AddQuantityIO"];
    $AddStartDateDB = $_POST["AddStartDateIO"];
    $AddCompletionDateDB = $_POST["AddCompletionDateIO"];
    session_start();
    $IO_ID = $_SESSION['SELECTED_IO_ID'];
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
        echo "<script type='text/javascript'>alert('Start date updated successfully');</script>";
    }
}

//Edit Reviewer QA
if (isset($_POST["EditErrorCode"]))
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
        echo "<script type='text/javascript'>alert('Review QA Edited successfully');</script>";
    }
}
//Edit Reviewer QA IO
if (isset($_POST["EditErrorCodeIO"]))
{
    $EditErrorCodeDB = $_POST["EditErrorCodeIO"];
    $EditErrorDescriptionDB = $_POST["EditErrorDescriptionIO"];
    $EditQuantityDB = $_POST["EditQuantityIO"];
    session_start();
    $Selected_ErrorID = $_SESSION['Selected_Error_ID'];
    $update = "UPDATE `io_errorinfo` SET 
                                        `ErrorCode` = '$EditErrorCodeDB',
                                        `ErrorDesc` = '$EditErrorDescriptionDB' ,
                                        `Quantity` = '$EditQuantityDB'
                                        WHERE `ID` = '$Selected_ErrorID'";
    //echo $update;
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Review QA Edited successfully');</script>";
    }
}
//Delete Reviewer QA
if (isset($_POST["DeleteErrorID"]))
{
    $DeleteErrorIDDB = $_POST["DeleteErrorID"];
    $delete = "DELETE FROM wo_errorinfo WHERE ID = '$DeleteErrorIDDB'";
    if ($conn->query($delete) === True)
    {
        echo "<script type='text/javascript'>alert('Review QA Deleted successfully');</script>";
    }
}

//Delete Reviewer IO
if (isset($_POST["Selected_DeleteErrorIDIO"]))
{
    $DeleteErrorIDDB = $_POST["Selected_DeleteErrorIDIO"];
    $delete = "DELETE FROM io_errorinfo WHERE ID = '$DeleteErrorIDDB'";
    if ($conn->query($delete) === True)
    {
        echo "<script type='text/javascript'>alert('Review QA Deleted successfully');</script>";
    }
}

if (isset($_POST["CalculateReviewID"]))
{
    $SelectedReviewWOID = $_POST["CalculateReviewID"];
    //echo $SelectedReviewWOID;
    $select = "SELECT * FROM `wo_errorinfo` WHERE `ID` = '$SelectedReviewWOID'";
    $result = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($result);
    $score = 100;
    $totalErrorDeduction = 0;
    while ($row = mysqli_fetch_array($result))
    {
        $ded = $row["ErrorLoss"];
        $quantity = $row["Error_Quantity"];
        $totalErrorDeduction += (int)$ded * (int)$quantity;
    }
    $score -= $totalErrorDeduction;
    $update = "UPDATE `wo_reviewerqa` SET 
                                          `reviewScore` = '$score'
                                            WHERE ID = $SelectedReviewWOID";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Score Calculated successfully');</script>";
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
        echo "<script type='text/javascript'>alert('Score Calculated successfully');</script>";
    }
}


if (isset($_POST["SubmitReviewID"]))
{
    $SelectedReviewWOID = $_POST["SubmitReviewID"];
    //echo $SelectedReviewWOID;
    session_start();  //Starting the session so can fetch the value of session array
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $update = "UPDATE `wo_reviewerqa` SET 
                                  `reviewCompleteDate` = '$GetCurrentDate'
                                  WHERE `ID` = '$SelectedReviewWOID'";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Review Submitted successfully');</script>";
    }
}

//IO Submit
if (isset($_POST["SubmitReviewIDIO"]))
{
    $SelectedReviewWOID = $_POST["SubmitReviewIDIO"];
    //echo $SelectedReviewWOID;
    session_start();  //Starting the session so can fetch the value of session array
    date_default_timezone_set("Asia/Kolkata");
    $GetCurrentDate = date("d/m/20y");
    $update = "UPDATE `wo_raisingillustration` SET 
                                  `ReviewCompleteDate` = '$GetCurrentDate'
                                  WHERE `IO_ID` = '$SelectedReviewWOID'";
    if ($conn->query($update) === True)
    {
        echo "<script type='text/javascript'>alert('Review Submitted successfully');</script>";
    }
}
if (isset($_POST["extErrorCode"]))
{
    $extErrorCodeDB = $_POST["extErrorCode"];
    $extErrorDescDB = $_POST["extErrorDesc"];
    $extEscapesDB = $_POST["extEscapes"];
    $extReceivedDate = $_POST["extReceivedDate"];
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $insert = "INSERT into `wo_externalerror`
                                (`Error_Code`, 
                                `Error_Desc`, 
                                `Escapes`, 
                                `WO_ID`) VALUES (
                              '$extErrorCodeDB',
                              '$extErrorDescDB', 
                              '$extEscapesDB',
                              '$WO_ID')";
    $sql = "INSERT into `wo_externalqa`
                                (`ReceivedDate`, 
                                `WO_ID`) VALUES (
                              '$extReceivedDate',
                              '$WO_ID')";
    $status = 'External RWK';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
    $conn->query($sql);
    if ($conn->query($insert) === True)
    {
        echo "<script type='text/javascript'>alert('Review Submitted successfully');</script>";
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
        echo "<script type='text/javascript'>alert('Work Order Closed');</script>";
    }
}

if (isset($_POST["extCompletionDate"]))
{
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $extCompletionDate = $_POST["extCompletionDate"];
    $sql = "UPDATE `wo_externalqa` SET `CompletionDate`= '$extCompletionDate' WHERE `WO_ID` = '$WO_ID'";
    if ($conn->query($sql) === True)
    {
        echo "<script type='text/javascript'>alert('Customer Completion Submitted Successfully');</script>";
    }
    $status = 'CSTMR CMNTS SFCK';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
}
if (isset($_POST["extSNDDate"]))
{
    session_start();
    $WO_ID = $_SESSION['SELECTED_WO_ID'];
    $extSNDDate = $_POST["extSNDDate"];
    $sql = "UPDATE `wo_externalqa` SET `SendDate`= '$extSNDDate' WHERE `WO_ID` = '$WO_ID'";
    if ($conn->query($sql) === True)
    {
        echo "<script type='text/javascript'>alert('Product Sent Successfully');</script>";
    }
    $status = 'SND To CSTMR';
    $update = "UPDATE `associated_wos` SET `WO Status` = '$status' WHERE `ID` = '$WO_ID'";
    $conn->query($update);
}
?>