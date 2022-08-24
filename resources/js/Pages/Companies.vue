<script setup>
import DefaultLayout from '@/Layouts/Default.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>

<template>
  <Head>
    <title>Search Over 9000 Companies</title>
    <meta head-key="description" name="description" content="This is the default description" />
  </Head>

  <DefaultLayout>
    <template #header>
      <h2>
        Companies
      </h2>
      <div>
        <p>This is where all the companies will be listed.</p>
      </div>
    </template>
  </DefaultLayout>
</template>