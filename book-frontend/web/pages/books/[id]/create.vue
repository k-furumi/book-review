<script setup lang="ts">
    const route = useRoute();
    const { id } = route.params;

  let review: Review = reactive( {
    id: 0, 
    title:'',
    review:'',
    user_id:1,
    parent_id: null,
    book_id: Number(id),
    rate: 0,
    created_at: null, 
    updated_at: null, 
    deleted_at: null
  })

  const registerForm = ref()

  const requiredRule = (value: any) => !!value || '必ず入力してください'
  const limitLengthRule = (value: any) => value.length <= 50 || '50文字以内で入力してください' // 文字数の制約
    
  const register = async () => {

    const validResult = await registerForm.value.validate()
    if (!validResult.valid) {
        return
    }

    $fetch('http://localhost:8000/api/books/'+id+'/reviews', {
      method: 'post',
      body: review,
    }).then( (res) => {
      alert('登録しました')
      navigateTo({ path: '/books/'+id })

    } ).catch( err => {
      alert(err)
    } )
  }


</script>

<template>

    <v-row class="py-4">
      <h2>
        図書登録
      </h2>
    </v-row>
    <v-form ref="registerForm">
      <v-row>
        <v-col cols="8">
          <v-text-field label="タイトル" v-model="review.title" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
        <v-col cols="4">
          <v-rating v-model="review.rate"></v-rating>
          
        </v-col>
      </v-row>
      <v-row>
        <v-col>
          <v-textarea label="レビュー" v-model="review.review" :rules="[requiredRule]"></v-textarea>
        </v-col>
      </v-row>

      <v-row>
        <v-spacer></v-spacer>
        <v-col cols="3">
          <v-btn @click="register" block large color="primary">登録</v-btn>
        </v-col>
      </v-row>
    </v-form> 
  
</template>
  