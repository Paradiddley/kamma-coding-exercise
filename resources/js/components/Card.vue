<template>
    <section class="border rounded bg-white py-4 px-4 md:px-9">
        <div v-if="header">
            <h2 class="text-2xl font-bold mb-0">{{ header }}</h2>
            <h6 class="md:w-8/12 mb-5">{{ subHeader }}</h6>
        </div>

        <slot />

        <div v-if="ctaUrl" class="flex flex-row justify-end mt-10">
            <Link class="inline-flex items-center uppercase text-sm" :href="ctaUrl">{{ ctaText ?? 'read more' }}<svg class="ml-2 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13.293 7.293a.999.999 0 0 0 0 1.414L15.586 11H8a1 1 0 0 0 0 2h7.586l-2.293 2.293a.999.999 0 1 0 1.414 1.414L19.414 12l-4.707-4.707a.999.999 0 0 0-1.414 0z" fill="#db2778"/></svg></Link>
        </div>
    </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components:{ Link },
    props: [
        'header',
        'subHeader',
        'ctaUrl',
        'ctaText'
    ]
}
</script>
