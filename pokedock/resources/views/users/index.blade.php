<!DOCTYPE html>
<html>
<head>
    <title>Users table</title>
</head>
<body>

    <h1>Users table</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>email_vefified_at</th>
                <th>password</th>
                <th>profile_photo_path</th>
                <th>credit</th>
                <th>fidelity_point</th>
                <th>create_at</th>
                <th>update_at</th>
            </tr>
        </thead>
        <tbody>
            @each('components.UsersTable', $users, 'user')
        </tbody>
    </table>

</body>
</html>
