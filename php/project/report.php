<?php
require_once('inc/header-part.php');
require_once('inc/connection.php');
require_once('inc/datetime_functions.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Reports - Batch Wise</span>
            <span><a href="payment_report.php">Payment Report</a></span>
        </div>
    </div>
    <div class="container">
        <form action="report.php" method="post">
            <table border="1" align=center cellpadding='10' width='90%'>
                <tr>
                    <td>
                        <select name="batchid" id="batchid" class="input-box">
                            <option value="">Select batch</option>
                            <?php
                            $sql = "select id,classtime from batch order by id desc";
                            $cmd = $db->prepare($sql);
                            $cmd->execute();
                            $table = $cmd->fetchAll();
                            foreach ($table as $row) {
                                echo "<option value={$row['id']}>{$row['classtime']}</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <label for="startdate">Start date</label><br>
                        <input type="date" name="startdate" id="startdate" required />
                    </td>
                    <td>
                        <label for="enddate">End date</label><br>
                        <input type="date" name="enddate" id="enddate" required />
                    </td>
                    <td width='25%'>
                        <button type="submit" class="save" name="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Lecture date</th>
                    <th>Duration</th>
                    <th>Amount</th>
                    <th>Is Paid</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // function displayRawSqlQuery($query, $params)
                // {
                //     foreach ($params as $key => $value) {
                //         $query = preg_replace('/\?/', $value, $query, 1);
                //     }
                //     return $query;
                // }
                //detect whether this page is opened 2nd time or 1st time
                if (isset($_POST['submit']) == true) {
                    //var_dump($_POST);
                    extract($_POST);
                    $sql = "select lecturedate,amount,duration,payoutid,t.name,s.title from lecture l,subject s, teacher t where batchid=? and (lecturedate>=? and lecturedate<=?) and subjectid=s.id and teacherid=t.id";
                    $cmd = $db->prepare($sql);
                    $cmd->bindparam(1, $batchid, PDO::PARAM_INT);
                    $cmd->bindparam(2, $startdate, PDO::PARAM_STR);
                    $cmd->bindparam(3, $enddate, PDO::PARAM_STR);
                    $cmd->execute();
                    $table = $cmd->fetchAll();
                    $params = [$batchid, $startdate, $enddate];

                    // Display the raw SQL query
                    // echo displayRawSqlQuery($sql, $params);
                    foreach ($table as $row) {
                        extract($row);
                ?>
                        <tr>
                            <td>1</td>
                            <td><?= $title; ?></td>
                            <td><?= $name; ?></td>
                            <td><?= toDMY($lecturedate); ?></td>
                            <td><?= $duration; ?> Minute</td>
                            <td><?= $amount; ?></td>
                            <td>No</td>
                        </tr>
                <?php
                    } //for each
                } //end of if 
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>