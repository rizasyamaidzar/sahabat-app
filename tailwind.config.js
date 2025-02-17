import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // warna untuk FE player
                "fe-primary": "#F1F1F1",
                "fe-secondary": "#1E3666",
                "fe-accent": "#F68F26",
                // warna untuk CMS coach
                "cms-primary": "#F1F1F1",
                "cms-secondary": "#1E3666",
                "cms-accent": "#F68F26",
            },
            screens: {
                mobile: { max: "640px" }, // Hanya berlaku untuk layar <= 640px
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
