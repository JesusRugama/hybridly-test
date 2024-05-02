<script setup lang="ts">
const $props = defineProps<{
  user: App.Data.UserData,
}>()
</script>

<template layout="default">
  <ul>
    <li>
      Name: {{ user.name }}
    </li>
    <li>
      Email: {{ user.email }}
    </li>
  </ul>
</template>
