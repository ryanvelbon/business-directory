<script setup>
import { MailIcon, PhoneIcon } from '@heroicons/vue/solid'

const name = 'ContactCard'
const props = defineProps({
  person: Object,
})

</script>

<template>
  <div class="w-full flex items-center justify-between p-6 space-x-6">
    <div class="flex-1 truncate">
      <div class="flex items-center space-x-3">
        <h3 class="text-gray-900 text-sm font-medium truncate">{{ person.name }}</h3>
        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ person.role }}</span>
      </div>
      <p class="mt-1 text-gray-500 text-sm truncate">{{ person.title }}</p>
    </div>
    <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" :src="person.imageUrl" alt="" />
  </div>
  <div>
    <div class="-mt-px flex divide-x divide-gray-200">
      <div class="w-0 flex-1 flex">
        <a :href="`mailto:${person.email}`" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
          <MailIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
          <span class="ml-3">Email</span>
        </a>
      </div>
      <div class="-ml-px w-0 flex-1 flex">
        <a :href="`tel:${person.telephone}`" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
          <PhoneIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
          <span class="ml-3">Call</span>
        </a>
      </div>
    </div>
  </div>
</template>