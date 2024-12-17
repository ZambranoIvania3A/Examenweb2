import { createRouter, createWebHistory } from 'vue-router';
import LoginComponent from '../views/LoginComponent.vue';
import RegisterComponent from '../views/RegisterComponent.vue';

const routes = [
  {
    path: '/login',
    name: 'Login',
    component: LoginComponent
  },
  {
    path: '/register',
    name: 'Register',
    component: RegisterComponent
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
