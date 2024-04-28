import { createRouter, createWebHistory } from 'vue-router';
import AboutView from "../Pages/AboutView.vue";
import HomeView from "../Pages/HomeView.vue";
import LoginComponent from "../Pages/LoginComponent.vue";
import CarsComponent from "../Pages/CarsComponent.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeView
        },
        {
            path: '/about',
            name: 'about',
            component: AboutView
        },
        {
            path: '/login',
            name: 'login',
            component: LoginComponent
        },
        {
            path: '/cars',
            name: 'cars',
            component: CarsComponent
        }
    ]
})

export default router;
