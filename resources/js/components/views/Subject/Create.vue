<template>
    <header>
        <component :is="Header"></component>
    </header>

    <div class="p-5">
        <h3>Create Subject</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name">
        </div>
        <div :class="form.isCreatedSuccessfully ? '' : 'd-none'" style="color: green">
            Subject created successfully
        </div>
        <div>
            <input @click.prevent="addSubject" type="submit" class="btn btn-primary" value="Add">
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import Header from "@/components/layouts/Subject/header.vue";

const form = ref({
    name: '',
    isCreatedSuccessfully: false
});

function addSubject() {
    axios.post('/api/subjects', form.value)
        .then(res => {
            form.value.name = '';
            form.value.isCreatedSuccessfully = true
            console.log(res);
            sleep(2000).then(() => { form.value.isCreatedSuccessfully = false });

        })
        .catch(error => {
            console.error('There was an error!', error.response.data);
        });
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

</script>
