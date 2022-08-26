<script setup>

import { Head } from '@inertiajs/inertia-vue3'

import DefaultLayout from '@/Layouts/Default.vue'
import CompanyCard from '@/Components/Company/CompanyCard.vue'


defineProps({
  companies: Array,
})

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
      <section aria-labelledby="companies-heading" class="mt-6">
        <h2 id="companies-heading" class="sr-only">Companies</h2>

        <div v-for="company in companies" :key="company.id" class="bg-white border-t border-b border-gray-200 shadow-sm sm:border sm:rounded-lg">
          <CompanyCard
            :company="company"
          />
        </div>
      </section>
    </template>
  </DefaultLayout>
</template>