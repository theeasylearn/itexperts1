<?php 
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
                <tr>
                    <td>1</td>
                    <td>P.S.I</td>
                    <td>25000</td>
                    <td>180 days</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus est, nemo impedit ipsam quae et veniam similique quisquam earum quos modi excepturi nesciunt neque, quas fuga itaque voluptatem quam libero.</td>
                    <td>
                        <a href="course-edit.php"><i class="fa fa-edit fa-2x"></i></a>
                        <a href="course-delete.php"><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Clerk</td>
                    <td>28000</td>
                    <td>200 days</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus est, nemo impedit ipsam quae et veniam similique quisquam earum quos modi excepturi nesciunt neque, quas fuga itaque voluptatem quam libero.</td>
                    <td>
                        <a href="course-edit.php"><i class="fa fa-edit fa-2x"></i></a>
                        <a href="course-delete.php"><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php 
    require_once('inc/footer.php');
?>