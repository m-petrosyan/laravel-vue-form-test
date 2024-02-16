import {createRouter, createWebHistory} from 'vue-router'
import MainLayouth from "../components/layouts/MainLayouth.vue";
import HomePage from "../pages/HomePage.vue";
import FormsMeggages from "@/pages/FormsMeggages.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: MainLayouth,
            children: [
                {
                    path: '',
                    name: 'home',
                    component: HomePage
                },
                {
                    path: 'messages',
                    name: 'messages',
                    component: FormsMeggages
                },
            ]
        },
    ],
})

export default router;
