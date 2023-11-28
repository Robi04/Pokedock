<!DOCTYPE html>
<html>
<head>
    <title>User orders list</title>
</head>
<body>

    <h1>User order list</h1>
    
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
