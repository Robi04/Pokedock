<!DOCTYPE html>
<html>
<head>
    <title>Shoppacks table</title>
</head>
<body>

    <h1>Shoppacks table</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id_shoppack</th>
                <th>price_shoppack</th>
                <th>name_shoppack</th>
                <th>nb_credit_shoppack</th>
                <th>path_img_shoppack</th>
            </tr>
        </thead>
        <tbody>
            @each('components.ShoppacksTable', $shoppacks, 'shoppack')
        </tbody>
    </table>

</body>
</html>
