<?php
    require_once("inc/verify_login.php");
    require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Course -> Add Course</span>
            <span><a href="course.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form method="post" action="submit/insert_course.php">
            <table id="input-table">
                <tr>
                    <td width='33%'>Title</td>
                    <td>
                        <input type="text" name="title" id="title" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Fees</td>
                    <td>
                        <input type="number" name="fees" id="fees" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Duration (in days)</td>
                    <td>
                        <input type="number" name="duration" id="duration" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>
                        <textarea class="input-box" name="description" id="description" required>

                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button name="submit" type="submit" class="save">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <?php require_once("inc/message.php") ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>