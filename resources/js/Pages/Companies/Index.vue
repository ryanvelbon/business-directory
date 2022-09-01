<script setup>

import { Head } from '@inertiajs/inertia-vue3'

import DefaultLayout from '@/Layouts/Default.vue'
import Pagination from '@/Components/Pagination.vue'
import CompanyCard from '@/Components/Company/CompanyCard.vue'
import Filters from '@/Components/Company/Filters.vue'
import axios from 'axios'
import { ref, onBeforeMount, onMounted } from 'vue'

var companies = ref([])

const props = defineProps({
  lastPage: Number,
})

const updateCompanies = (items) => {
  companies.value = items.value
}

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
      <Pagination :lastPage="props.lastPage" path="api/companies" @update-results="updateCompanies" />
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