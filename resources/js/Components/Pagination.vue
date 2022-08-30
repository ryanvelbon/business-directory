<script setup>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/solid'

const props = defineProps({
  total: Number,
  perPage: Number,
  currentPage: Number,
  lastPage: Number,
  hrefPrev: String,
  hrefNext: String,
})

const nBtns = 5

function calcPageNumbers(currentPage, lastPage, nBtns) {
  if(lastPage <= nBtns) {
    return Array.from({length: lastPage}, (x, i) => i+1)
  } else if(currentPage <= Math.ceil(nBtns/2)) {
    return Array.from({length: nBtns}, (x, i) => i+1)
  } else if(currentPage > (lastPage-Math.ceil(nBtns/2))) {
    return Array.from({length: nBtns}, (x, i) => lastPage-i).reverse()
  } else {
    return Array.from({length:nBtns}, (x, i) => currentPage-Math.floor(nBtns/2)+i)
  }
}

const pageNumbers = calcPageNumbers(props.currentPage, props.lastPage, nBtns);


</script>

<template>
  <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
    <div class="flex-1 flex justify-between sm:hidden">
      <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
      <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Showing
          {{ ' ' }}
          <span class="font-medium">{{ currentPage*10-9 }}</span>
          {{ ' ' }}
          to
          {{ ' ' }}
          <span v-if="currentPage==lastPage" class="font-medium">{{ total }}</span>
          <span v-else class="font-medium">{{ currentPage*10 }}</span>
          {{ ' ' }}
          of
          {{ ' ' }}
          <span class="font-medium">{{ total }}</span>
          {{ ' ' }}
          results
        </p>
      </div>
      <div>
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
          <a :href="hrefPrev" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Previous</span>
            <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
          </a>
          <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->

          <a
            v-for="i in pageNumbers"
            href="#"
            class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"
            :class="i===currentPage
              ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600'
              : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50'"
          > {{i}} </a>


          <!--
          <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 3 </a>
          <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700"> ... </span>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 8 </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 9 </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 10 </a>
          -->
          <a :href="hrefNext" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Next</span>
            <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
          </a>
        </nav>
      </div>
    </div>
  </div>
</template>