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
                'base': '#eee7e3',
                'primary-orange': '#fa972f',
                'hover-orange': '#faac59',
                'primary-blue': '#4b5c75',
                'secondary-blue': '#9facbc',
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/container-queries')
    ],
}

