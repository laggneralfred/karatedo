<!-- resources/js/pages/admin/students/Create.vue -->
<template>
    <AppLayout title="Add New Student">
      <template #default>
        <div class="max-w-xl mx-auto bg-white dark:bg-zinc-800 p-6 rounded-lg shadow border border-zinc-200 dark:border-zinc-700">
          <h2 class="text-lg font-semibold mb-4 text-zinc-800 dark:text-white">📝 New Student</h2>
  
          <form @submit.prevent="submit">
            <div class="grid gap-4">
              <input v-model="form.first_name" type="text" placeholder="First Name" class="form-input" />
              <input v-model="form.last_name" type="text" placeholder="Last Name" class="form-input" />
              <input v-model="form.email" type="email" placeholder="Email" class="form-input" />
              <input v-model="form.phone" type="text" placeholder="Phone" class="form-input" />
              <input v-model="form.date_joined" type="date" class="form-input" />
  
              <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                Save Student
              </button>
            </div>
          </form>
        </div>
      </template>
    </AppLayout>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import AppLayout from '@/layouts/AppLayout.vue'
  
  const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    date_joined: '',
  })
  
  const submit = () => {
    form.post('/admin/students')
  }
  </script>
  <!-- resources/js/pages/admin/students/Create.vue -->
<template>
    <AppLayout title="Add New Student">
      <template #default>
        <div class="max-w-xl mx-auto bg-white dark:bg-zinc-800 p-6 rounded-lg shadow border border-zinc-200 dark:border-zinc-700">
          <h2 class="text-lg font-semibold mb-4 text-zinc-800 dark:text-white">📝 New Student</h2>
  
          <form @submit.prevent="submit">
            <div class="grid gap-4">
              <input v-model="form.first_name" type="text" placeholder="First Name" class="form-input" />
              <input v-model="form.last_name" type="text" placeholder="Last Name" class="form-input" />
              <input v-model="form.email" type="email" placeholder="Email" class="form-input" />
              <input v-model="form.phone" type="text" placeholder="Phone" class="form-input" />
              <input v-model="form.date_joined" type="date" class="form-input" />
  
              <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                Save Student
              </button>
            </div>
          </form>
        </div>
      </template>
    </AppLayout>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import AppLayout from '@/layouts/AppLayout.vue'
  
  const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    date_joined: '',
  })
  
  const submit = () => {
    form.post('/admin/students')
  }
  </script>
  