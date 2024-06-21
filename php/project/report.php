<?php
require_once('inc/header-part.php');
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
        <table border="1" align=center cellpadding='10' width='90%'>
            <tr>
                <td>
                    <select name="batch" id="batch" class="input-box">
                        <option value="">Select batch</option>
                    </select>
                </td>
                <td>
                    <label for="startdate">Start date</label><br>
                    <input type="date" name="startdate" id="startdate" required />
                </td>
                <td>
                    <label for="enddate">End date</label><br>
                    <input type="date" name="startdate" id="startdate" required />
                </td>
                <td width='25%'>
                    <button type="submit" class="save">
                        <i class="fa-solid fa-magnifying-glass"></i> Save
                    </button>
                    <button type="reset" class="clear">
                        <i class="fa fa-trash"></i> clear all
                    </button>
                </td>
            </tr>
        </table>
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
                <tr>
                    <td>1</td>
                    <td>History</td>
                    <td>Guptaji</td>
                    <td>21-6-2024</td>
                    <td>120 Minute</td>
                    <td>2000</td>
                    <td>No</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>