<script setup>

</script>

<template>
    <div>
      <nav>
        <ul>
          <li><router-link to="/">Home</router-link></li>
          <li><router-link to="/about">About</router-link></li>
          <li><router-link to="/login">Login</router-link></li>
          <li><router-link to="/cars">Cars</router-link></li>
        </ul>
      </nav>
      <header>
        <h1>Welcome to Our Application</h1>
        <p>This is the beginning of your Vue.js and Laravel journey.</p>
      </header>
      <section>
        <button @click="goToCars">View Cars</button>
        <button @click="goToAbout">Learn More About Us</button>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    name: 'WelcomePage',
    methods: {
      goToCars() {
        this.$router.push('/cars');
      },
      goToAbout() {
        this.$router.push('/about');
      }
    }
  }
  </script>
  
  <style scoped>
  nav ul {
    display: flex;
    list-style: none;
    padding: 0;
  }
  nav ul li {
    margin-right: 10px;
  }
  header h1 {
    color: #333;
  }
  </style>
  