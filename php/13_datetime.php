<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Age Calculator</h1>
    <form action="" method="post">
        <table border="1" align="center" cellpadding='10'>
            <tr>
                <td colspan="3" align=center>
                    <h3>Birthdate</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type='number' name='birthday' placeholder='day' required />
                </td>
                <td>
                    <input type='number' name='birthmonth' placeholder='month' required />
                </td>
                <td>
                    <input type='number' name='birthyear' placeholder='year' required />
                </td>
            </tr>
            <tr>
                <td colspan="3" align=center>
                    <h3>current date</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input value="<?php echo date('d'); ?>" type='number' name='currentday' placeholder='day' required />
                </td>
                <td>
                    <input value="<?php echo date('m'); ?>" type='number' name='currentmonth' placeholder='month' required />
                </td>
                <td>
                    <input value="<?php echo date('Y'); ?>" type='number' name='currentyear' placeholder='year' required />
                </td>
            </tr>
            <tr>
                <td colspan="3" align=center>
                    <input type="submit" value="Calculate Age" name="submit" />
                </td>
            </tr>
            <tr>
                <td colspan="3" align=center>
                    <?php
                        //var_dump($_POST);
                        if(isset($_POST['submit'])==true)
                        {
                            $birthday = $_POST['birthday'];
                            $birthmonth = $_POST['birthmonth'];
                            $birthyear = $_POST['birthyear'];

                            $currentday = $_POST['currentday'];
                            $currentmonth = $_POST['currentmonth'];
                            $currentyear = $_POST['currentyear'];

                            //get birth time stamp
                            $birthtimestamp = mktime(0,0,0,$birthmonth,$birthday,$birthyear);

                            //get current time stamp
                            $currenttimestamp = mktime(0,0,0,$currentday,$currentmonth,$currentyear);

                            //substract birthtime stamp from current time stamp
                            $difference = abs( $currenttimestamp - $birthtimestamp);

                            echo "<h1>your age is </h1> in Seconds $difference"; 
                            echo "<br/> minutes = " . ($difference/60); 
                            echo "<br/> hours = " . ($difference/(60*60)); 
                            echo "<br/> days = " . ($difference/(60*60*24)); 
                            echo "<br/> years = " . round(($difference/(60*60*24*365)),0); 

                            //ca
                        }
                    ?>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>