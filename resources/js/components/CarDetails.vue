<template>
    <div class="car-details">
      <h1>Car Details</h1>
      <p>Details for car ID: {{ $route.params.id }}</p>
      <!-- Display car details here -->
    </div>
  </template>
  
  <script>
  export default {
    // If you're fetching details from an API, consider using the created lifecycle hook
    mounted() {
      this.fetchCarDetails(this.$route.params.id);
    },
    methods: {
      fetchCarDetails(carId) {
        // API call to fetch details
        console.log('Fetching details for car ID:', carId);
      }
    }
  }
  </script>
  
  <style scoped>
  .car-details {
    padding: 20px;
    margin: auto;
    max-width: 600px;
  }
  </style>
  