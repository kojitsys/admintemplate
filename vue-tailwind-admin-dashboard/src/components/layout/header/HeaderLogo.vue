<template>
  <router-link
    to="/"
    class="lg:hidden"
  >
    <img
      class="dark:hidden"
      src="/placeholder.svg"
      alt="Logo"
    >
    <img
      class="hidden dark:block"
      src="/placeholder.svg"
      alt="Logo"
    >
  </router-link>
</template>

<script setup>
import { RouterLink } from 'vue-router'
</script>
