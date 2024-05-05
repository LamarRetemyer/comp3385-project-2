<template>
  <div class="explore-container">
    <div class="search-bar">
      <input type="text" v-model="search.make" placeholder="Make">
      <input type="text" v-model="search.model" placeholder="Model">
      <button @click="performSearch">Search</button>
    </div>
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
</template>

<script>
export default {
  data() {
    return {
      search: {
        make: '',
        model: ''
      },
      cars: [
        { id: 1, model: '2020 Lamborghini Huracan', price: '356,335', image: '/images/Lamborghini Huracan.jpg' },
        { id: 2, model: '2020 Bugatti Chiron', price: '3,062,888', image: '/images/2020 Bugatti Chiron.jpg' },
        { id: 3, model: '2018 Tesla Model S', price: '62,888', image: '/images/2018 Tesla Model S.jpg' }
      ]
    };
  },
  methods: {
    performSearch() {
      
      console.log('Searching...');
    },

    viewCarDetails(carId) {
      this.$router.push({ name: 'CarDetails', params: { id: carId } });
    }
  }
}
</script>

<style scoped>
.explore-container {
  max-width: 900px;
  margin: auto;
  padding: 20px;
}

.search-bar {
  display: flex;
  gap: 10px;
  margin-bottom: 20px;
}

.car-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.car-item {
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 10px;
}

.car-item img {
  width: 100%;
  height: auto;
}

.car-info h3, .car-info p {
  margin: 5px 0;
}

button {
  background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}
</style>
