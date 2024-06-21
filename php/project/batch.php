<?php
    require_once('inc/header-part.php');
?>
</head>
<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Batch</span>
            <span><a href="add_batch.php">Add batch</a></span>
        </div>
    </div>
    <div class="container">
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Class time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>P.S.I.</td>
                    <td>Tue 19-06-2024</td>
                    <td>fri 19-11-2024</td>
                    <td>06:00 am to 08:00 am</td>
                    <td>
                        <a href="edit_batch.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                        <a href="delete_batch.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>