<template>
    <Head title="Cuestionarios disponibles" />

    <AppLayout>
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <h1 class="mb-6 text-3xl font-bold text-gray-900">Cuestionarios</h1>
            <div class="grid gap-6 md:grid-cols-2">
                <div v-for="quiz in quizzes" :key="quiz.id" class="rounded-xl border bg-white p-6 shadow transition hover:shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">{{ quiz.title }}</h2>
                    <p class="mt-2 text-gray-600">{{ quiz.description }}</p>

                    <div class="mt-4">
                        <a :href="`/quizzes/${quiz.id}`" class="font-medium text-indigo-600 hover:underline"> Iniciar cuestionario → </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-4 max-w-7xl px-4 sm:px-6 lg:px-8 text-left">
            <button
                class="mt-8 rounded bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700"
               @click="openModal = true"
            >
                Nuevo
            </button>
        </div>
        <QuizModal :open="openModal" @close="openModal = false" />
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import QuizModal from '@/components/Quiz/QuizModal.vue';
import { ref } from 'vue';
const openModal = ref(false);
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    quizzes: Array,
})

// Simulación de cuestionarios (más adelante esto llegará desde Laravel)
const quizzes = [
    { id: 1, title: 'Simulacro ICFES - Módulo 1', description: 'Comprensión lectora y razonamiento.' },
    { id: 2, title: 'Simulacro ICFES - Módulo 2', description: 'Matemáticas y pensamiento lógico.' },
];
</script>
