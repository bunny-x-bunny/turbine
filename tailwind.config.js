import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '86': '21.5rem',
            },
            fontSize: {
                '3.5xl': ['2rem', {
                    lineHeight: '2.25rem'
                }]
            }
        },
        listStyleType: {
          none: 'none',
          disc: 'disc',
          decimal: 'decimal',
        }
    },
    plugins: [
      require('flowbite/plugin')
    ],
};
