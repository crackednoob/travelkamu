<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
<?php
    $nomor = 1;
    foreach ($tbuser as $row){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password; ?></td>
            <td><?php echo $row->level; ?></td>
            <td><a href="<?php echo base_url('index.php/User/del/'.$row->id);?>">Hapus</a> | Edit</td>
        </tr>
    <?php
    }
    ?>
    </table>
    <a href="<?php echo base_url('')?>">View Form</a>
</body>
</html>