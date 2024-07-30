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
                $sql = "select b.*,title from batch b,course c where b.isdeleted=0 and c.id=courseid order by b.id desc";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                while ($row = $cmd->fetch()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo toDMY($row['startdate']); ?></td>
                        <td><?php echo toDMY($row['enddate']); ?></td>
                        <td><?php echo $row['classtime']; ?></td>
                        <td>
                            <a href="edit_batch.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a class="delete"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
                <?php
                } //end of while
                ?>
            </tbody>
        </table>
    </div>
    <!-- jquery  file-->
    <script src="dist/jquery-min.js"></script>
    <script>
        $(document).ready(function() {
            //handle click event on html tag whose classname is delete
            $('.delete').click(function() {
                // alert('delete button clicked')
                var batchid = $(this).parent().parent().find('td:first').text();
                // alert(batchid);
                var table = "batch";
                var row = $(this).parent().parent();
                var pageAddress = "ajax/delete_row.php";
                var data = {
                    rowid: batchid,
                    tablename: table
                };
                $.post(pageAddress, data, function(response) {
                    console.log(response);
                    $(row).fadeOut(1000,function(){
                        $(row).remove();
                    });
                })
            });
        });
    </script>
</body>
<?php
require_once('inc/footer.php');
?>