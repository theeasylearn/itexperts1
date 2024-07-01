<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Subject</span>
            <span><a href="add_subject.php">Add Subject</a></span>
        </div>
    </div>
    <div class="container">
        <?php require_once('inc/message.php'); ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course</th>
                    <th>Title</th>
                    <th>Rate</th>
                    <th width='10%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>P.S.I.</td>
                    <td>History</td>
                    <td>1000</td>
                    <td>
                        <a href="edit_subject.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                        <a href="delete_subject.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>