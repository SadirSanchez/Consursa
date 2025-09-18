<script setup lang="ts">
import AppLayout from '@/layouts/app/AppSidebarLayout.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex-1">
            <slot />
        </div>
        <footer class="mt-8 border-t pt-4 text-center text-sm text-gray-500">&copy; 2025 Concursa. Todos los derechos reservados.</footer>
    </AppLayout>
</template>
