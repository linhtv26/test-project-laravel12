<template>
    <form @submit.prevent="register">
        <div>
            <label>Email</label>
            <input type="text" v-model="form.email" required />
        </div>

        <div>
            <label>Name</label>
            <input type="text" v-model="form.name" required />
        </div>

        <div>
            <label>Password</label>
            <input type="password" v-model="form.password" required />
        </div>

        <button type="submit">Register</button>

        <p v-if="errorMessage" style="color: red">{{ errorMessage }}</p>
        <p v-if="successMessage" style="color: green">{{ successMessage }}</p>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = ref({
    name: '',
    email: '',
    password: '',
});

const errorMessage = ref('');
const successMessage = ref('');

const register = async () => {
    try {
        errorMessage.value = '';
        successMessage.value = '';

        const response = await axios.post('/register', form.value);

        successMessage.value = 'User registered successfully!';
    } catch (error) {
        if (error.response?.data?.message) {
            errorMessage.value = error.response.data.message;
        } else {
            errorMessage.value = 'Registration failed.';
        }
        console.log('error:' , error)
    }
};
</script>
