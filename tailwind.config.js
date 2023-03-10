/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    build: {
        css: "public/css/app.css", // Ruta donde se generarĂ¡ el archivo CSS
    },
    theme: {
        extend: {},
    },
    plugins: [],
};
