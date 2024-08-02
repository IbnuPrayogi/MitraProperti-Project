const { addDynamicIconSelectors } = require("@iconify/tailwind");
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Plus Jakarta Sans"],
            },
        },
    },
    plugins: [addDynamicIconSelectors(), require("@tailwindcss/forms")],
};
