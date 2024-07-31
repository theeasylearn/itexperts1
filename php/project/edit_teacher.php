<?php
require_once("inc/verify_login.php");
require_once('inc/connection.php');

require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php');
    extract($_REQUEST);
    $sql = "select * from teacher where id=?";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1, $teacherid);
    $cmd->execute();
    $teacher = $cmd->fetch();
    extract($teacher);
    ?>
    <div class="heading">
        <div>
            <span>Teacher -> Edit Teacher</span>
            <span><a href="teacher.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/update-teacher.php" method="post" enctype="multipart/form-data" >
            <table id="input-table">
                <tr>
                    <td width='33%'>Edit fullname</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" class="input-box" required value="<?= $name; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Edit Mobile</td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" class="input-box" required value="<?= $mobile; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Edit Email</td>
                    <td>
                        <input type="email" name="email" id="email" class="input-box" required value="<?= $email; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Change Gender</td>
                    <?php

                    if ($gender == 0) {
                        $male = null;
                        $female = "checked";
                    } else {
                        $male = "checked";
                        $female = null;
                    }
                    ?>
                    <td>
                        <label for="male"><input type="radio" name="gender" id="male" value="1" required <?= $male ?> />Male</label>
                        <label for="female"><input type="radio" name="gender" id="female" value="0" required <?= $female ?> />Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Edit Qualification</td>
                    <td>
                        <input type="text" name="qulification" id="qulification" class="input-box" required value="<?= $qualification; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Edit Experience</td>
                    <td>
                        <input type="text" name="experience" id="experience" class="input-box" required value="<?= $experience; ?>" />
                    </td>
                </tr>
                <tr>
                    <td valign=top>Change Photo</td>
                    <td>
                        <input type="file" name="photo" id="photo" accept="image/*" />
                        <br />
                        <br />
                        <img src="images/<?= $photo ?>" alt="" class='teacher-photo' />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="teacherid" value="<?= $teacherid ?>" />
            <input type="hidden" name="oldphoto" value="<?= $photo ?>" />
        </form>
    </div>
</body>
<?php
    require_once('inc/footer.php');
?>