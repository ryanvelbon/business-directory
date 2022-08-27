<script setup>

import { Head } from '@inertiajs/inertia-vue3'

import DefaultLayout from '@/Layouts/Default.vue'
import ContactCard from '@/Components/User/ContactCard.vue'


const people = [

  {
    name: 'Jane Cooper',
    title: 'Regional Paradigm Technician',
    role: 'Admin',
    email: 'janecooper@example.com',
    telephone: '+1-202-555-0170',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
  },
  {
    name: 'Jane Cooper',
    title: 'Regional Paradigm Technician',
    role: 'Admin',
    email: 'janecooper@example.com',
    telephone: '+1-202-555-0170',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
  },
  {
    name: 'Jane Cooper',
    title: 'Regional Paradigm Technician',
    role: 'Admin',
    email: 'janecooper@example.com',
    telephone: '+1-202-555-0170',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
  },
  // More people...
]
</script>

<template>
  <Head>
    <title>Find Supply Chain Partners Nearby</title>
  </Head>

  <DefaultLayout>
    <template #header>
      <h2>
        Community
      </h2>
      <!-- *REFACTOR* make contact card a separate Vue component -->
      <div>
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <li v-for="person in people" :key="person.email" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
            <ContactCard
              :person="person"
            />
          </li>
        </ul>
      </div>
    </template>
  </DefaultLayout>
</template>