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
                    Catalog
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Home from './components/home'
    import Cart from './components/cart'
    import Tags from './components/tags'
    export default {
        data: () => ({
            Component: 'Home'
        }),
        components: {
            Home,
            Cart,
            Tags
        },
    }
</script>
