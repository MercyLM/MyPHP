<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 作業 1</title>
    <style>
        td {

            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>姓名</td>
            <td>
                <?php echo $_POST["memName"]; ?>
            </td>
        </tr>
        <tr>
            <td>帳號</td>
            <td>
                <?php echo $_POST["memId"]; ?>
            </td>
        </tr>
        <tr>
            <td>密碼</td>
            <td>
                <?php echo $_POST["memPsw"]; ?>
            </td>
        </tr>
        <tr>
            <td>e-mail</td>
            <td>
                <?php echo $_POST["email"]; ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php echo $_POST["sex"]; ?>
            </td>
        </tr>
        <tr>
            <td>生日</td>
            <td>
                <?php echo $_POST["birthday"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                聯絡電話
            </td>
            <td>
                <?php echo $_POST["tel"]; ?>
            </td>
        </tr>
    </table>
</body>

</html>