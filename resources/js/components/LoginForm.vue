<template>
  <div class="form-container">
    <h1>Login1</h1>
    <form @submit.prevent="loginUser">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" v-model="loginData.email" placeholder="Enter email"/>
      </div>
      <div class="form-group">  
        <label for="password">Password:</label>
        <input type="password" v-model="loginData.password" placeholder="Password"/>
      </div>

      <button type="submit" class="submit-btn">Login</button>
    </form>
    <p v-if="message" class="message">{{ message }}</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'LoginForm',
  data() {
    return {
      loginData: {
        email: '',
        password: ''
      },
      message: ''
    };
  },
  methods: {
    loginUser() {
      axios.post('/api/v1/auth/login', this.loginData)
        .then(response => {
          this.message = 'Login successful!';
          console.log(response);
          // You might want to redirect or save the auth token here
        })
        .catch(error => {
          this.message = 'Login failed: ' + error.response.data.message; // Adjust based on your error response structure
          console.error(error);
        });
    }
  }
}
</script>

<style scoped>

.form-container {
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

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 8px;
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
