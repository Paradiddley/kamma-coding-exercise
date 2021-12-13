<template>
    <Head title="Part 2" />
    <Layout>
        <Card
            header="Send to a friend"
        >
            <p class="text-gray-400 mb-4">Share this great deal with friends!</p>
            <flash-message />
            <div class="w-full md:w-10/12 md:mx-auto">
                <form class="flex flex-col gap-4" @submit.prevent="submit">
                    <div class="flex items-center">
                        <div class="pr-5 w-1/3 text-right">
                            <label class="font-bold">Your name * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.sender_name" />
                            <div class="text-red-400 text-xs" v-if="errors.sender_name">{{ errors.sender_name }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="pr-5 w-1/3 text-right">
                            <label class="font-bold">Friend's name * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.recipient_name" />
                            <div class="text-red-400 text-xs" v-if="errors.recipient_name">{{ errors.recipient_name }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="pr-5 w-1/3 text-right">
                            <label class="font-bold">Friend's email * </label>
                        </div>
                        <div class="w-2/3 md:flex-grow">
                            <input class="w-full" type="text" v-model="form.recipient_email" />
                            <div class="text-red-400 text-xs" v-if="errors.recipient_email">{{ errors.recipient_email }}</div>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="w-1/3"></div>
                        <div class="w-2/3 inline-flex items-center">
                            <svg class="bg-green-700  h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13.293 7.293a.999.999 0 0 0 0 1.414L15.586 11H8a1 1 0 0 0 0 2h7.586l-2.293 2.293a.999.999 0 1 0 1.414 1.414L19.414 12l-4.707-4.707a.999.999 0 0 0-1.414 0z" fill="#fff"/></svg>
                            <button class="uppercase text-sm p-2" type="submit">submit</button>
                        </div>
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
