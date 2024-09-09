/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      dropShadow: {
        '3d': '2px 2px 0px rgba(0, 0, 0, 0.8)',
      }
    },
  },
  plugins: [],
}

