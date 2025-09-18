<template>
    <transition name="fade">
        <div v-if="open" class="bg-opacity-50 fixed inset-0 z-50 flex items-center justify-center bg-gray-200">
            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-800">Nuevo cuestionario</h2>

                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label>Título</label>
                        <input v-model="form.title" type="text" class="mt-1 w-full" />
                    </div>

                    <div class="mb-4">
                        <label>Descripción</label>
                        <textarea
                            v-model="form.description"
                            class="mt-1 w-full"
                        ></textarea>
                    </div>

                    <div class="mb-4">
                        <label>Duración minutos</label>
                        <input v-model="form.timeLimit" type="number" class="mt-1 w-full" />
                    </div>

                    <div class="mb-4">
                        <label>Número de preguntas</label>
                        <input v-model="form.numQuestions" type="number" class="mt-1 w-full" />
                    </div>

                    <div class="flex justify-end gap-2">
                        <button type="button" @click="close" class="rounded bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">Cancelar</button>
                        <button
                            type="submit"
                            class="rounded bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700"
                            :disabled="form.processing"
                        >
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </transition>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { watch } from 'vue';

const props = defineProps({
    open: Boolean,
});

const emits = defineEmits(['close']);

// Formulario con Inertia
const form = useForm({
    title: '',
    description: '',
    timeLimit: '',
    numQuestions: '',
});

function close() {
    emits('close');
    form.reset();
}

function submit() {
    form.post(route('quizzes.store'), {
        onSuccess: () => {
            close();
        },
    });
}

// Cerrar modal cuando open cambie a false
watch(
    () => props.open,
    (newVal) => {
        if (!newVal) form.reset();
    },
);
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
