import { createRouter, createWebHistory } from 'vue-router';
import Form from './components/Form.vue';
import Result from './components/Result.vue';

const routes =[
    { path: '/', component: Form },
    { path: '/result', component: Result }
];

export default createRouter({
    history: createWebHistory(),
    routes
});