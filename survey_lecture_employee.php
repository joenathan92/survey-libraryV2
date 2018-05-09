<!DOCTYPE html>
<html>
    <head>
        <?php
        include "connection.php";
        echo "test req", print_r($_REQUEST),"......";
        ?>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style-survey.css"/>
    </head>
    <body>
    <?php
        // echo "layanan =", print_r($_REQUEST),"......";
        //$layanan = $_REQUEST['layanan'];
        
    if ($_POST['layanan'] =='E-1')
        {
            $q = "circulation";
        }
    else
        {
            $q = "reference";
        }?>
        <form action="menu_lect_emp.php" method="post">
    <?php
    if (isset($_REQUEST['layanan-1'])) {
        $layanan = $_REQUEST['layanan-1'];
        $answer = $_REQUEST['answer-1'];
         echo '<input type=hidden name=layanan-1 value='.$layanan.'>
            <input type=hidden name=answer-1 value='.$answer.'>';
    }
    ?>
        
            <input type=hidden name=bagian value=<?php echo $_REQUEST['bagian'];?>>
            <input type=hidden name=layanan value=<?php echo $_REQUEST['layanan'];?>>
           
                <div style="text-align: center;">
                    <h1>Apakah Anda Puas Dengan Layanan <?php echo $q;?> ? </h1>
                    <input type="hidden" name="nama" value="<?php echo $_POST['nama'];?>" />
                    <input type="image" class="avatar" name="answer" src="img/survey/str_agree.png" value="strongly_agree" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/agree.png" value="agree">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/disagree.png" value="disagree" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/str_disagree.png" value="strongly_disagree"><br>
                </div>
        </form>
    </body>
</html>