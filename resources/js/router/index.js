import { createRouter, createWebHistory } from 'vue-router';
import AboutView from "../Pages/AboutView.vue";
import HomeView from "../Pages/HomeView.vue";
import LoginView from "../Pages/LoginView.vue";
import CarsView from "../Pages/CarsView.vue";
import RegisterView from "../Pages/RegisterView.vue";
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
            component: LoginView
        },
        {
        path: '/register',
        name: 'register',
        component: RegisterView
        },
        {
            path: '/cars',
            name: 'cars',
            component: CarsView
        }
    ]
})

export default router;
