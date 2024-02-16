module.exports = {
    content: [
        "./index.html",
        "./src/**/*.{vue,js,ts,jsx,tsx}",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            width: {
                '4/6': '66.666667%',
            },
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
