<template>
    <div class="container">
      <!-- Text and buttons section -->
      <div class="text-section">
        <h1>Welcome to United Auto Sales</h1>
        <p>United Auto Sales provides the fastest, easiest and most user-friendly way to buy or sell cars online. Find a Great Price on the Vehicle You Want.</p>
        <button @click="navigateToRegister" class="register-btn">Register</button>
        <button @click="navigateToLogin" class="login-btn">Login</button>
      </div>
      
      <!-- Image section -->
      <div class="image-section">
        <img src="/images/Koenisegg.png" alt="Car Image">
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Welcome',
    methods: {
      navigateToRegister() {
        this.$router.push('/register'); // Navigates to the Register page
      },
      navigateToLogin() {
        this.$router.push('/login'); // Navigates to the Login page
      }
    }
  };
  </script>
  
  <style scoped>

.container {
    display: flex;
    height: 100vh;
    width:100vw;
    background-color: #f4f4f4;
    border-radius: 5%;
  }
  
  .text-section {
    flex: 1;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  .image-section {
    flex: 2;
    overflow: hidden;
  }
  
  .image-section img {
    height: 900px;
    width: 100%;
    object-fit: contain; /* Ensures the image covers the area without distortion */
  }
  
  h1 {
    margin-bottom: 20px;
  }
  
  p {
    margin-bottom: 20px;
  }
  
  button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    margin-right: 10px;
    cursor: pointer;
    font-size: 16px;
    color: white;
    font-weight: bold;
  }
  
  .register-btn {
    background-color: blue;
  }
  
  .login-btn {
    background-color: white;
    color: blue;
    border: 1px solid blue;
  }
  
  .login-btn:hover {
    background-color: blue;
    color: white;
  }
  </style>
  