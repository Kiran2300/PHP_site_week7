<!--/INCLUDES/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTROBYTE HUB</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="Images/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
                <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>"><a href="about.php">About</a></li>
                <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>"><a href="products.php">Products</a></li>
                <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="search.php" method="get">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>
