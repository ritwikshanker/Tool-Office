<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<form action="" method="POST" id="PostAddIllu" role="form">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>Illustrator</th>
                <td>
                    <select name="Illustrator" id="Illustrator" title="Illustrator">
                        <option selected disabled>--Select--</option>
                        <?php
                        $sql = "SELECT Name FROM `employee_details` ORDER BY Name";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <option><?php echo $row['Name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Reviewer</th>
                <td>
                    <select name="Reviewer" id="Reviewer" title="Reviewer">
                        <option selected disabled>--Select--</option>
                        <?php
                        $sql = "SELECT Name FROM `employee_details` ORDER BY Name";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <option><?php echo $row['Name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Graphic ID (Old)</th>
                <td><input type="text" name="GraphicID" id="GraphicID"></td>
            </tr>

            <tr>
                <th>Type</th>
                <td><input type="text" name="Type" id="Type"></td>
            </tr>

            <tr>
                <th>Remarks</th>
                <td><input type="text" name="Remarks" id="Remarks"></td>
            </tr>

            <tr>
                <th>Raised Date</th>
                <td><input type="text" id="Raiseddatepicker" name="RaisedDate"></td>
            </tr>

            <tr>
                <th>Required Date</th>
                <td><input type="text" id="Requireddatepicker" name="RequiredDate"></td>
            </tr>

        </table>
        <br>
        <input type="hidden" id="SelectedWO" value="<?php echo $_SESSION['SELECTED_WO_ID']; ?>">
        <input style="margin-left:35%;" type="submit" name="SubmitIllu" value="Submit Illu">
    </div>
</form>
<br><br>

</body>
</html>
