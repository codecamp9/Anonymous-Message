/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "custom-bg": "#EEE9DA",
                "custum-text": "#6096B4",
            },
        },
        screens: {
            ffsm: "359px",
            fsm: "374px",
            bsm: "389px",
            ism: "413px",
            sm: "640px",
            md: "767px",
            lg: "1024px",
            xl: "1280px",
        },
    },
    daisyui: {
        themes: false,
    },
    plugins: [require("daisyui")],
};
