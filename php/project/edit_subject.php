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
            <span>Subject -> Edit Subject</span>
            <span><a href="subject.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="">
            <table id="input-table">
                <tr>
                    <td width='33%'>Change course</td>
                    <td>
                        <select name="courseid" id="courseid" class="input-box" required>
                            <option value="">select course</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Edit Title</td>
                    <td>
                        <input type="text" name="title" id="title" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Edit Rate</td>
                    <td>
                        <input type="number" name="rate" id="rate" class="input-box" required />
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save Changes
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