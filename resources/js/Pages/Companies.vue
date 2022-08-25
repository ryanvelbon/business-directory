<script setup>
import DefaultLayout from '@/Layouts/Default.vue'
import { Head } from '@inertiajs/inertia-vue3'

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
        </div>
      </section>
    </template>
  </DefaultLayout>
</template>