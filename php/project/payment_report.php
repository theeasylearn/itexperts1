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
            <span>Reports - Batch Wise</span>
            <span><a href="report.php">batch Report</a></span>
        </div>
    </div>
    <div class="container">
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Batch Detail</th>
                    <th align='right'>Unpaid Amount</th>
                    <th align='right'>Paid Amount</th>
                    <th align='right'>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select title,classtime, (select sum(amount) from lecture l where  l.batchid=batchid and payoutid is null) as 'unpaid',ifnull((select sum(amount) from lecture l where  l.batchid=batchid and payoutid is not null),0) as 'paid' from course c, batch b where c.id=courseid";

                $cmd = $db->prepare($sql);
                $cmd->execute();
                $table = $cmd->fetchAll();
                $UnpaidTotal = 0;
                $PaidTotal = 0;
                foreach ($table as $row) {
                    $UnpaidTotal += $row['unpaid'];
                    $PaidTotal += $row['paid'];
                ?>
                    <tr>
                        <td>1</td>
                        <td><?= $row['title'] . " " . $row['classtime']; ?></td>
                        <td align='right'><?= $row['unpaid']; ?></td>
                        <td align='right'><?= $row['paid']; ?></td>
                        <td align='right'><?= $row['unpaid'] + $row['paid']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th align='right'><?= $UnpaidTotal; ?></th>
                    <th align='right'><?= $PaidTotal; ?></th>
                    <th align='right'><?= $PaidTotal + $UnpaidTotal; ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>