<script setup lang="ts">
  let search = ref('')
  let books: Array<Book> = reactive([])

  onMounted(async () => {
    const data = await $fetch<Array<Book>>('http://localhost:8000/api/books', {
      method: "GET",
      // headers: conf.headers,
    });
    for( const d of data ){
      books.push(d)
    }
    console.log(books)
  })

</script>

<template>
  <v-row class="py-4">
    <h2>
      図書検索
    </h2>
  </v-row>

  <v-container>
    <v-row>
      <v-col cols="4">
        <v-text-field v-model="search"></v-text-field>
      </v-col>
      <v-col>
        <v-btn >検索</v-btn>
      </v-col>
    </v-row>

      <v-table >
        <thead>
          <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>出版社</th>
            <th>ISBN</th>
            <th>価格</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="book in books" :key="book.id">
            <td><NuxtLink :to="'/books/'+book.id">{{ book.name }}</NuxtLink> </td>
            <td>{{ book.author }}</td>
            <td>{{ book.publisher }}</td>
            <td>{{ book.ISBN }}</td>
            <td>{{ book.price }}</td>
          </tr>
        </tbody>
      </v-table>

  </v-container>

</template>
  