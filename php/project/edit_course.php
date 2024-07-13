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
            <span>Course -> Edit Course</span>
            <span><a href="course.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="">
            <table id="input-table">
                <tr>
                    <td width='33%'>Edit Title</td>
                    <td>
                        <input type="text" name="title" id="title" class="input-box" 
                        required value="PSI" />
                    </td>
                </tr>
                <tr>
                    <td>Edit Fees</td>
                    <td>
                        <input type="number" name="fees" id="fees" class="input-box" 
                        required value="25000" />
                    </td>
                </tr>
                <tr>
                    <td>Edit Duration (in days)</td>
                    <td>
                        <input type="number" name="duration" id="duration" class="input-box" required value="180" />
                    </td>
                </tr>
                <tr>
                    <td>Edit description</td>
                    <td>
                        <textarea class="input-box" name="description" id="description">SAMPLE DETAIL GOES HERE
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save changes
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>