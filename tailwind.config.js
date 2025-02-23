import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {

                //navbar

            'ns' : '1140px',

                //trips index

                'xmd':'680px',

                //

                'xxmd':'900px',
                'xs':'450px',
                'ss': '370px',
                'xxl': '1330px' ,
                'xlg':'1150px'// Custom breakpoint
              },

              colors: {
                primary: '#753f0e',
                secondary: '#f3cc88',
                tertiary: '#b7965b',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
      ],
    };
