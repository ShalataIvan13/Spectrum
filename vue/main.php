<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

</head>

<body>
    <div id="app">
        <header class="header">
            <div class="header__logo">
                <a href="#" class="header__title">
                    <img src="../icon/logo2.png" class="header__logo_img">
                    Spectrum
                </a>
            </div>

            <div class="header__wrapper_menu">
                <p @click="showMainPage=true" class="header__menu_item">
                    Main
                </p>
                <p class="header__menu_item">
                    Smartphone
                </p>
                <p class="header__menu_item">
                    Laptops
                </p>
                <p class="header__menu_item">
                    TV sets
                </p>
                <p class="header__menu_item">
                    About us
                </p>
            </div>

            <div class="header__search">
                <input type="text" placeholder="Enter what you want to find">
                <div class="header__button">
                    <button class="header__button_search">Search</button>
                </div>
                <button class="header__button_basked"></button>
            </div>
        </header>

        <app-main-page v-show="showMainPage"></app-main-page>

    </div>

    <?php require ("components/main_page.php") ?>

    <script>

        let app = new Vue({
            el: '#app',
            data: {
                api: [],
                model: "",
                showMainPage: true
            },
            components: {
                'app-main-page': mainPage
            },
            methods: {
                
            },
        })

    </script>

</body>

</html>