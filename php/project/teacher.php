<?php
require_once('inc/header-part.php');
?>
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

        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Mobile <br/>
                        Email
                        </th>
                    <th>Gender</th>
                    <th>Qualification <br/>
                        Experience
                    </th>
                    <th width='8%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rahul Mehta</td>
                    <td>
                        <img src="http://picsum.photos/100" alt="">
                    </td>
                    <td>Mo : 1234567890 <br/>
                        Email : rahul@gmail.com
                    </td>
                    <td>Male</td>
                    <td>
                        M.com, B.ed 
                    </td>
                    <td>
                        <a href="edit_teacher.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                        <a href="delete_teacher.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                    </td>
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