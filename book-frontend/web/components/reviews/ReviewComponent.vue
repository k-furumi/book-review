<script setup lang="ts">
 // prop
interface Props {
    review: Review;
}
const props = withDefaults(
  defineProps<Props>(), {  }
);

onMounted(()=>{
    console.log(props.review)
})

</script>

<template>

    <v-container style="border:1px black solid">
        <v-row style="background-color:#c0c0c0;">
                <h4>
                    {{ props.review.title }}
                </h4>
        </v-row>
        <v-row dense>
             <v-rating :readonly="true" v-model="review.rate"></v-rating>                
        </v-row>
        <v-row dense>
             {{ props.review.review }}                
        </v-row>
        <v-row>
            <v-col>
                
            </v-col>
        </v-row>
    </v-container>

</template>