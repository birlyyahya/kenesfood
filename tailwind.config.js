import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                serif: ["Montaga", "Cambria", '"Times New Roman"'],
                Mono: ["Mono", "Monaco", "Consolas"],
            },
            colors: {
                csprimary: "#672A0C",
                cssecondary: "#9BA5B7",
                csred: "#BC0000",
                csdarkblue: "#160C28",
                csorange: "#FFA552",
                csteritery: "#EEF1F4",
            },
            position: ["sticky"],
        },
    },

    plugins: [forms],
};
