<script setup lang="ts">
interface Users extends App.Data.UserData {
  id: number,
}

const $props = defineProps<{
  users: Users[],
}>()
</script>

<template layout="default">
  <ul>
    <li v-for="user in users" :key="user.id">
      <a :href="route('user-details', {id: user.id})">{{ user.id }} - {{ user.email }}</a>
    </li>
  </ul>
</template>
