<?php
require_once("inc/verify_login.php");
require_once('inc/header-part.php');
require_once('inc/connection.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Batch -> Add Batch</span>
            <span><a href="batch.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_batch.php" method="post">
            <table id="input-table">
                <tr>
                    <td width='33%'>Select course</td>
                    <td>
                        <select name="courseid" id="courseid" class="input-box" required>
                            <option value="">select course</option>
                            <?php
                            $sql = "select id,title from course order by title";
                            $cmd = $db->prepare($sql);
                            $cmd->execute();
                            $table = $cmd->fetchAll();
                            foreach ($table as $row) {
                                echo "<option value={$row['id']}>{$row['title']}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Start date</td>
                    <td>
                        <input type="date" name="startdate" id="startdate" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>End date </td>
                    <td>
                        <input type="date" name="enddate" id="enddate" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>class time</td>
                    <td>
                        <input type="text" name="classtime" id="classtime" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button name="submit" type="submit" class="save">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <?php require_once("inc/message.php") ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>