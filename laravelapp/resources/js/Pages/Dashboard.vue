<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <h1 class="mb-4 text-2xl font-bold">Dashboard</h1>
        <p class="text-gray-600">You're logged in!</p>
    </AdminLayout>
</template>
