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
                base: "#eee7e3",
                "primary-orange": "#fa972f",
                "hover-orange": "#faac59",
                "primary-blue": "#4b5c75",
                "secondary-blue": "#9facbc",
                "blueGray-50": "#f8fafc",
                "blueGray-100": "#f4f4f5",
                "blueGray-300": "#cbd5e1",
                "blueGray-400": "#93a3b8",
                "blueGray-600": "#475569",
                "blueGray-700": "#334155",
            },
            backgroundImage: {
                "banner-recruiter":
                    "url('/storage/app/public/global/banner-recruiter.jpg')",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/container-queries"),
    ],
};
