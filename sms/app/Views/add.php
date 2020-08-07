
<form method="post" name="frmAdd" action="<?php echo site_url('usersCreate');?>">
    <table align="center">
        <tr>
            <td colspan="2" align="center">Add Record</td>
        </tr>

        <tr>
            <td>Name</td>
            <td><input type="text" name="txtName"> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="txtEmail"> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="txtPassword"> </td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="txtCity"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
        </tr>
    </table>
</form>