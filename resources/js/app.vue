<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <span class="navbar-brand">
                    SHOP
                </span>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="11">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <cart></cart>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <tags></tags>
                </div>
                <div class="col-8">
                    <catalog></catalog>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Cart from './components/cart'
    import Tags from './components/tags'
    import Catalog from './components/catalog'
    export default {
        components: {
            Cart,
            Tags,
            Catalog
        },
    }
</script>
