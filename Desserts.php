<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cakes</title>
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/e15bba1921.js"
      crossorigin="anonymous"
    ></script>
</head>

<body>
<?
      include 'header.php';
    ?>

    <section class="fotoMenu teksti">
        <h1>Go to <a href="Categories.html" class="textCategory">"Categories"</a>
            for more desserts </h1>
    </section>


    <div class="dessMenu">
        <h3>Dessert Menu</h3>
    </div>

    <div class="menu">
        <div class="elementet">
            <div class="kolona1">
                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/1.jpg" alt="foto">
                    </div>
                    <div class="data">
                        <h2>Chocolate biscuits</h2>
                        <p class="cmimi">1.5€</p>
                        <p>Round biscuit with choco chunks</p>

                        <a href="Order.html">
                            <button href="Order.html" class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>

                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/2.jpg" alt="foto">
                    </div>

                    <div class="data">
                        <h2>Strawberry crepes</h2>
                        <p class="cmimi">3.0€</p>
                        <p>Crepes with chocolate and strawberries</p>

                        <a href="Order.html">
                            <button class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>

                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/3.jpg" alt="foto">

                    </div>
                    <div class="data">
                        <h2>Vanilla cake</h2>
                        <p class="cmimi">3.0€</p>
                        <p>Round cake with vanilla icing</p>

                        <a href="Order.html">
                            <button class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="kolona2">
                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/4.jpg" alt="foto">

                    </div>
                    <div class="data">
                        <h2>Cup cakes</h2>
                        <p class="cmimi">2.5€</p>
                        <p>Cup cakes with fruit topings</p>

                        <a href="Order.html">
                            <button class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>

                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/5.jpg" alt="foto">

                    </div>
                    <div class="data">
                        <h2>Donuts</h2>
                        <p class="cmimi">1.5€</p>
                        <p>Donuts made with colorful fruity topings</p>

                        <a href="Order.html">
                            <button class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>

                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/6.jpg" alt="foto">
                    </div>
                    <div class="data">
                        <h2>Orange tarte</h2>
                        <p class="cmimi">1.5€</p>
                        <p>Small tartes with orange</p>

                        <a href="Order.html">
                            <button class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?
    include 'footer.php';
    ?>
</body>

</html>