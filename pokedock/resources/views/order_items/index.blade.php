<!DOCTYPE html>
<html>
<head>
    <title>Order items list</title>
</head>
<body>

    <h1>Order items list</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id_user_order</th>
                <th>id_choppack</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            @each('components.OrderItmesTable', $order_items, 'order_item')
        </tbody>
    </table>

</body>
</html>
