module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        boxShadow: {
            sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            DEFAULT: '0px 0px 5px rgba(0, 0, 0, 1)',
            md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
            '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
            '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
            none: 'none',
        },

        colors: {
            lime: {
                900: '#A3F422',
                800: '#B3F23B',
                700: '#BBF251',
                600: '#C2F264',
                500: '#C9F279',
                400: '#D0EF8E',
                300: '#D8EFA3',
                200: '#DEF2B8',
                100: '#E6F2CE',
            },
            grayish: {
                900: '#575756',
                800: '#60605f',
                700: '#686868',
                600: '#7c7c7c',
            },
            neon: {
                900: '#00ff00',
                500: '#70ff70',
                100: '#c9ffc9',
            },
            brown: {
                900: '#42210B',
                500: '#D3B39C',
                400: '#EDD2C0',
            },

            'totem-gray': '#353231',
        }
    }
  },
  variants: {},
  plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/line-clamp'),
      require('@tailwindcss/custom-forms'),
  ]
}
