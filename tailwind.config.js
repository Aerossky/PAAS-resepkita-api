/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                customRed: "#E36161",
                customOrange: "#ECAB69",
                customOrangeTua: "#F28B21",
                customGreen: "#E1EB71",
                customGray: "#FDFDFD",
            },
        },
    },
    plugins: [],
};
