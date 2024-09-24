<script setup>
</script>

<template>
<div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <b-link class="nav-link" :to= "{name: 'subject.create'} ">Create Subject</b-link>
                    </li>
                    <li class="nav-item">
                        <b-link class="nav-link" :to="{name: 'subject.index'}">All Subjects</b-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
</template>

<style scoped>

</style>
