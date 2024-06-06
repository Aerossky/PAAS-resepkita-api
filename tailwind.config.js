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
            fontFamily: {
                quicksand: ["Quicksand"],
            },
            colors: {
                "resep-kuning": {
                    100: "#FAEBCD",
                    200: "#E1EB71",
                    300: "#F7C873",
                },
                "resep-merah": {
                    100: "#ECAB69",
                    200: "#E36161",
                },
                "resep-hitam": "#434343",
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
