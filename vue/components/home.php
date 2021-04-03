<script type="text/x-template" id="home">

	    <section class="home">
            <div class="home__title">
                Best goods
            </div>

            <div class="home__wrapper">
                <div class="home__directory">
                    <div v-for="phone in api" class="home__item">

                        <div class="home__item_img">
                            <img src="img/SPECTRUM.gif">
                        </div>

                        <div class="home__item_title">
                            {{ phone.model }} - {{ phone.name }}
                        </div>

                        <div class="home__item_descr">
                            There may be characteristics according to the device.
                        </div>

                        <div class="home__item_price">
                           {{ phone.price }} <span>USD</span> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

</script>

<script>

    let home = {
		template: '#home',
        data: () => {
            return {
                api: [],
                model: ""
            }  
        },
        methods: {
            postPhones(){
                let fd = new FormData()
                fd.append('model', this.model)
                post('api/home/get.php', fd, msg => {
                    this.api = JSON.parse(msg)
                })
            }
        },
        mounted(){
            this.postPhones()
        }

    }
    
</script>

<style>

    .home {
        min-height: 400px;
        padding: 0 50px 0 50px;
        z-index: 1;
        background-color: rgb(248, 248, 248, 64%);
    }

    .home__title {
        display: inline-block;
        color: black;
        padding: 31px 20px 31px 75px;
        font-size: 25px;
    }

    .home__topbar_filter {
        display: inline-block;
    }

    .home__wrapper {
        display: flex;
    }

    .home__directory {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        padding: 0 78px;
        justify-content: space-between;
    }

    .home__item {
        position: relative;
        width: 265px;
        min-height: 415px;
        border-radius: 2px;
        padding: 17px;
        margin-bottom: 10px;
        cursor: pointer;
        box-shadow: 0 0 2px rgba(0,0,0,0.5);
        background-color: #fff;
    }
    .home__item:hover {
        box-shadow: 0 0 13px rgba(0,0,0,0.5);
    }

    .home__item_title {
        padding: 5px 0 0 5px;
        font-size: 16px;
        font-weight: 600;
        /* white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; */
    }

    .home__item_descr {
        padding: 5px 0 20px 5px;
        font-weight: 400;
        font-size: 15px;
    }

    .home__item_price {
        position: absolute;
        font-size: 16px;
        bottom: 15px;
        left: 20px;
        font-weight: 600;
    }
    .home__item_price span {
        font-size: 15px;
    }

    .home__item_img img {
        width: 233px;
        height: 233px;
    }

</style>
