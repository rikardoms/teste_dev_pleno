<html>
<head>
    <title>Codeigniter 4 CRUD (Create Read Update Delete) Tutorial - Nicesnippets.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td colspan="5" align="right"><a href="<?php echo site_url('usersCreate') ?>">Add</a></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>City</td>
            <td>Action</td>
        </tr>
        <?php
            foreach($users_detail as $value){
        ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['password']; ?></td>
            <td><?php echo $value['city']; ?></td>
            <td><a  href="<?php echo base_url(); ?>/usersEdit/<?php echo $value['id']; ?>">Edit</a> <a  href="<?php echo base_url(); ?>/usersDelete/<?php echo $value['id']; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html> 