<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Lecture</span>
            <span><a href="add_lecture.php">Add Lecture</a></span>
        </div>
    </div>
    <div class="container">

        <table align="center" class="data">
            <thead>
                <tr>
                    <th width='3%'>Action</th>
                    <th>Id</th>
                    <th>Batch</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Duration</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>is Paid</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" name="" id="">
                    </td>
                    <td>1</td>
                    <td>Morning 6 to 8</td>
                    <td>History</td>
                    <td>Ramlal gupta</td>
                    <td>120 minutes</td>
                    <td>2000</td>
                    <td>20-06-2024</td>
                    <td>No</td>
                </tr>
                <tr>
             
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>