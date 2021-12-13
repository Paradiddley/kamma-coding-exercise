<template>
    <Layout>
        <div class="text-center">
            <h1 class="text-xl">{{ title }}</h1>
            <div>{{ description }}</div>
        </div>
    </Layout>
</template>

<script>
import Layout from "./Layout";

export default {
    components: { Layout },
    props: {
        status: Number,
    },
    computed: {
        title() {
            return {
                503: '503: Service Unavailable',
                500: '500: Server Error',
                404: '404: Page Not Found',
                403: '403: Forbidden',
            }[this.status]
        },
        description() {
            return {
                503: 'Sorry, we are doing some maintenance. Please check back soon.',
                500: 'Whoops, something went wrong on our servers.',
                404: 'Sorry, the page you are looking for could not be found.',
                403: 'Sorry, you are forbidden from accessing this page.',
            }[this.status]
        },
    },
}
</script>
