<?php
require_once('inc/header-part.php');
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
                            <option value="1">Ghanshyam Panday</option>
                            <option value="2">Mohan Sharma</option>
                            <option value="3">Vidhi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subject ID</td>
                    <td>
                        <select name="subjectid" id="subjectid" required>
                            <option value="">Select Subject</option>
                            <option value="1">Indian Laws</option>
                            <option value="2">Accounting</option>
                            <option value="3">Geography</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Batch ID</td>
                    <td>
                        <select name="batchid" id="batchid" required>
                            <option value="">Select Batch</option>
                            <!-- Add options for batches here -->
                             <option value="1">8 TO 10</option>
                             <option value="2">8 TO 10 (batch 2)</option>
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