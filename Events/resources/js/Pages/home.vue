<script setup>
  import { reactive } from 'vue';
  import Event from '../Components/Event.vue';
  import CreateEventModal from "../Components/CreateEventModal.vue";
  import { router } from '@inertiajs/vue3';

  defineProps({ events: Array });

  const state = reactive({ showModal: false });

  function openModal() {
    state.showModal = true;
  };

  function closeModal() {
    state.showModal = false;
  };

  const searchForm = reactive({
      startSearchDate: null,
      endSearchDate: null,
    });

    function search() {
      console.log(searchForm);
      router.post('/event/search', searchForm);
    };

</script>

<template>
  <h1>Welcome</h1>
  <event v-for= "e in events" :key="e.id" :event="e"></event>
  <button @click="openModal">New</button>
  <create-event-modal v-show="state.showModal" @close-modal="closeModal" />
  <p>
    ________________________________________________________________________________________________________
  </p>
  <div>
    <h2>Rechercher des événements : </h2>
      <div>
        <label for="startSearchDate">date de début:  </label>
        <input type="date" id="startSearchDate" min="2000-01-01" max="2118-12-31" v-model="searchForm.startSearchDate"/>
        <label for="endSearchDate">  date de fin:  </label>
        <input type="date" id="endSearchDate" min="2000-01-01" max="2118-12-31" v-model="searchForm.endSearchDate"/>
        <button @click="search">Search</button>
      </div>
  </div>
</template> 