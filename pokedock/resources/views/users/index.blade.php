<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>

    <h1>Liste des utilisateurs</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id_user</th>
                <th>password_user</th>
                <th>username_user</th>
                <th>credit_user</th>
                <th>fidelity_point_user</th>
                <th>email_user</th>
                <th>add_date_user</th>
            </tr>
        </thead>
        <tbody>
            @each('components.UsersRow', $users, 'user')
        </tbody>
    </table>

</body>
</html>
