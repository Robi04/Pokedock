<!DOCTYPE html>
<html>
<head>
    <title>Shoppacks list</title>
</head>
<body>

    <h1>Shoppacks list</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>id_shoppack</th>
                <th>price_shoppack</th>
                <th>nb_credit_shoppack</th>
                <th>path_img_shoppack</th>
            </tr>
        </thead>
        <tbody>
            @each('components.shoppacksTable', $shoppacks, 'shoppack')
        </tbody>
    </table>

</body>
</html>
