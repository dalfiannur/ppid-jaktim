/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                plusJakartaSans: ["Plus Jakarta Sans", "sans-serif"],
            },
            fontSize: {
                xxs: ["10px", "12px"],
                "28px": ["1.75rem", "2.5rem"],
                "40px": ["2.5rem", "3.25rem"],
            },
            colors: {
                primary: "#EB30A2",
            },
            backgroundImage: {
                'hero-text-background': "url('/images/hero-text-background.png')",
            }
        },
    },
    plugins: [],
};
