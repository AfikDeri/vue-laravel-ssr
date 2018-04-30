<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Hello Vue SSR</h1>
                <div class="card card-default">
                    <div class="card-header">Main Vue.JS App component</div>

                    <div class="card-body text-center">
                        <h2>{{ title }}</h2>
                        <button @click="toggle">Toggle Me</button>
                        <div v-show="visible">
                            <a href="https://www.youtube.com/channel/UCj9VatwdukZjNOnIKcpWcsA">
                                <img src="https://cdn.pbrd.co/images/HdwCut8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'We Code Tutorials',
                visible: false
            };
        },
        methods: {
            toggle() {
                this.visible = !this.visible;
            }
        }
    }
</script>
