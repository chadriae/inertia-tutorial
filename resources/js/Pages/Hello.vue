<template>
    <div>
        Hi there, i am the hello page

            <div v-for="(message, index) in messages" :key="index">
                {{ message.text }}
            </div>

        <inertia-link href="/contact">Go to the contact page</inertia-link>
    </div>
 
</template>

<script>
export default {
    props: {
        messages: Array
    }
}
</script>
