<?php
require_once("inc/connection.php");
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
        <?php
        require_once("inc/message.php");
        ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th width='3%'>Action</th>
                    <th>Id</th>
                    <th>Course</th>
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
                <?php
                $sql = "select l.id as id, l.duration as duration,amount,lecturedate,payoutid,t.name,c.title as coursetitle, s.title as subjecttitle,classtime from lecture l,course c, subject s, teacher t,batch b where l.batchid=b.id and l.teacherid=t.id and l.subjectid=s.id and b.courseid=c.id order by l.id desc";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $table = $cmd->fetchAll();
                foreach ($table as $row) {
                    extract($row);
                ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="">
                        </td>
                        <td><?= $id; ?></td>
                        <td><?= $coursetitle; ?></td>
                        <td><?= $classtime; ?></td>
                        <td><?= $subjecttitle; ?></td>
                        <td><?= $name; ?></td>
                        <td><?= $duration; ?> minutes</td>
                        <td><?= $amount; ?></td>
                        <td><?= $lecturedate; ?></td>
                        <td><?php 
                            if($payoutid == null)
                                echo "No";
                            else 
                                $payoutid;
                        ?></td>
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