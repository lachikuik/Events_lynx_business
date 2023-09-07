<script setup>
  import {reactive } from 'vue';
  import { router } from '@inertiajs/vue3';

  defineProps(['event']);
  defineEmits(['close-modal']);

  function submit(data) {
    console.log(data);
    router.post(`/event/update/${data.id}`, data);
  };
</script>


<template>
  <div class="modal-overlay">
    <div class="modal">
      <div>
        <input type="text" placeholder="name" v-model="event.name"/>
      </div>
      <div>
        <label for="startDate">date de début:</label>
        <input type="date" id="startDate" min="2000-01-01" max="2118-12-31" v-model="event.startDate"/>
      </div>
      <div>
        <label for="endDate">date de fin:</label>
        <input type="date" id="endDate" min="2000-01-01" max="2118-12-31" v-model="event.endDate"/>
      </div>
      <div>
        <button @click="submit(event)">Update</button>
      </div>
      <div>
        <button @click="$emit('close-modal')">Go Home</button>
      </div>
    </div>
  </div>
</template>

<style scoped>

.modal-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  background-color: #000000da;
}

.modal {
  text-align: center;
  background-color: white;
  height: 500px;
  width: 500px;
  margin-top: 10%;
  padding: 60px 0;
  border-radius: 20px;
}
.close {
  margin: 10% 0 0 16px;
  cursor: pointer;
}

.close-img {
  width: 25px;
}

.check {
  width: 150px;
}

h6 {
  font-weight: 500;
  font-size: 28px;
  margin: 20px 0;
}

p {
  font-size: 16px;
  margin: 20px 0;
}

button {
  background-color: #ac003e;
  width: 150px;
  height: 40px;
  color: white;
  font-size: 14px;
  border-radius: 16px;
  margin-top: 50px;
}
</style>
