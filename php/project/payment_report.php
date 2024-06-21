<?php
require_once('inc/header-part.php');
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
                    <th align='right'>Paid Amount</th>
                    <th align='right'>Unpaid Amount</th>
                    <th align='right'>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PSI Batch </td>
                    <td align='right'>225000</td>
                    <td align='right'>145000</td>
                    <td align='right'>370000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th align='right'>1525000</th>
                    <th align='right'>856000</th>
                    <th align='right'>2548000</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>