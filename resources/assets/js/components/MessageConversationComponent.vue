<template>
    <b-media :right-align="writtenByMe"  vertical-align="center" class="mb-2">
        <b-img slot="aside" rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder" />
        <!-- <b-card>{{ content }}</b-card> -->
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>        
</template>


<script>   
    export default {
        props: {
            writtenByMe: Boolean
        },
        data(){
            return {
            };
        }
    }
</script>
