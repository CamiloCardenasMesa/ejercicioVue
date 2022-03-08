<template>
    <div class="flex justify-between overflow-hidden rounded-lg bg-white shadow-sm duration-500 hover:scale-105">
        <div class="flex flex-grow">
            <div class="flex items-center px-4">
                <input class="rounded-full text-green-400 focus:ring-green-400" type="checkbox" />
            </div>
            <div class="flex-grow pl-2 text-left">
                <div class="font-semibold text-gray-800">Título</div>
                <div class="flex items-center gap-1 italic">
                    <ClockIcon class="h-4" />
                    <span>hace 2 horas</span>
                </div>
            </div>
        </div>
        <button class="bg-red-500 p-2 hover:bg-red-400">
            <TrashIcon class="h-5" />
        </button>
    </div>
</template>

<script>
import { TrashIcon, ClockIcon } from '@heroicons/vue/outline';
export default {
    components: { TrashIcon, ClockIcon },
};
</script>
