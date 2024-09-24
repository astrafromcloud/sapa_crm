<script setup>

import Header from "@/components/layouts/Subject/header.vue";
import {onMounted, ref} from "vue";
import axios from "axios";
import router from "@/router.js";

const subjects = ref([])

const props = defineProps({
    subjects: Array
})

onMounted(() => getSubjects())

function getSubjects() {
    axios.get('/api/subjects')
        .then(res => {
            console.log(res)
            subjects.value = res.data
            console.log('Loaded!')
        })
}

function deleteSubject(id) {
    axios.delete(`/api/subjects/${id}`)
        .then(
            res => {
                getSubjects()
            }
        )
}

</script>

<template>
    <header>
        <component :is="Header"></component>
    </header>

    <div class="ps-5 pb-3 pt-3">
        <h2>All Subjects</h2>
    </div>

    <div class="w-75 ps-5 pe-5">
        <table class="table table-striped ">
            <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="(subject) in subjects" class="w-100 m-3">

                <th scope="row">{{ subject.id }}</th>
                <td>{{ subject.name }}</td>
                <td>
                    <a href="#" class="btn btn-success" @click.prevent="router.push(`/subjects/${subject.id}/edit`)">
                        Edit
                    </a>
                </td>

                <td>
                    <a href="#" class="btn btn-danger" @click.prevent="deleteSubject(subject.id)">
                        Delete
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</template>

<style scoped>

</style>
