<!DOCTYPE html>
<html>
<head>
    <title>Users list</title>
</head>
<body>

    <h1>Users list</h1>
    
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
            @each('components.UsersTable', $users, 'user')
        </tbody>
    </table>

</body>
</html>
