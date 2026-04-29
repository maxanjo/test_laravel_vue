<template>
    <div style="padding: 20px; font-family: sans-serif;">
        <h1>Тестовое задание: Форма (Vuex + Router)</h1>
        
        <form @submit.prevent="onSubmit" style="display: flex; flex-direction: column; max-width: 300px; gap: 10px;">
            <input v-model="form.name" type="text" placeholder="Ваше Имя" required />
            <input v-model="form.email" type="email" placeholder="Email" required />
            
            <select v-model="form.save_method">
                <option value="db">Сохранить в БД</option>
                <option value="email">Отправить на Email</option>
            </select>
            
            <button type="submit" style="cursor: pointer;">Отправить</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';

const store = useStore();
const router = useRouter();

const form = reactive({
    name: '',
    email: '',
    save_method: 'db'
});

const onSubmit = async () => {
    const success = await store.dispatch('submitForm', form);
    
    if (success) {
        router.push('/result');
    } else {
        alert('Ошибка! Проверьте консоль или Laravel логи.');
    }
};
</script>