<script setup>
    import Event from '../Components/Event.vue';
    defineProps({ Events: Array });

</script>

<template>
    <button>Retour à la liste d'événement</button>
    <event v-for= "e in Events" :key="e.id" :evEventsents="e"></event>
</template>