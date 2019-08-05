<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div id="app">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3 mt-3" v-for="item in list">
                            <router-link class="card-header" :to="{name: 'post', params: {slug: item.slug}}" v-text="item.title"></router-link>

                            <div class="card-body">
                                <p class="card-text" v-text="item.excerpt"></p>
                            </div>
                        </div>

                        <infinite-loading @distance="1" @infinite="infiniteHandler">
                            <div slot="no-more">--</div>
                            <div slot="spinner">Cargando...</div>
                            <div slot="no-results">Sin resultados</div>
                        </infinite-loading>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- development version, includes helpful console warnings -->
    <script src="https://unpkg.com/vue-infinite-loading@^2/dist/vue-infinite-loading.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    list: [],
                    page: 0
                }
            },
            methods: {
                infiniteHandler($state) {
                    this.page++
                    let url = 'http://68.183.24.179:8090/phonereport/' + this.page
                    axios.get(url)
                    .then(response => {
                        let posts = response.data
                        if(posts.length){
                            this.list = this.list.concat(posts)
                            $state.loaded()
                        }else{
                            $state.complete()
                        }
                    })
                }
            }
        });
    </script>
</body>
</html>
