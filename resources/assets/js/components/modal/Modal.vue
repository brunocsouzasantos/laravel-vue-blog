<template>
<div class="container">
        <div :id="nome" class="modal fade modal-dialog modal-lg" role="document" :aria-labelledby="nome">
            <div class="modal-content">
                <slot></slot>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
       props:[
           'nome'
       ]
    }
</script>
