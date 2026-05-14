/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/landing_v1/**/*.blade.php",
        "./resources/js/landing_v1.js",
        "./node_modules/flyonui/dist/js/*.js",
    ],
    important: "#landing-v1-app",
    theme: {
        extend: {
            boxShadow: {
                glow: "0 0 60px rgba(34, 211, 238, 0.15)",
            },
        },
    },
    plugins: [require('flyonui'), require('flyonui/plugin')],
};
