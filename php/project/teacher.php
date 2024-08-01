<?php
require_once("inc/connection.php");
require_once('inc/header-part.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Teacher</span>
            <span><a href="add_teacher.php">Add Teacher</a></span>
        </div>
    </div>
    <div class="container">
        <?php require_once('inc/message.php'); ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Mobile <br />
                        Email
                    </th>
                    <th>Gender</th>
                    <th>Qualification <br />
                        Experience
                    </th>
                    <th width='8%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from teacher order by id desc";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                //fetch all rows 
                $table = $cmd->fetchAll();
                foreach ($table as $row) {
                    extract($row);
                ?>
                    <tr>
                        <td><?= $id; ?></td>
                        <td><?= $name; ?></td>
                        <td>
                            <a class="example-image-link" href="images/<?= $photo; ?>" data-lightbox="example-1">
                                <img class="example-image" height='100px' src="images/<?= $photo; ?>" alt="">
                            </a>
                        </td>
                        <td>Mo : <?= $mobile; ?> <br />
                            Email : <?= $email; ?>
                        </td>
                        <td><?= $gender; ?></td>
                        <td>
                            <?= $qualification; ?> <br/>
                            <?= $experience; ?> <br/>
                        </td>
                        <td>
                            <a href="edit_teacher.php?teacherid=<?= $id; ?>"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a href="delete_teacher.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
                <?php } //end of loop 
                ?>
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
<?php
require_once('inc/footer.php');
?>