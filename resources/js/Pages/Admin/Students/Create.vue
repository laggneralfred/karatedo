<!-- resources/js/Pages/Admin/Students/Create.vue -->
<template>
  <AppLayout title="Add Student">
    <div class="max-w-2xl mx-auto p-6 bg-white dark:bg-zinc-800 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-4 text-zinc-800 dark:text-white">Add New Student</h2>

      <form @submit.prevent="submit">
        <div class="grid gap-4">
          <div>
            <label class="block text-sm mb-1 text-zinc-600 dark:text-zinc-300">First Name</label>
            <input v-model="form.first_name" class="w-full border rounded p-2" type="text" required />
          </div>

          <div>
            <label class="block text-sm mb-1 text-zinc-600 dark:text-zinc-300">Last Name</label>
            <input v-model="form.last_name" class="w-full border rounded p-2" type="text" required />
          </div>

          <div>
            <label class="block text-sm mb-1 text-zinc-600 dark:text-zinc-300">Email</label>
            <input v-model="form.email" class="w-full border rounded p-2" type="email" required />
          </div>

          <div>
            <label class="block text-sm mb-1 text-zinc-600 dark:text-zinc-300">Phone</label>
            <input v-model="form.phone" class="w-full border rounded p-2" type="tel" />
          </div>

          <div>
            <label class="block text-sm mb-1 text-zinc-600 dark:text-zinc-300">Date Joined</label>
            <input v-model="form.date_joined" class="w-full border rounded p-2" type="date" required />
          </div>

          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save
          </button>
        </div>
      </form>
    </div>
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

function submit() {
  form.post(route('admin.students.store'))
}
</script>