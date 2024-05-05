<template>
    <div class="profile-container">
      <div class="user-info">
        <img src="/images/Danica-Patrick.jpg" alt="Danica Patrick" class="profile-picture">
        <h1>Danica Patrick</h1>
        <h2>@dpatrick</h2>
        <p>I am a former professional racing driver and the most successful woman in the history of American open-wheel racing. I love cars and driving fast.</p>
        <div class="user-details">
          <p><strong>Email:</strong> dpatrick@example.com</p>
          <p><strong>Location:</strong> Wisconsin, USA</p>
          <p><strong>Joined:</strong> April 8, 2021</p>
        </div>
      </div>
      <div class="cars-favourited">
        <h2>Cars Favourited</h2>
        <div class="car-list">
          <div class="car-item" v-for="car in cars" :key="car.id">
            <img :src="car.image" :alt="car.model">
            <div class="car-info">
              <h3>{{ car.model }}</h3>
              <p>${{ car.price }}</p>
              <button @click="viewCarDetails(car.id)">View more details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cars: [
        { id: 1, model: '2020 Lamborghini Huracan', price: '356,335', image: '/images/Lamborghini Huracan.jpg' },
        { id: 2, model: '2020 Bugatti Chiron', price: '3,062,888', image: '/images/2020 Bugatti Chiron.jpg' },
        { id: 3, model: '2018 Tesla Model S', price: '62,888', image: '/images/2018 Tesla Model S.jpg' }
        ]
      };
    },
    methods: {
      viewCarDetails(carId) {
        // Implement routing to car details page
        this.$router.push({ name: 'CarDetails', params: { id: carId } });
      }
    }
  }
  </script>
  
  <style scoped>
  .profile-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 800px;
    margin: auto;
  }
  
  .user-info {
    text-align: center;
  }
  
  .profile-picture {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
  }
  
  .user-details p, .car-info h3, .car-info p {
    margin: 5px 0;
  }
  
  .cars-favourited {
    width: 100%;
  }
  
  .car-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  
  .car-item {
    margin: 10px;
    text-align: center;
  }
  
  .car-item img {
    width: 100px;
    height: auto;
  }
  </style>
  