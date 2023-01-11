<script setup lang="ts">
    const title = '図書レビュー投稿サイト'
</script>

<template>
    <v-toolbar :title="title">
        <v-btn to="/register" text>図書登録</v-btn>
        <v-btn to="/" text>図書検索</v-btn>
    </v-toolbar>
</template>