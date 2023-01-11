<script setup lang="ts">
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

  const registerForm = ref()

  const requiredRule = (value: any) => !!value || '必ず入力してください'
  const limitLengthRule = (value: any) => value.length <= 50 || '50文字以内で入力してください' // 文字数の制約
  const amountRule = (value: any) => value <= 99999 && value >= 0 || '0円～99999円以内で入力してください' // 文字数の制約
    
  const register = async () => {

    const validResult = await registerForm.value.validate()
      if (!validResult.valid) {
        return
      }

    $fetch('http://localhost:8000/api/books', {
      method: 'post',
      body: book,
    }).then( (res) => {
      alert('登録しました')
      navigateTo({ path: '/',})

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
        <v-col>
          <v-text-field label="タイトル" v-model="book.name" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
        <v-col>
          <v-text-field label="よみがな" v-model="book.name_sound" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
      </v-row>
      <v-row>
        <v-col>
          <v-text-field label="著者" v-model="book.author" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
        <v-col>
          <v-text-field label="出版社" v-model="book.publisher" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
      </v-row>

      <v-row>
        <v-col>
          <v-text-field label="ISBN" v-model="book.ISBN" :rules="[requiredRule, limitLengthRule]" max="50" counter="50"></v-text-field>
        </v-col>
        <v-col>
          <v-text-field label="価格" v-model="book.price" type="number" max="99999" min="0" :rules="[requiredRule, amountRule]"></v-text-field>
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
  