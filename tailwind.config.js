module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        orange: {
          light: '#FF7216',
          DEFAULT: '#FF6500',
          dark: '#EE5E00',
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
