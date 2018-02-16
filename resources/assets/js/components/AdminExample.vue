<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">I`m test admin component</div>

                    <div class="panel-body">
                        <sub-example></sub-example>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SubExample from './SubExample.vue';
    export default {
      components:{
        SubExample
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
