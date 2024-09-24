import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/subjects/',
        component: () => import('./components/views/Subject/Index.vue'),
        name: 'subject.index'
    },
    {
        path: '/subjects/create',
        component: () => import('./components/views/Subject/Create.vue'),
        name: 'subject.create'
    },
    {
        path: '/subjects/:id/edit',
        component: () => import('./components/views/Subject/Edit.vue'),
        name: 'subject.edit'
    },
    {
        path: '/users/create',
        name: 'user.create',
        component: () => import('./components/views/User/Create.vue')
    },
    {
        path: '/users/edit',
        name: 'user.edit',
        component: () => import('./components/views/User/Edit.vue')
    }
]

const router= createRouter({
    history: createWebHistory(),
    routes
})

export default router;
