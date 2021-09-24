const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            transitionDuration: {
                '0': '0ms',
                '1250': '1250ms',
                '1500': '1500ms',
                '1750': '1750ms',
                '2000': '2000ms',
            },
            inset: {
                '1/5': '20%',
                '2/5': '40%',
                '3/5': '60%',
                '4/5': '80%',
                '1/6': '16.6%',
                '2/6': '33.3%',
                '3/6': '50%',
                '4/6': '66.6%',
                '5/6': '83.3%',
            },
            margin: {
             '1/2': '50%',
            },
            minHeight: {
             '0': '0',
             '100': '28rem',
             '1/4': '25%',
             '1/2': '50%',
             '3/4': '75%',
             'full': '100%',
            },
            animation: {
                line_to_full: 'line_to_full 1s ease-in-out both',
            },
            keyframes: {
                line_to_full: {
                    '0%': { 
                        transform: 'scaleX(0)'
                    },
                    '100%': { 
                        transform: 'scaleX(1)'
                    }
                }
            }
        },
        colors: Object.assign({
            transparent: 'transparent',
            current: 'currentColor'
        }, colors)
    },

    variants: {
        extend: {

        }
    },

    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
