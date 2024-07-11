<?php
require_once('inc/header-part.php');
require_once('inc/connection.php');
?>
</head>

<body>

    <div class="container">
        <form action="submit/verify_user.php" method="post">
            <table width='50%' align="center" border="2" cellpadding=10>
                <tr>
                    <td colspan="2" align="center">
                        <h1>Login</h1>
                    </td>
                </tr>
                <tr>
                    <td width='35%'>
                        Email
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td width='35%'>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" id="password" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-lock"></i> Login
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <?php
                        include_once('inc/message.php');
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="forgot_password.php">Lost Password? Click here</a>
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>