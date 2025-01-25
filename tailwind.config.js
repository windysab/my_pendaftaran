/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './node_modules/flyonui/dist/js/*.js',
        './node_modules/flyonui/dist/js/accordion.js', 
    ],
    theme: {
        extend: {
            colors: {
                'court-green': {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#14532d',
                }
            },
            fontFamily: {
                'inter': ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('flyonui'),
        require('flyonui/plugin')
    ],
}
