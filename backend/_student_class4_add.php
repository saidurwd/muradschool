<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if (!isset($_FILES['std_photo']['tmp_name'])) {
    echo "";
} else {
    $file = $_FILES['std_photo']['tmp_name'];
    $std_photo = $_FILES["std_photo"] ["name"];
    $tec_photo_name = addslashes($_FILES['std_photo']['name']);
    $size = $_FILES["std_photo"] ["size"];
    $error = $_FILES["std_photo"] ["error"];

    if ($error > 0) {
        echo"You need to input all fields.";
    } else {
        if ($size > 10000000) {
            die("Format is not allowed or file size is too big!");
        } else {

            $std_photo = $_FILES["std_photo"]["name"];
            $std_id = $_POST['std_id'];
            $std_roll = $_POST['std_roll'];
            $std_cls = $_POST['std_cls'];
            $std_name = $_POST['std_name'];
            $std_father = $_POST['std_father'];
            $std_mother = $_POST['std_mother'];
            $std_sft = $_POST['std_sft'];
            $std_sec = $_POST['std_sec'];
            $std_grp = $_POST['std_grp'];
            $std_dob = $_POST['std_dob'];
            $std_reli = $_POST['std_reli'];
            $std_gen = $_POST['std_gen'];
            $std_sub = $_POST['std_sub'];
            $student_device_id = $row['student_device_id'];

            $file_ext = substr($std_photo, strripos($std_photo, '.'));
            $f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;

            if (($file_ext != '.png') && ($file_ext != '.jpg') && ($file_ext != '.jpeg') && ($file_ext != '.gif')) {
                echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
            } else {
                move_uploaded_file($_FILES["std_photo"]["tmp_name"], "upload/" . $f1);
                @unlink($_FILES["std_photo"]["tmp_name"]);

                mysql_query("insert into std_class4_tbl (std_id, std_roll, std_cls, std_name, std_father, std_mother, std_sft, std_sec, std_grp, std_dob, std_reli, std_gen, std_sub, std_photo, student_device_id) 
					values('$std_id','$std_roll','$std_cls','$std_name','$std_father','$std_mother','$std_sft','$std_sec','$std_grp','$std_dob','$std_reli','$std_gen','$std_sub','$f1','$student_device_id')")or die(mysql_error());

                echo"<p style='font-size:20px;'>Student Data input successfully</p>";
            }
        }
        //header("location: index.php?action=_stu_class4_view");
    }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Add New student</title>
        <link rel="stylesheet" href="stylecss1.css" />	
    </head>
    <body>
        <h2>Insert a present class 4 student details in here...</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <table id="std_class4_tbl">
                <tr>
                    <td>Student Device ID: </td>
                    <td><input type="text" name="student_device_id" placeholder="i.e. 40001" required /></td>
                </tr>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="std_id" placeholder="ex: 00908767" required /></td>
                </tr>
                <tr>
                    <td>Roll: </td>
                    <td><input type="text" name="std_roll" placeholder="ex: 102" required /></td>
                </tr>
                <tr>
                    <td>Class: </td>
                    <td>
                        <select name="std_cls" id="">
                            <option value="">--select one--</option>
                            <option value="Class 1">Class 1</option>
                            <option value="Class 2">Class 2</option>
                            <option value="Class 3">Class 3</option>
                            <option value="Class 4">Class 4</option>
                            <option value="Class 5">Class 5</option>
                            <option value="Class 6">Class 6</option>
                            <option value="Class 7">Class 7</option>
                            <option value="Class 8">Class 8</option>
                            <option value="Class 9">Class 9</option>
                            <option value="Class 10">Class 10</option>
                            <option value="SSC">SSC</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="std_name" placeholder="ex: MD Hafizur Rahman" required /></td>
                </tr>
                <tr>
                    <td>Father's name: </td>
                    <td><input type="text" name="std_father" placeholder="ex: MD Abul Hasan" required /></td>
                </tr>
                <tr>
                    <td>Mother's name: </td>
                    <td><input type="text" name="std_mother" placeholder="ex: Jahanara Begum" required /></td>
                </tr>
                <tr>
                    <td>Shift: </td>
                    <td>
                        <select name="std_sft" id="">
                            <option value="">--select one--</option>
                            <option value="Day">Day</option>
                            <option value="Night">Night</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Section: </td>
                    <td><input type="text" name="std_sec" placeholder="ex: A" required /></td>
                </tr>
                <tr>
                    <td>Group: </td>
                    <td><input type="text" name="std_grp" placeholder="ex: Business Studies" required /></td>
                </tr>
                <tr>
                    <td>Date of birth: </td>
                    <td><input type="text" name="std_dob" placeholder="ex: 09/10/2987" required /></td>
                </tr>
                <tr>
                    <td>Religion: </td>
                    <td><input type="text" name="std_reli" placeholder="ex: Islam" required /></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <select name="std_gen" id="">
                            <option value="">--select one--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subject: </td>
                    <td><textarea name="std_sub" id="" cols="40" rows="3" placeholder="ex: 101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_236" required ></textarea></td>
                </tr>
                <tr>
                    <td>Photo: </td>
                    <td><input type="file" name="std_photo" /></td>
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