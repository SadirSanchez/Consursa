<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';

const user = usePage().props.auth.user;

</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-semibold mb-4">Hola, {{ user.name }} 👋</h1>
                        <p class="text-gray-700">
                            Bienvenido a tu panel. Aquí podrás acceder a tus cuestionarios, consultar tus resultados y seguir tu progreso.
                        </p>

                        <!-- Puedes agregar más secciones aquí, como últimos intentos, estadísticas, etc. -->
                        <div class="mt-6 grid gap-6 md:grid-cols-3">
                            <div class="p-4 bg-blue-50 rounded-lg shadow hover:shadow-md transition">
                                <h2 class="text-lg font-medium text-blue-800 mb-2">Cuestionarios</h2>
                                <p class="text-sm text-gray-600">Accede a todos los cuestionarios tipo ICFES disponibles.</p>
                            </div>
                            <div class="p-4 bg-green-50 rounded-lg shadow hover:shadow-md transition">
                                <h2 class="text-lg font-medium text-green-800 mb-2">Resultados</h2>
                                <p class="text-sm text-gray-600">Consulta tu historial de respuestas y mejora continua.</p>
                            </div>
                            <div class="p-4 bg-yellow-50 rounded-lg shadow hover:shadow-md transition">
                                <h2 class="text-lg font-medium text-yellow-800 mb-2">Estadísticas</h2>
                                <p class="text-sm text-gray-600">Visualiza tu desempeño en diferentes áreas del examen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
