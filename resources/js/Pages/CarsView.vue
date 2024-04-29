<template>
  <div class="car-view">
      <div class="car-details">
      <h1>{{ car.make }} {{ car.model }}</h1>
      <p><strong>Year:</strong> {{ car.year }}</p>
      <p><strong>Color:</strong> {{ car.color }}</p>
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue';

export default {
  name: 'CarView',
  components: {
    Header
  },
  data() {
    return {
        car: {
        make: 'Toyota',
        model: 'Corolla',
        year: 2022,
        color: 'Red'
      }
    };
  }
}
</script>

<style scoped>
.car-view {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.car-details h1 {
  text-align: center;
}

.car-details p {
  font-size: 16px;
  margin: 10px 0;
}
</style>
