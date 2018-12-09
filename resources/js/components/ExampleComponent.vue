<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
            <span style="color: #69c;"><font-awesome-icon icon="coffee" /></span>
        </div>
    </div>
</template>

<script>
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faCoffee } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faCoffee)

    export default {
        components: {
            FontAwesomeIcon
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
