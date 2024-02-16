import axios from "axios";

export default {
    state: {
        contacts: [],
    },
    getters: {
        getContacts(state) {
            return state.contacts
        }
    },
    mutations: {
        setContact(state, data) {
            state.contacts.push(data)
        },
    },
    actions: {
        sendContact({commit}, data) {
            axios.post('api/contact', data)
                .then(response => {
                    commit('setContact', data)
                    return response
                })
                .catch(error => Promise.reject(error));
        },
    },
}
