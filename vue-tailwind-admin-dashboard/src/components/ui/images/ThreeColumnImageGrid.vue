<template>
  <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
    <div
      v-for="(image, index) in images"
      :key="index"
    >
      <img
        :src="image.src"
        :alt="image.alt"
        class="w-full border border-gray-200 rounded-xl dark:border-gray-800"
      >
    </div>
  </div>
</template>

<script setup>
const images = [
  { src: '/placeholder.svg', alt: 'Grid image 1' },
  { src: '/placeholder.svg', alt: 'Grid image 2' },
  { src: '/placeholder.svg', alt: 'Grid image 3' },
]
</script>
