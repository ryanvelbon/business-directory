<script>
export default {
  name: 'CompanyCard',
  props: {
    company: Object,
  },
}
</script>

<template>
  <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
    <div class="sm:flex lg:col-span-7">
      <div class="flex-shrink-0 w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-none sm:w-40 sm:h-40">
        <img :src="company.imageSrc" :alt="company.imageAlt" class="w-full h-full object-center object-cover sm:w-full sm:h-full" />
      </div>

      <div class="mt-6 sm:mt-0 sm:ml-6">
        <h3 class="text-base font-medium text-gray-900">
          <a :href="company.href">{{ company.name }}</a>
        </h3>
        <p class="mt-2 text-sm font-medium text-gray-900">{{ company.slogan }}</p>
        <p class="mt-3 text-sm text-gray-500">
          {{ company.description }}
        </p>
      </div>
    </div>

    <div class="mt-6 lg:mt-0 lg:col-span-5">
      <dl class="grid grid-cols-2 gap-x-6 text-sm">
        <div>
          <dt class="font-medium text-gray-900">Address</dt>
          <dd class="mt-3 text-gray-500">
            <span class="block">address line 1</span>
            <span class="block">address line 2</span>
            <span class="block">address line 3</span>
          </dd>
        </div>
        <div>
          <dt class="font-medium text-gray-900">Contact details</dt>
          <dd class="mt-3 text-gray-500 space-y-3">
            <p>
              {{ company.email }}
            </p>
            <p>
              {{ company.phone }}
            </p>
            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">View more</button>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</template>