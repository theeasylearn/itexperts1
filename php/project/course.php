<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management - Lecturer's Payment Management System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="menu">
        <h4>Lecturer's Payment <br />Management System</h4>
        <ul>
            <li><a href=""><i class="fa fa-home"></i> Home</a></li>
            <li><a href=""><i class="fa fa-book"></i> Course</a></li>
            <li><a href=""><i class="fa fa-layer-group"></i> Batch</a></li>
            <li><a href=""><i class="fa fa-book-open"></i> Subject</a></li>
            <li><a href=""><i class="fa fa-chalkboard-teacher"></i> Teacher</a></li>
            <li><a href=""><i class="fa fa-chalkboard"></i> Lecture</a></li>
            <li><a href=""><i class="fa fa-money-check-alt"></i> Payment</a></li>
            <li><a href=""><i class="fa fa-chart-bar"></i> Reports</a></li>
            <li><a href=""><i class="fa fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    <div class="heading">
        <div>
            <span>Course</span>
            <span><a>Add Course</a></span>
        </div>
    </div>
    <div class="container">

        <table align="center">
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

</html>