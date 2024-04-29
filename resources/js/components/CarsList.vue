<template>
    <div class="cars-list">
      <h1>Cars List</h1>
      <ul>
        <li v-for="car in cars" :key="car.id">
          {{ car.make }} {{ car.model }} - {{ car.year }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CarsList',
    data() {
      return {
        cars: [
          { id: 1, make: 'Toyota', model: 'Corolla', year: 2022 },
          { id: 2, make: 'Ford', model: 'Mustang', year: 2021 },
          // More cars can be added here
        ]
      };
    }
  }
  </script>
  
  <style scoped>
  .cars-list {
    max-width: 600px;
    margin: 20px auto;
    padding: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }
  
  h1 {
    text-align: center;
  }
  
  ul {
    list-style: none;
    padding: 0;
  }
  
  li {
    padding: 10px;
    margin-bottom: 5px;
    border-bottom: 1px solid #ccc;
  }
  </style>
  