<?php



$sql = "SELECT * FROM users";
$data = mysqli_query($conn, $sql);

?> 

<table class="table table-hover">
    <thead>
        <tr>
            <th >Sn</th>
            <th >Name</th>
            <th >Email</th>
            <th >Gender</th>
            <th >Role</th>
            <th >Image</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $key => $user): ?>
        <tr>
            <td><?= ++$key; ?></td>
            <td><?= htmlspecialchars($user['name']); ?></td>
            <td><?= htmlspecialchars($user['email']); ?></td>
            <td><?= htmlspecialchars($user['password']); ?></td>
            <td><?= htmlspecialchars($user['gender']); ?></td>
            <td><?= htmlspecialchars($user['role']); ?></td>
            <td>
                
            </td>
            <td>
                <a href="">View</a>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>