<!DOCTYPE html>
<html>
<head>
    <title>User orders table</title>
</head>
<body>

    <h1>User order table</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id_user_order</th>
                <th>id_user</th>
                <th>state_order</th>
                <th>state_date</th>
            </tr>
        </thead>
        <tbody>
            @each('components.UserOrdersTable', $user_orders, 'user_order')
        </tbody>
    </table>

</body>
</html>
