
<div id="app">
    <header class="header">

        <nav>
            <transition name="fade" mode="out-in">
                <div class="header__humburger_btn" v-if="!showMenu" @click="showMenu = !showMenu" key="menu"> 
                    <img src="icon/humburger.png"> 
                </div>

                <div class="header__humburger_btn" v-else @click="showMenu = !showMenu" key="clear">
                    <img src="icon/clear.png">
                </div>
            </transition>

            <transition name="fade">
                    <ul v-if="showMenu" class="header__humburger_menu">
                        <li class="header__humburger_menu_item">
                            Home
                        </li>
                        <li class="header__humburger_menu_item">
                            Smartphones
                        </li>
                        <li class="header__humburger_menu_item">
                            Laptops
                        </li>
                        <li class="header__humburger_menu_item">
                            TV sets
                        </li>
                        <li class="header__humburger_menu_item">
                            About us
                        </li>
                    </ul>
            </transition>
        </nav>

        <div class="header__logo">
            <a href="#" class="header__title">
                <!-- <img src="../icon/logo2.png" class="header__logo_img"> -->
                Spectrum
            </a>
        </div>

        <div class="header__border_line"></div>

        <div class="header__phoneNumber">
            0-888-777-666
        </div>

        <div class="header__border_line"></div>

        <div class="header__search">
            <input type="text" placeholder="What are you looking for?">
            <div class="header__button">
                <button class="header__button_search">Search</button>
            </div>
        </div>

        <div class="header__border_line"></div>

        <div class="header__button_basket">
            <img src="icon/basket.png"></img>
            <div>Basket</div>
        </div>

        <div class="header__border_line"></div>

        <div class="header__login">
            <img src="icon/persone.png">
            <span class="header__login_descr">Sing in</span>
            <span class="header__login_descr">Sing up</span>
        </div>

    </header>

    <app-home-slider></app-home-slider>

    <app-home-page></app-home-page>

</div>


<script>

    let app = new Vue({
        el: '#app',
        data: {
            showMenu: false
        },
        components: {
            'app-home-page': home,
            'app-home-slider': homeSlider
        },
        methods: {

        }
    })

</script>
