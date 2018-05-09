<!DOCTYPE html>
<html>
    <head>
        <?php
        // session_start(); 
        // echo "<br>1 ss=";
        if (isset($_REQUEST['bagian'])) {
            $bagian = $_REQUEST['bagian'];
            $nama = $_REQUEST['nama'];
        }
        if (isset($_REQUEST['layanan'])) {
            $layanan = $_REQUEST['layanan'];
            $answer = $_REQUEST['answer'];
        }
        else {
            $layanan = NULL;
        }
        if (isset($_REQUEST['layanan-1'])) {
            $layanan1 = $_REQUEST['layanan-1'];
            $answer1 = $_REQUEST['answer-1'];
        }
        else {
            $layanan1 = NULL;
        }
        // print_r($_SESSION);
        // $_SESSION=array();
        // session_destroy();
        // echo "<br>2 ss=";
        // print_r($_SESSION);
        // echo "<br>sid=",session_id();
        // echo "<br>";
        include "connection.php";
        echo "test req", print_r($_REQUEST),"......";
        ?>
    <meta charset="UTF-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style-new.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style-survey.css"/>
    </head>
    <body>
        <?php
            if($layanan == NULL)
            {
                echo '<form action="survey_lecture_employee.php" method="post">
                    <div style="text-align: center;">
                        <h1>Pilih Jenis Layanan Dibawah Ini</h1>
                            <input type="hidden" name="nama" value="'.$nama.'" />
                            <input type="hidden" name="bagian" value="'.$bagian.'" />
                            <input type="image" name="layanan"  class="avatar" src="img/menus/circulation.png" value="E-1" >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="image" class="avatar" name="layanan" src="img/menus/reference.png" value="E-2"><br> 
                    </div>
            </form>';
            }
            elseif ($layanan == 'E-1' && $layanan1 == NULL)
            {
                echo '<form action="survey_lecture_employee.php" method="post">
                <input type=hidden name=test value="E-1">
                    <div style="text-align: center;">
                        <h1>Pilih Jenis Layanan Dibawah Ini</h1>
                            <input type="hidden" name="nama" value="'.$nama.'" />
                            <input type="hidden" name="bagian" value="'.$bagian.'" />
                            <input type="hidden" name="layanan-1" value="'.$layanan.'" />
                            <input type="hidden" name="answer-1" value="'.$answer.'" />
                            <input type="image" name="layanan"  class="avatar" src="img/menus/circulation.png" value="E-1" disabled>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=hidden name=test value="hello">
                            <input type="image" class="avatar" name="layanan" src="img/menus/reference.png" value="E-2"><br> 
                    </div>
            </form>';
            }
            elseif ($layanan == 'E-2' && $layanan1 == NULL) 
            {
              
                echo '<form action="survey_lecture_employee.php" method="post">
                    <div style="text-align: center;">
                        <h1>Pilih Jenis Layanan Dibawah Ini</h1>
                            <input type="hidden" name="nama" value="'.$nama.'" />
                            <input type="hidden" name="bagian" value="'.$bagian.'" />
                            <input type="hidden" name="layanan-1" value="'.$layanan.'" />
                            <input type="hidden" name="answer-1" value="'.$answer.'" />
                            <input type="image" name="layanan"  class="avatar" src="img/menus/circulation.png" value="E-1">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=hidden name=test value="hello">
                            <input type="image" class="avatar" name="layanan" src="img/menus/reference.png" value="E-2" disabled><br> 
                    </div>
            </form>';
            }
            elseif (($layanan1 == 'E-2' && $layanan == 'E-1') || $layanan == 'E-2' && $layanan1 == 'E-1')
            {
                //header('Location: thank_you.php');
                //header('Refresh: 2; url=index.php');
                header('Location: send.php');
            }
        ?>
    </body>
</html>