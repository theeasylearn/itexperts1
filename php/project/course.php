<?php
    require_once("inc/verify_login.php");   
    require_once('inc/connection.php');
    require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Course</span>
            <span><a href="add_course.php">Add Course</a></span>
        </div>
    </div>
    <div class="container">
        <?php require_once('inc/message.php'); ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fees</th>
                    <th>Duration</th>
                    <th>Detail</th>
                    <th width='15%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "select * from course where isdeleted=0 order by id desc";
                    $cmd = $db->prepare($sql);
                    $cmd->execute();
                    //fetch record from result one by one
                    while($row = $cmd->fetch())
                    {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['fees']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="edit_course.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a href="delete_course.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
               <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>