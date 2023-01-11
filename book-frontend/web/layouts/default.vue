<script setup lang="ts">
    import DefaultHeader from '~/components/common/DefaultHeader.vue'

</script>

<template>
    <v-app >
        <DefaultHeader />
        <v-main>
            <v-container>
                <NuxtPage />
            </v-container>
        </v-main>

    </v-app>
    
</template>