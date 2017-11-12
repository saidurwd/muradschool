<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if (!isset($_FILES['tech_photo']['tmp_name'])) {
    echo "";
} else {
    $file = $_FILES['tech_photo']['tmp_name'];
    $tech_photo = $_FILES["tech_photo"] ["name"];
    $tec_photo_name = addslashes($_FILES['tech_photo']['name']);
    $size = $_FILES["tech_photo"] ["size"];
    $error = $_FILES["tech_photo"] ["error"];

    if ($error > 0) {
        echo"You need to select a photo.";
    } else {
        if ($size > 10000000) {
            die("Format is not allowed or file size is too big!");
        } else {

            $tech_photo = $_FILES["tech_photo"]["name"];
            $tech_id = $_POST['tech_id'];
            $tech_name = $_POST['tech_name'];
            $tech_designation = $_POST['tech_designation'];
            $tech_indxno = $_POST['tech_indxno'];
            $tech_contact = $_POST['tech_contact'];
            $tech_sub = $_POST['tech_sub'];
            $device_id = $_POST['device_id'];

            $file_ext = substr($tech_photo, strripos($tech_photo, '.'));
            $f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;

            if (($file_ext != '.png') && ($file_ext != '.jpg') && ($file_ext != '.jpeg') && ($file_ext != '.gif')) {
                echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
            } else {
                move_uploaded_file($_FILES["tech_photo"]["tmp_name"], "upload/" . $f1);
                @unlink($_FILES["tech_photo"]["tmp_name"]);

                mysql_query("insert into preteach_tbl (tech_id, tech_name, tech_designation, tech_indxno, tech_contact, tech_sub, tech_photo, device_id) 
					values('$tech_id','$tech_name','$tech_designation','$tech_indxno','$tech_contact','$tech_sub','$f1','$device_id')")or die(mysql_error());

                echo"<p style='font-size:20px;'>Present Teacher Data has been input successfully</p>";
            }
        }
        header("location: index.php?action=_preteach_view");
    }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Add New teacher</title>
    </head>
    <body>
        <h2>Insert a Present teacher details in here...</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Device ID: </td>
                    <td><input type="text" name="device_id" placeholder="ex: 900001" required /></td>
                </tr>
                <tr>
                    <td>Teacher ID: </td>
                    <td><input type="text" name="tech_id" placeholder="ex: 0000033584" required /></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="tech_name" placeholder="ex: Abdur Rahman" required /></td>
                </tr>
                <tr>
                    <td>Designation: </td>
                    <td><input type="text" name="tech_designation" placeholder="ex: PRINCIPAL" required /></td>
                </tr>
                <tr>
                    <td>Index No: </td>
                    <td><input type="text" name="tech_indxno" placeholder="ex: 436807" required /></td>
                </tr>
                <tr>
                    <td>Contact No: </td>
                    <td><input type="text" name="tech_contact" placeholder="ex: 01710111111" required /></td>
                </tr>
                <tr>
                    <td>Subject: </td>
                    <td><input type="text" name="tech_sub" placeholder="ex: Science" required /></td>
                </tr>
                <tr>
                    <td>Photo: </td>
                    <td><input type="file" name="tech_photo" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data" name="form1"/>
                        <input type="reset" value="Reset" style="color: red;" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>