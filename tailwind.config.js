/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/views/**/**/*.blade.php",
        "./resources/views/**/**/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                black: "#161616",
                primary: "#18B7CD",
                warning: "#CCBF00",
                orange: "#FFA855",
                danger: "#FF6B6B",
                success: "#20C997",
            },
            fontFamily: {
                poppins: "Poppins",
                playwrite: "Playwrite AU VIC",
            },
        },
    },
    plugins: [],
};
