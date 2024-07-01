<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Teacher -> Add Teacher</span>
            <span><a href="teacher.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_teacher.php" method="post"
            enctype="multipart/form-data">
            <table id="input-table">
                <tr>
                    <td width='33%'>fullname</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label for="male"><input type="radio" name="gender" id="male" value="1" required />Male</label>
                        <label for="female"><input type="radio" name="gender" id="female" value="0" required />Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>
                        <input type="text" name="qulification" id="qulification" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>
                        <input type="text" name="experience" id="experience" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Photo (must not exceed 2MB)</td>
                    <td>
                        <input type="file" name="photo" id="photo" accept="image/*" required />
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
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>