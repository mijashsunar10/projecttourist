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
                'xlg':'1160px'// Custom breakpoint
              },

              colors: {
                primary: {
                    100: '#fbe9e7',
                    300: '#d18642',
                    500: '#753f0e', // Main primary color
                    700: '#50280a',
                    900: '#3e1f07',
                  },
                  secondary: {
                    100: '#fdf6e7',
                    300: '#f7dba0',
                    500: '#f3cc88', // Main secondary color
                    700: '#c4a15f',
                    900: '#8f743f',
                  },
                  tertiary: {
                    100: '#e0caa2',
                    300: '#c7a671',
                    500: '#b7965b', // Main tertiary color
                    700: '#8c6c3c',
                    900: '#5a4727',
                  },
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
      ],
    };
