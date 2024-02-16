<template>
    <div v-if="validator.$errors.length && validator.$dirty"
         class="mb-2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative lowercase"
         role="alert">
        <span class="block sm:inline" v-for="error of  validator.$errors"
              :key="error.$uid"> {{ error.$property + ' ' + error.$message }}
        </span>
    </div>
</template>

<script>
export default {
    props: {
        validator: Object
    }
}
</script>
