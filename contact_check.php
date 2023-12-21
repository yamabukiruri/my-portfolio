<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHi's Portfolio</title>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/e0c979d72c.js" crossorigin="anonymous"></script>
        <!--CSS-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <!--ファビコン-->
        <link rel ="icon" type="image/png" href="images/favicon.png">
        <!--フォント-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>    
            <h1>CHi's Portfolio</h1>
            <nav id="header-list">
                <ul>
                    <li onclick="location.href='#about'"><span>A</span>bout</li>
                    <li onclick="location.href='#works'"><span>W</span>orks</li>
                    <li onclick="location.href='#contact'"><span>C</span>ontact</li>
                </ul> 
            </nav>
        </header>
        <div id="menu">
            <div id="bars-icon">
                <i class="fa-solid fa-bars fa-3x" id="bars"></i>
            </div>
            <div id="xmark-icon" class="hide">
                <i class="fa-solid fa-xmark fa-3x" id="xmark"></i>
            </div>
            <div id="mask1" class="hide"></div>
        </div>
        <div id="menu-list" class="hide">
            <ul>
                <li onclick="location.href='#about'" class="menu-list-li">About</li>
                <li onclick="location.href='#works'" class="menu-list-li">Works</li>
                <li onclick="location.href='#contact'" class="menu-list-li">Contact</li>
            </ul>
        </div>
        <main>
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $message = htmlspecialchars($message);

            echo $name;
            echo $email;
            echo $message;
            
            ?>
        </main>
        <footer>
            <div class="container">
                <p>&copy; CHi</p>
            </div>
        </footer>

        <!--JavaScript-->
        <script src="script.js"></script>
    </body>
</html>