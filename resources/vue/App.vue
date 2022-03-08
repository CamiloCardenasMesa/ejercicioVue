<template>
    <div class="min-w-screen flex min-h-screen flex-col bg-gray-100">
        <h1 class="max-auto bg-gray-700 py-8 text-center text-2xl font-semibold text-white">CATÁLOGO</h1>
        <div class="flex flex-grow justify-center bg-gray-100 p-8">
            <div class="gap-2 bg-gray-200 py-4 px-4">
                <FormularioCrear />
                <div class="mt-4 flex flex-col gap-2 text-center">
                    <card />
                    <card />
                    <card />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Card from './Componentes/Forms/Card.vue';

import FormularioCrear from './Componentes/Forms/FomularioCrear.vue';
export default {
    components: { FormularioCrear, Card },
};
</script>
