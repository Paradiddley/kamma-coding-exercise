<template>
    <Head title="Part 2"></Head>
    <Layout>
        <Card
            header="Send to a friend"
            sub-header="Share this great deal with friends!"
        >
            <flash-message />
            <div class="w-full md:w-10/12 md:mx-auto">
                <form class="flex flex-col gap-4" @submit.prevent="submit">
                    <div class="flex items-center">
                        <div class="mb-1 mb-0 w-1/3">
                            <label class="font-bold">Your name * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.sender_name" />
                            <div class="text-red-400 text-xs" v-if="errors.sender_name">{{ errors.sender_name }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="mb-1 mb-0 w-1/3">
                            <label class="font-bold">Friend's name * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.recipient_name" />
                            <div class="text-red-400 text-xs" v-if="errors.recipient_name">{{ errors.recipient_name }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="mb-1 mb-0 w-1/3">
                            <label class="font-bold">Friend's email * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.recipient_email" />
                            <div class="text-red-400 text-xs" v-if="errors.recipient_email">{{ errors.recipient_email }}</div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button class="border rounded bg-gray-300 uppercase text-xs p-2" type="submit">submit</button>
                    </div>
                </form>
            </div>
        </Card>
    </Layout>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import { reactive } from 'vue'
import Layout from "./Layout";
import Card from "../components/Card";
import FlashMessage from "../components/FlashMessage";

export default {
    components: { Link, Head, Layout, Card, FlashMessage },
    props: {
        errors: Object,
    },
    setup () {
        const form = reactive({
            sender_name: null,
            recipient_name: null,
            recipient_email: null
        })

        function submit() {
            Inertia.post('/part-two/submit', form);
        }

        return { form, submit }
    },
}
</script>
