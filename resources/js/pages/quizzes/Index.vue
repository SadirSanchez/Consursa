<template>
    <Head title="Cuestionarios disponibles" />

    <AppLayout>
        <div class="p-6">
            <h1 class="mb-4 text-2xl font-bold">Administrar Cuestionarios</h1>

            <div class="ag-theme-alpine" style="height: 500px; width: 100%">
                <AgGridVue :rowData="quizzes" :columnDefs="columnDefs" :defaultColDef="defaultColDef" rowSelection="single" />
            </div>
        </div>

        <div class="mx-auto mt-4 max-w-7xl px-4 text-left sm:px-6 lg:px-8">
            <button class="mt-8 rounded bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700" @click="openModal = true">Nuevo</button>
        </div>
        <QuizModal :open="openModal" @close="openModal = false" />
    </AppLayout>
</template>

<script setup>
import QuizModal from '@/components/Quiz/QuizModal.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import 'ag-grid-community/styles/ag-grid.css';
import 'ag-grid-community/styles/ag-theme-alpine.css';
import { AgGridVue } from 'ag-grid-vue3';
import { ref } from 'vue';
const openModal = ref(false);

defineProps({
    quizzes: Array,
});

const columnDefs = [
    { headerName: 'Título', field: 'title', sortable: true, filter: true },
    { headerName: 'Descripción', field: 'description', flex: 1 },
    { headerName: 'Preguntas', field: 'numQuestions', width: 130 },
    { headerName: 'Tiempo (min)', field: 'timeLimit', width: 130 },
    { headerName: 'Creado', field: 'created_at', sortable: true, filter: 'agDateColumnFilter' },
];

const defaultColDef = {
    resizable: true,
    sortable: true,
    filter: true,
    flex: 1,
};
</script>
