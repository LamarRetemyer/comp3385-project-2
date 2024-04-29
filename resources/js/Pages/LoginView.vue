<template>
    <div class="login-container">
      <h1>Login</h1>
      <form @submit.prevent="login">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" v-model="credentials.username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" v-model="credentials.password" required>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LoginView',
    data() {
      return {
        credentials: {
          username: '',
          password: ''
        }
      };
    },
    methods: {
      login() {
        // Placeholder for actual login logic
        console.log('Attempting to log in with:', this.credentials);
        // Typically you would send a request to your server here
        // this.$axios.post('/api/login', this.credentials)
        //   .then(response => {
        //     console.log('Logged in successfully:', response);
        //   })
        //   .catch(error => {
        //     console.error('Login error:', error);
        //   });
      }
    }
  }
  </script>
  
  <style scoped>
  .login-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
    line-height: 20px;
    box-sizing: border-box;
  }
  </style>
  