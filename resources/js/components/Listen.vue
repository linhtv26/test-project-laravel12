<template>
    User:
    <div>
        <p v-for="user in users" :key="user.id">
            👤 New user registered: {{ user.name }}
        </p>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const users = ref([]);

onMounted(() => {
    console.log('Echo:', window.Echo)

    let channel = Echo.channel('admin-channel');
    channel.listen('.user.registered', (event) => {
        console.log('here')
        alert("Bạn đã bị thu hồi quyền truy cập!");
    });
});
</script>
