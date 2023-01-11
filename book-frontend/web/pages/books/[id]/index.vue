<script setup lang="ts" >

    import ReviewComponent from '~~/components/reviews/ReviewComponent.vue';
    const route = useRoute();
    const { id } = route.params;

    let book: Book = reactive( {
      id: 0, 
      name:'',
      ISBN:'',
      name_sound:'',
      author:'',
      publisher:'', 
      price:0, 
      created_at: null, 
      updated_at: null, 
      deleted_at: null
    })


    onBeforeMount(  async () => {
        const temp = await $fetch<Book>('http://localhost:8000/api/books/'+id)
            book.id = temp.id 
            book.name = temp.name
            book.name_sound = temp.name_sound
            book.ISBN = temp.ISBN
            book.author = temp.author
            book.publisher= temp.publisher
            book.created_at = temp.created_at
            book.updated_at = temp.updated_at
            book.deleted_at = temp.deleted_at        
    })

    let reviews: Array<Review> = reactive([])

onMounted(async () => {
  const data = await $fetch<Array<Review>>('http://localhost:8000/api/books/'+id+'/reviews', {
    method: "GET",
    // headers: conf.headers,
  });
  for( const r of data ){
    reviews.push(r)
  }
})

const average = ():number => {
  if( !reviews )return 0
  let total:number = reviews.reduce( (a, x) => {return a + x.rate }, 0)
  return Math.round( total / reviews.length *10) / 10
}
    
</script>

<template>

  <v-row class="py-4">
    <h2>
      図書詳細
    </h2>
  </v-row>

  <v-container>
      <v-row>
        <v-col cols="3">
            <img src="/image/noimage.jpg" style="width:100%">
        </v-col>

        <v-col>
            <v-card>
                <v-card-title>
                    {{ book.name }} 
                </v-card-title>
                <v-card-subtitle>
                    {{ book.name_sound }} 
                </v-card-subtitle>
                <v-card-text>
                    <v-row>
                        <v-col>著者：{{ book.author }}</v-col>
                        <v-col>出版社：{{ book.publisher }}</v-col>
                    </v-row>
                    <v-row>
                        <v-col>ISBN：{{ book.ISBN }}</v-col>
                        <v-col>価格：{{ book.price.toLocaleString() }}円</v-col>
                    </v-row>
                    <v-row>
                        <v-col class="text-right">
                          <v-rating :model-value="average()" size="x-large" half-increments></v-rating>
                        </v-col>
                        <v-col>
                          <div class="text-h4 d-flex align-items-center">{{ average() }}</div>
                        </v-col>
                    </v-row>
                
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>

    <v-row>
        <v-col>
            <h4>みんなの感想</h4>
        </v-col>
        <v-col class="text-right">
            <v-btn :to="'/books/'+id+'/create'" color="success">新規レビュー</v-btn>
        </v-col>
    </v-row>
    <br />
    <div v-for="review in reviews" :key="review.id">
        <ReviewComponent class="my-2" :review="review"></ReviewComponent>
        
    </div>



  </v-container>

    
</template>