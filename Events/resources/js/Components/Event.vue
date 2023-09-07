<script setup>
  import { reactive } from 'vue';
  import UpdateEventModal from "../Components/UpdateEventModal.vue";
  defineProps(['event']) ;
  import DeleteEventModal from "../Components/DeleteEventModal.vue";

  const stateUpdate = reactive({ showModalUpdate: false });
  const stateDelete = reactive({ showModalDelete: false });

  function openModalUpdate() {
    stateUpdate.showModalUpdate = true;
  };

  function closeModal() {
    stateUpdate.showModalUpdate = false;
    stateDelete.showModalDelete = false;
  };
  
  function openModalDelete() {
    stateDelete.showModalDelete = true;
  };


</script>

<template>
  <li>
      Nom de l'événement : {{ event.name }} ||
      Début : {{  event.startDate }} ||
      Fin : {{ event.endDate }} ||
      id: {{ event.id }}
      <button @click="openModalUpdate">Update</button>
      <update-event-modal v-show="stateUpdate.showModalUpdate" @close-modal="closeModal" :event="event" />
      <button @click="openModalDelete">Delete</button>
      <delete-event-modal v-show="stateDelete.showModalDelete" @close-modal="closeModal" :event="event" />
  </li>
</template>