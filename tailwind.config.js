/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: ({ theme }) => ({
      center: true,
      padding: theme('custom.spacing.gutter'),
    }),
    custom: {
      spacing: {
        gutter: '0.75rem',
      },
    },
    extend: {
      colors: {
        primary: '#fd0000',
        gray: "#636b6f",
        'dark-gray': '#1b1b1b',
        'medium-gray': '#292929',
        'light-gray': '#d8d8d8',
      },
    },
  },
  plugins: [],
}