<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const sidebarOpen = ref(true);
const configOpen = ref(false);
const menu = [
  { label: 'Dashboard', route: 'dashboard' },
  {
    label: 'Gestion',
    children: [
      { label: 'Formulaires', route: 'forms' },
      { label: 'Calendrier', route: 'calendar' },
      { label: 'Listes', route: 'lists' },
      { label: 'Cartes', route: 'cards' }
    ]
  },
  {
    label: 'Projets',
    children: [
      { label: 'Gantt', route: 'gantt' },
      { label: 'Kanban', route: 'kanban' }
    ]
  }
];
</script>

<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- main content -->
    <main class="flex-1 p-4">
      <slot />
    </main>

    <!-- sidebar -->
    <aside
      :class="[
        'w-64 border-l bg-white p-4 transition-transform duration-300',
        { 'translate-x-full rtl:-translate-x-full': !sidebarOpen }
      ]"
    >
      <nav class="space-y-2">
        <template v-for="item in menu" :key="item.label">
          <div>
            <Link
              v-if="!item.children"
              :href="route(item.route)"
              class="block rounded px-2 py-1 hover:bg-gray-200"
            >
              {{ item.label }}
            </Link>
            <div v-else class="mb-2">
              <div class="font-semibold text-gray-700">
                {{ item.label }}
              </div>
              <ul class="ms-2 mt-1 space-y-1">
                <li v-for="child in item.children" :key="child.label">
                  <Link
                    :href="route(child.route)"
                    class="block rounded px-2 py-1 hover:bg-gray-200"
                  >
                    {{ child.label }}
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </template>
      </nav>
    </aside>

    <!-- toggle button -->
    <button
      @click="sidebarOpen = !sidebarOpen"
      class="fixed top-4 right-4 z-20 rounded-full bg-blue-600 p-2 text-white shadow"
    >
      <svg
        v-if="sidebarOpen"
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M6 18L14 10L6 2V18Z"
          clip-rule="evenodd"
        />
      </svg>
      <svg
        v-else
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M14 2L6 10L14 18V2Z"
          clip-rule="evenodd"
        />
      </svg>
    </button>

    <!-- floating config button -->
    <button
      class="fixed bottom-4 right-4 z-20 rounded-full bg-green-600 p-3 text-white shadow"
      @click="configOpen = true"
    >
      ⚙
    </button>

    <!-- config modal -->
    <div
      v-if="configOpen"
      class="fixed inset-0 z-30 flex items-center justify-center bg-black/50"
    >
      <div class="rounded bg-white p-6 shadow">
        <h2 class="mb-4 text-lg font-bold">Configuration</h2>
        <p class="mb-4 text-sm text-gray-600">Options de personnalisation...</p>
        <button
          class="rounded bg-gray-800 px-4 py-2 text-white"
          @click="configOpen = false"
        >
          Fermer
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* ensure sidebar overlay for right side in rtl or ltr */
</style>
