<template>
    <div class="bg-blue-300">
        <div>
            Hi there, i am the messages page
            <inertia-link href="/hello">Go to the Home page</inertia-link>
            <inertia-link href="/contact">Go to the Contact page</inertia-link>
        </div>

        <div class="flex space-x-10 justify-center items-center min-h-screen">
        
            <div>
                <div 
                    v-for="(message, index) in messages" 
                    :key="index"
                    class="bg-white p-8 mb-4 rounded shadow"
                >
                    {{ message.text }}
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-extrabold mb-12 text-blue-100">Add a message</h2>
        
                <form @submit.prevent="submit">
                    <textarea v-model="form.text" rows="8"></textarea>
                    <div v-if="errors.text">{{ errors.text }}</div>
                    <button type="submit">Add message</button>
                </form>
            </div>
        </div>
    </div>
 </template>

<script>
export default {
    props: {
        messages: Array,
        errors: Object
    },
    data () {
        return {
            form: { text: ''}
        }
    },
    methods: {
        submit() {
            this.$inertia.post("/messages", this.form);
        }
    }
}
</script>
