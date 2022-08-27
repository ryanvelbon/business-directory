<script setup>
const props = defineProps({
  company: Object,
})
</script>

<template>
  <h2>{{ company.name }}</h2>
  <p>{{ company.slogan }}</p>
  <p>{{ company.description }}</p>
</template>