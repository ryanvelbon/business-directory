<script setup>
import { ref, computed, watch, onBeforeMount, onMounted } from 'vue'

const nBtns = 5
const currentPage = ref(1) // default is set to page 1

const results = ref([])

const props = defineProps({
  path: String,
  lastPage: Number,
})

const emit = defineEmits(['updateResults'])

var startId

const pageBtns = computed(() => {
  if(currentPage.value < Math.ceil(nBtns/2))
    startId = 1
  else if(currentPage.value >= (props.lastPage-Math.floor(nBtns/2)))
    startId = props.lastPage - nBtns + 1
  else
    startId = currentPage.value - Math.floor(nBtns/2)
  return Array.from({length: nBtns}, (x, i) => startId + i)
})

const fetchData = (page = 1) => {
  console.log(`fetching page ${currentPage.value} results`)
  // axios.get('api/companies?page=' + page)
  axios.get(`${props.path}?page=${page}`)
    .then(response => {
      results.value = response.data.data
    }).then(() => {
      console.log(JSON.stringify(results.value))
      emit('updateResults', results)
    })
}

onBeforeMount(() => {
  // if(DEBUG) console.log("component being rendered...")
  fetchData(1)
})

onMounted(() => {
  // if(DEBUG) console.log("component mounted")
})

watch(currentPage, () => {
  fetchData(currentPage.value)
})

</script>

<template>
  <p>Results for page {{currentPage}}</p>
  <button class="bg-gray-300 w-12 p-4 hover:bg-gray-200" @click="currentPage=i" v-for="i in pageBtns">{{i}}</button>
  <p>Start Button is {{startId}}</p>
</template>