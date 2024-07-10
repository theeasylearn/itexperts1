<?php
    require_once('inc/header-part.php');
    require_once('inc/connection.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Lecture -> Add Lecture</span>
            <span><a href="lecture.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_lecture.php" method="post">
            <table id="input-table">
                <tr>
                    <td width='33%'>Teacher ID</td>
                    <td>
                        <select name="teacherid" id="teacherid" required>
                            <option value="">Select Teacher</option>
                            <?php
                            $sql = "select id,name from teacher order by name";
                            $cmd = $db->prepare($sql);
                            $cmd->execute();
                            $table = $cmd->fetchAll();
                            foreach ($table as $row) {
                                echo "<option value={$row['id']}>{$row['name']}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subject ID</td>
                    <td>
                        <select name="subjectid" id="subjectid" required>
                            <option value="">Select Subject</option>
                            <?php
                            $sql = "select id,title from subject order by title";
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
                    <td>Batch ID</td>
                    <td>
                        <select name="batchid" id="batchid" required>
                            <option value="">Select Batch</option>
                            <?php
                            $sql = "select id,classtime from batch order by classtime";
                            $cmd = $db->prepare($sql);
                            $cmd->execute();
                            $table = $cmd->fetchAll();
                            foreach ($table as $row) {
                                echo "<option value={$row['id']}>{$row['classtime']}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Duration (Minutes)</td>
                    <td>
                        <input type="number" name="duration" id="duration" class="input-box" required min="30" max="240" />
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input type="number" name="amount" id="amount" class="input-box" required min='0' />
                    </td>
                </tr>
                <tr>
                    <td>Lecture Date</td>
                    <td>
                        <input type="date" name="lecturedate" id="lecturedate" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> Clear All
                        </button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>
<?php
require_once('inc/footer.php');
?>