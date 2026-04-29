<template>
    <div style="padding: 20px; font-family: sans-serif;">
        <h1>Результат (Данные из Vuex Getters)</h1>
        
        <div v-if="submittedData">
            <p><strong>Имя:</strong> {{ submittedData.name }}</p>
            <p><strong>Email:</strong> {{ submittedData.email }}</p>
            <p><strong>Метод:</strong> {{ submittedData.save_method }}</p>
        </div>
        <div v-else>
            <p>Нет данных. Вернитесь и заполните форму.</p>
        </div>
        
        <br>
        <router-link to="/">Вернуться к форме</router-link>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { useStore } from 'vuex';

const store = useStore();

const submittedData = computed(() => store.getters.getSubmittedData);
</script>