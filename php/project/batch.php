<?php
require_once("inc/verify_login.php");
require_once('inc/connection.php');
require_once('inc/datetime_functions.php');
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
        <?php require_once('inc/message.php'); ?>
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
                <?php
                $sql = "select b.*,title from batch b,course c where c.id=courseid order by b.id desc";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                while ($row = $cmd->fetch()) {
                ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo toDMY($row['startdate']); ?></td>
                        <td><?php echo toDMY($row['enddate']); ?></td>
                        <td><?php echo $row['classtime']; ?></td>
                        <td>
                            <a href="edit_batch.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a href="delete_batch.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
                <?php
                } //end of while
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>