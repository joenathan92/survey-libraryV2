<!DOCTYPE html>
<html>

    <!-- <?php
        // session_start(); 
        // echo "<br>1 ss=";
        // print_r($_SESSION);
        // $_SESSION = array();
        // // session_destroy();
        // echo "<br>2 ss=";
        // print_r($_SESSION);
        // echo "<br>sid=",session_id();
        // echo "<br>";
    ?> -->

    <head>
        <?php
        include "connection.php";
        echo "test req", print_r($_REQUEST),"......";
        ?>
    <meta charset="UTF-8">
    <title>Menu</title> 
    
    <!-- <link rel="stylesheet" type="text/css" href="css/style-new.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style-survey.css"/>
    </head>
    <body>
        <form action="menu_lect_emp.php" method="post">
            <!--input type=hidden name=test value="hello"-->
                <div style="text-align: center;">
                    <h1>Pilih Jenis Layanan Dibawah Ini</h1>
                        <input type="hidden" name="nama" value="<?php echo $_POST['nama'];?>" />
                        <input type="image" name="bagian"  class="avatar" src="img/menus/lec_emp.png" value="lecture_employee" >
                        <!--input type=hidden name=test value="hello"-->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="image" formaction="menu_coll_stud1.php" class="avatar" name="bagian" src="img/menus/college_student.png" value="collage_studen"><br>
                </div>
    </body>
</html>