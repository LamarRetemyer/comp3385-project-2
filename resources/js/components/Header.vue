<template>
    <header class="header-container">
      <h1 class="header-title">United Auto Sales</h1>
      <nav class="header-nav">
        <!-- Conditional rendering based on isLoggedIn -->
        <!-- <template v-if="isLoggedIn"> -->
          <!-- Tabs available only when logged in -->
          <button @click="goToExplore" class="header-button">Explore</button>
          <button @click="goToProfile" class="header-button">View Profile</button>
          <button @click="logout" class="header-button">Logout</button>
        <!-- </template>
        <template v-else> -->
          <!-- Tabs available when not logged in -->
          <button @click="goToRegister" class="header-button">Register</button>
          <button @click="goToLogin" class="header-button">Login</button>
        <!-- </template> -->
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header',
    data() {
      return {
        isLoggedIn: false 
      };
    },
    methods: {
      goToRegister() {
        this.$router.push('/register');
      },
      goToLogin() {
        this.$router.push('/login');
      },
      goToExplore() {
        this.$router.push('/cars');
      },
      goToProfile() {
        this.$router.push('/profile');
      },
      logout() {
        // Perform logout logic, then update isLoggedIn
        this.isLoggedIn = false;
        this.$router.push('/login');
      }
    }
  };
  </script>
  
  <style scoped>
  .header-container {
    background-color: #202938; /* Updated background color */
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .header-title {
    padding: 5px;
    font-size: 20px;
    font-weight: bold;
    color: #FFF; /* Changed to white for better contrast */
  }
  
  .header-nav {
    display: flex;
  }
  
  .header-button {
    background-color: transparent;
    border: none;
    color: #FFF; /* Changed to white for better contrast */
    font-size: 16px;
    cursor: pointer;
    margin-left: 10px;
  }
  
  .header-button:hover {
    color: #AAA; /* Lighter grey for hover effect */
  }
  </style>
  