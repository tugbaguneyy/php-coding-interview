<!-- //Create a PHP script that shows a list of products in a simple e-commerce catalog. Each product will have a name, description, price and featured image. 
//You can store the product data in an array, a JSON file or a database. 
//The script should generate an HTML page that will display the product details in a user-friendly format. -->

<?php
$products=[
    [
        "name" => "Laptop",
        "description" => "A high-performance laptop for work and play.",
        "price" => 1200,
        "image"=>"image.jpg"
    ],
    [
        "name" => "Smartphone",
        "description" => "A sleek smartphone with an amazing camera.",
        "price" => 800,
        "image" => "image.jpg"
    ],
    [
        "name" => "Headphones",
        "description" => "Noise-cancelling headphones for an immersive sound experience.",
        "price" => 150,
        "image" => "image.jpg"
    ],
    [
        "name" => "Smartwatch",
        "description" => "Track your fitness and stay connected with this smartwatch.",
        "price" => 200,
        "image" => "image.jpg"
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>
    <h1>Product Catalog</h1>
    <?php foreach ($products as $product): ?>
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="150">
    <?php endforeach; ?>
</body>
</html>