<template>
    <div class="relative overflow-x-auto mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Имя
                </th>
                <th scope="col" class="px-6 py-3">
                    Обращение
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="contact in contacts" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ contact.name }}
                </td>
                <td class="px-6 py-4">
                    {{ contact.message }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
import {mapGetters} from "vuex";

export default {
    methods: {
        ...mapGetters(["getContacts"]),

    },
    computed: {
        contacts() {
            return this.getContacts()
        }
    }
}
</script>
