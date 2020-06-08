<?php 
include_once __DIR__ . '/classes/Seller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellers</title>
</head>
<body>
    <header>
        <h1>Sellers</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Years of Exp.</th>
                    <th>Base Country</th>
                    <th>Total Sales</th>
                    <th>Seller Rating</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($sellers as $seller) : ?>
                    <tr>
                        <?php $seller->printSellerInfos() ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>