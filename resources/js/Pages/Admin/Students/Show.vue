<!-- resources/js/Pages/Admin/Students/Show.vue -->
<template>
    <AppLayout :title="`${student.first_name} ${student.last_name}`">
      <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">
          {{ student.first_name }} {{ student.last_name }}
        </h1>
  
        <ul class="space-y-1">
          <li><strong>Email:</strong> {{ student.email }}</li>
          <li><strong>Phone:</strong> {{ student.phone || '—' }}</li>
          <li><strong>Date Joined:</strong> {{ student.date_joined }}</li>
        </ul>
      </div>
    </AppLayout>
  </template>
  
  <script setup>
  import AppLayout from '@/layouts/AppLayout.vue'
  
  /* props from Inertia */
  defineProps({
    student: Object,
  })
  </script>
  