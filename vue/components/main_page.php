<script type="text/x-template" id="main_page">

	<section class="main_page">
            <div @click=" $root.postPhone() " class="main_page__title">
                Smartphones, TV and electronics
            </div>
            <div class="main_page__topbar_filter">
                <select v-model="model">
                    <option value="">All</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Samsung">Samsung</option>
                    <option value="iPhone">iPhone</option>
                    <option value="Huawei">Huawei</option>
                </select>
            </div>
            <div class="main_page__wrapper">
                <div class="main_page__directory">
                    <div v-for="phone in api" class="main_page__item">

                        <div class="main_page__item_img">
                            <img src="../img/smartphone img.jpg">
                        </div>

                        <div class="main_page__item_title">
                            {{ phone.model }} {{ phone.name }}
                        </div>

                        <div class="main_page__item_descr">
                            There may be characteristics according to the device.
                        </div>

                        <div class="main_page__item_price">
                            Price: {{ phone.price }} USD
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

</script>

<script>

    let mainPage = {
		template: '#main_page',
        props: ['api'],
        data: () => {
            return {
                api: [],
                model: ""
            }  
        },
        methods: {
            postPhone() {
                let fd = new FormData
                /* console.log(this.model) */
                fd.append('model', this.model)
                let xhr = new XMLHttpRequest()
                xhr.open("POST", '../index.php')
                xhr.send(fd)
                xhr.onload = () => {
                    /* console.log(xhr.response) */
                    this.api = JSON.parse(xhr.response)
                    /* console.log(this.api) */
                }
            }
        },
        created() {
            this.postPhone()
        },
        watch: {
            model() {
                this.postPhone()
            }
        }
    }
    
</script>