<script setup>

</script>

<template>
    <div class="form-container">
      <h1>Register</h1>
      <form @submit.prevent="registerUser" class="form">
        <input type="text" v-model="user.name" placeholder="Name" required class="input-field" />
        <input type="email" v-model="user.email" placeholder="Email" required class="input-field" />
        <input type="password" v-model="user.password" placeholder="Password" required class="input-field" />
        <input type="password" v-model="user.password_confirmation" placeholder="Confirm Password" required class="input-field" />
        <button type="submit" class="submit-btn">Register</button>
      </form>
      <p v-if="message" class="message">{{ message }}</p>
    </div>
  </template>
  
  <style scoped>
  .form-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .form {
    display: flex;
    flex-direction: column;
  }
  
  .input-field {
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .submit-btn {
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .message {
    color: red;
    text-align: center;
  }
  </style>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'RegisterForm',
    data() {
      return {
        user: {
          name: '',
          email: '',
          password: '',
          password_confirmation: ''
        },
        message: ''
      };
    },
    methods: {
      registerUser() {
        axios.post('/api/v1/auth/register', this.user)
          .then(response => {
            this.message = 'Registration successful!';
            console.log(response);
          })
          .catch(error => {
            this.message = 'Registration failed!';
            console.error(error);
          });
      }
    }
  }
  </script>
  