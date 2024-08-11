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
            backgroundImage: {
                backgroundbutton: "url('/public/images/menu_bg_gradient.png')",
                backgroundborders: "url('/public/images/restaurantkader.png')",
            },
            fontFamily: {
                sans: ["Microsoft YaHei", "sans-serif"],
                chinese: ["Chinese Takeaway", "sans-serif"],
            },
            animation: {
                marquee: "marquee 30s linear infinite",
                marquee2: "marquee2 30s linear infinite",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                marquee2: {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0%)" },
                },
            },
        },
    },

    plugins: [forms],
};
