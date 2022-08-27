<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import DefaultLayout from '@/Layouts/Default.vue'
</script>

<template>
  <Head>
    <title>About Page</title>
  </Head>
  <DefaultLayout>
    <h2>About This Website</h2>
    <p>If you have a page that doesn't need a corresponding controller method, like an FAQ or about page, you can route directly to a component using `Route::inertia()`</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </DefaultLayout>
</template>