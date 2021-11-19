module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        cyan: {
          light: '#66CFF2',
          DEFAULT: '#00B1EB',
          dark: '#0082AD',
        },
        navy: {
          light: '#195C90',
          DEFAULT: '#0E3655',
          dark: '#071D2E',
        },
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
  ],
  purge: {
    content: [
      'site/templates/**/*.html',
      'site/templates/**/*.php',
      'resources/**/*.js',
      'resources/**/*.vue'
    ],
  },
}
