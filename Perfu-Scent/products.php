<!DOCTYPE HTML>
<html>
    <body>
        <head>
            <title>
                Products
            </title>
        </head>
        <main>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/products.css">
            
            <div class="div-1">
                <table>
                    <tbody>
                        <tr>
                            <h1 class="logo">
                                Perfu<span>-Scent</span>
                                <img src="images/icons/perfume_pressed.png" alt="">
                                <a href="index.php"></a>
                            </h1>
                        </tr>

                        <!--Open menu image
                        <img class="open-menu" src="images/icons/menu.png" alt="">-->

                        <tr class="container">
                        <!--Close menu image
                            <img class="close-menu" src="images/icons/close_menu.png" alt="">-->
                            <td class="navbar">
                                <a href="index.php">Home</a>
                                <a href="products.html">Products</a>
                                <a href="login.php">Login</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1>Products</h1>
        
            <div class="wrapper">
                <div id="search-container">
                    <input 
                        type="search"
                        id="search-input"
                        placeholder="Seach product name..."
                    >
                    <button id="search">Search</button>
                </div>

                <div id="buttons">
                    <button class="button-value"
                    onclick="filterProduct('all')">All</button>
                    
                    <button class="button-value"
                    onclick="filterProduct('ladies')">Ladies</button>

                    <button class="button-value"
                    onclick="filterProduct('unisex')">Unisex</button>

                    <button class="button-value"
                    onclick="filterProduct('gentlemen')">Gentlemen</button>

                    <button class="button-value"
                    onclick="filterProduct('oud')">Oud</button>

                </div>

                <div id="products">

                </div>

            </div>
            <!--
            <div class="perfume-images">
                <img class="bae" src="images/60ml/bae.jpg" alt="Bae">
                <img class="belle" src="images/60ml/belle-belle.jpg" alt="Bell-Belle">
                <img class="berry-berry" src="images/60ml/berry-berry.jpg" alt="Berry-Berry">
                <img class="dezireBlue" src="images/60ml/dezireBlue.jpg" alt="Dezire Blue">
                <img class="dizireRed" src="images/60ml/dizireRed.jpg" alt="Dezire Red">
                <img class="flawless" src="images/60ml/flawless.jpg" alt="Flawless">
                <img class="gorgeusGirl" src="images/60ml/gorgeusGirl.jpg" alt="Gorgeus Girl">
                <img class="herPoison" src="images/60ml/herPoison.jpg" alt="Her Poison">
                <img class="hotForHer" src="images/60ml/hotForHer.jpg" alt="Hot For Her">
                <img class="on_my_wayy" src="images/60ml/on_my_wayy.jpg" alt="On my wayy">
                <img class="sweetCandle" src="images/60ml/sweetCandle.jpg" alt="Sweet Candle">
                <img class="yello_oud" src="images/60ml/yello_oud.jpg" alt="Yello oud">
                <img class="Kashmiri" src="images/60ml/Kashmiri-Oud-1-scaled.jpg" alt="Kashmiri Oud">
                <img class="low_white" src="images/60ml/low_white.jpg" alt="Low white">
                <img class="black_oud" src="images/60ml/black_oud.jpg" alt="Black oud">
                <img class="blueSavage" src="images/60ml/blueSavage.jpg" alt="Blue Savage">
                <img class="blueSea" src="images/60ml/blueSea.jpg" alt="Blue Sea">
                <img class="diezel" src="images/60ml/diezel.jpg" alt="Diezel">
                <img class="goldenBoy" src="images/60ml/goldenBoy.jpg" alt="Golden Boy">
                <img class="greenSecret" src="images/60ml/greenSecret.jpg" alt="Green Secret">
                <img class="hotForHim" src="images/60ml/hotForHim.jpg" alt="Hot For Him">
                <img class="oud" src="images/60ml/oud-d-great.jpg" alt="Oud D' Great">
                <img class="saad" src="images/60ml/saad.jpg" alt="SA'AD">
                <img class="selver" src="images/60ml/selver-sense.jpg" alt="Selver Sense">
                <img class="sky" src="images/60ml/sky-oud.jpg" alt="Sky Oud">
                <img class="stallion" src="images/60ml/stallion.jpg" alt="Stallion">
                <img class="vertex" src="images/60ml/vertex.jpg" alt="Vertex">
            </div> -->
            
        </main>

        <script src="javascript/script.js"></script>

        <footer>
            &copy;Perfu-Scent est 2024
        </footer>
    </body>
</html>