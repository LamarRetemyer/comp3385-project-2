<template>
    <div class="car-container">
      <h1>Car Details</h1>
      <div v-if="car">
        <h2>{{ car.make }} {{ car.model }}</h2>
        <ul>
          <li><strong>Year:</strong> {{ car.year }}</li>
          <li><strong>Color:</strong> {{ car.color }}</li>
          <li><strong>Transmission:</strong> {{ car.transmission }}</li>
        </ul>
      </div>
      <div v-else>
        <p>Loading car details...</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CarsView',
    data() {
      return {
        // Placeholder data, you would typically fetch this from an API
        car: {
          make: 'Toyota',
          model: 'Corolla',
          year: 2022,
          color: 'Red',
          transmission: 'Automatic'
        }
      };
    },
    mounted() {
      // This is where you could fetch the car data from an API
      // this.fetchCarDetails();
    },
    methods: {
      fetchCarDetails() {
        // Example API call using Axios (you need to install and import axios if using this)
        // axios.get('/api/car/1')
        //   .then(response => {
        //     this.car = response.data;
        //   })
        //   .catch(error => {
        //     console.error('Error fetching car details:', error);
        //   });
      }
    }
  }
  </script>
  
  <style scoped>
  .car-container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }
  
  h1, h2 {
    text-align: center;
  }
  
  ul {
    list-style-type: none;
    padding: 0;
  }
  
  li {
    margin-bottom: 10px;
    font-size: 16px;
  }
  </style>
  