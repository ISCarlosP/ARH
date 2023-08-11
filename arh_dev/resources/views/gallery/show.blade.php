<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery</title>
</head>
<body>
    <div id="app">
        <h1>galeria</h1>
        <template v-for="image in productImages">
            <div>
                <img :src="image.product_image_url">
            </div>
        </template>
    </div>


    <script type="module">
        import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
        const app = createApp({
            data() {
                return {
                   productImages: {!! $productImages !!}
                }
            },
            methods: {

            },
        })

        app.mount('#app');
    </script>
</body>
</html>
