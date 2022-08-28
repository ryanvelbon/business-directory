<script setup>

import { Head } from '@inertiajs/inertia-vue3'

import DefaultLayout from '@/Layouts/Default.vue'
import Pagination from '@/Components/Pagination.vue'
import CompanyCard from '@/Components/Company/CompanyCard.vue'
import Filters from '@/Components/Company/Filters.vue'
import { ref } from 'vue'

defineProps({
  results: Object,
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
      <Filters />
      <Pagination
        :total="results.meta.total"
        :per-page="results.meta.per_page"
        :current-page="results.meta.current_page"
        :last-page="results.meta.last_page"
        :href-prev="results.links.prev"
        :href-next="results.links.next"
      />
      <section aria-labelledby="companies-heading" class="mt-6">
        <h2 id="companies-heading" class="sr-only">Companies</h2>

        <div v-for="company in results.data" :key="company.id" class="bg-white border-t border-b border-gray-200 shadow-sm sm:border sm:rounded-lg">
          <CompanyCard
            :company="company"
          />
        </div>
      </section>
      <!-- <Pagination /> -->
    </template>
  </DefaultLayout>
</template>