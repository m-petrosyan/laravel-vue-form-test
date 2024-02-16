<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <ErrorMsgComponent :validator="v$"/>
            <form @submit.prevent="contact" class="space-y-8">
                <div>
                    <label for="subject"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Имя</label>
                    <p class="accent-red-700">{{ v$.form.name.message }}</p>
                    <input v-model="form.name" type="text" id="subject"
                           class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                           placeholder="" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Обращение</label>
                    <textarea v-model="form.message" id="message" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                              placeholder=""></textarea>
                </div>
                <input :disabled="v$.$errors.length" type="submit"
                       class="bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                       value="Отправить">
            </form>
        </div>
    </section>
</template>

<script>
import useVuelidate from "@vuelidate/core";
import {minLength, required} from "@vuelidate/validators";
import ErrorMsgComponent from "@/components/messages/ErrorMsgComponent.vue";
import {mapActions} from "vuex";

export default {
    components: {ErrorMsgComponent},
    setup() {
        return {v$: useVuelidate()}
    },
    validations() {
        return {
            form: {
                name: {required, minLength: minLength(2)},
                message: {required, minLength: minLength(10)},
            }
        }
    },
    data() {
        return {
            form: {
                name: '',
                message: ''
            }
        }
    },
    methods: {
        ...mapActions(['sendContact']),
        contact() {
            this.v$.$touch()
            if (!this.v$.$error) {
                this.sendContact({...this.form}).then(() => {
                    this.form.name = this.form.message = ''
                    this.v$.$reset()
                })
            }
        }
    },
    computed: {}
}
</script>

<style scoped>

</style>
