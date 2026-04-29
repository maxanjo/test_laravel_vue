import { createStore } from 'vuex';
import axios from 'axios';

export default createStore({
    state: {
        submittedData: null 
    },
    getters: {
        getSubmittedData: (state) => state.submittedData
    },
    mutations: {
        SET_SUBMITTED_DATA(state, data) {
            state.submittedData = data;
        }
    },
    actions: {
        async submitForm({ commit }, formData) {
            try {
                await axios.post('/api/form', formData);
                
                commit('SET_SUBMITTED_DATA', formData);
                return true;
            } catch (error) {
                console.error('Ошибка при отправке формы:', error);
                return false;
            }
        }
    }
});