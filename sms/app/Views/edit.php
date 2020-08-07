<form method="post" name="frmEdit" action="<?php echo base_url('usersUpdate');?>">
     <table align="center">
        <tr>
            <td colspan="2" align="center">Edit Record</td>
        </tr>
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">
        <tr>
            <td>Name</td>
            <td><input type="text" name="txtName" value="<?php echo $user['name']; ?>"> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="txtEmail" value="<?php echo $user['email']; ?>"> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="txtPassword" value="<?php echo $user['password']; ?>"> </td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="txtCity" value="<?php echo $user['city']; ?>"> </td>
        </tr>
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>