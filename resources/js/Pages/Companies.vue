<script setup>

import { Head } from '@inertiajs/inertia-vue3'

import DefaultLayout from '@/Layouts/Default.vue'
import CompanyCard from '@/Components/Company/CompanyCard.vue'


const companies = [
  {
    id: 1,
    name: "Beier LLC",
    slogan: "Velit officia doloribus nisi veritatis.",
    description: "Veniam tempora non incidunt deleniti praesentium. Non rerum nam doloribus. Est qui qui quas molestias qui sit.",
    website: "beier.biz",
    email: "admin@beier.biz",
    phone: "+844300344",
    imageSrc: 'https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?w=800',
    imageAlt: '',
  },
  {
    id: 2,
    name: "Marks LLC",
    slogan: "Consequuntur et quasi sequi velit.",
    description: "Eligendi voluptatibus at reiciendis qui debitis porro. Nesciunt natus sit qui veniam rerum. Id dolor aut exercitationem ut ab.",
    website: "marks.com",
    email: "info@marks.com",
    phone: "+608718508",
    imageSrc: 'https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?w=800',
    imageAlt: '',
  },
  {
    id: 3,
    name: "Kreiger PLC",
    slogan: "Quod soluta quam soluta atque officia laudantium.",
    description: "Ex cupiditate et qui quod ut. Aut asperiores deleniti qui et distinctio.",
    website: "kreiger.com",
    email: "hello@kreiger.com",
    phone: "+841515407",
    imageSrc: 'https://images.pexels.com/photos/7363102/pexels-photo-7363102.jpeg?w=800',
    imageAlt: '',
  },
]
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