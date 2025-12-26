<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h2>Create User</h2>

<?php if (session()->getFlashdata('errors')): ?>
    <ul style="color:red;">
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" action="<?= site_url('users/store') ?>">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?= old('name') ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?= old('email') ?>"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" value="<?= old('age') ?>"><br><br>

    <button type="submit">Create</button>
</form>

<br>
<a href="/users">Back to Users</a>

</body>
</html>
