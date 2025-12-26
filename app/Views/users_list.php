<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #333; padding: 8px; }
        th { background: #eee; }
    </style>
</head>
<body>

<h2>Users</h2>
<a href="<?= site_url('users/create') ?>">+ Add New User</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['name']) ?></td>
                <td><?= esc($user['email']) ?></td>
                <td><?= esc($user['age']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No users found</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
