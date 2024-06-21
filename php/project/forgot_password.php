<?php
require_once('inc/header-part.php');
?>
</head>

<body>

    <div class="container">
        <form action="">
            <table width='50%' align="center" border="2" cellpadding=10>
                <tr>
                    <td colspan="2" align="center">
                        <h1>Recover Account</h1>
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
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa-solid fa-life-ring"></i> Recover
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="index.php">Login</a>
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>