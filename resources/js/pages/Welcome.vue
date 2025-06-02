<template>
    <div class="flex min-h-screen flex-col items-center justify-center bg-gradient-to-br from-white-100 to-white px-4 text-center">
        <div class="max-w-2xl">
            <img src="/images/welcome_photo.svg" alt="Educación" class="w-64 mx-auto mb-6" />
            <h1 class="mb-4 text-5xl font-extrabold text-blue-700">Prepárate para tu próximo empleo como servidor público</h1>
            <p class="mb-8 text-lg text-gray-700">
                Bienvenido a tu plataforma de práctica. Realiza simulacros que te ayudarán a alcanzar tu objetivo, mide tu progreso y fortalece tus habilidades.
            </p>

            <div class="mb-8 flex justify-center space-x-4">
                <Link href="/login" class="rounded-lg bg-blue-600 px-6 py-3 font-semibold text-white transition duration-200 hover:bg-blue-700">
                    Iniciar sesión
                </Link>
                <Link href="/register" class="rounded-lg bg-gray-100 px-6 py-3 font-semibold text-gray-800 transition duration-200 hover:bg-gray-200">
                    Registrarse
                </Link>
            </div>

            <p class="text-sm text-gray-400">Accede con tu cuenta para comenzar tus simulacros.</p>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
