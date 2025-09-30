/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx,vue,blade.php}", // sesuaikan dengan projectmu
  ],
  theme: {
    extend: {
      colors: {
        sage: {
          50: '#f4f6f5',
          100: '#e3e8e6',
          200: '#cad2ce',
          300: '#a5b3ad',
          400: '#798d84',
          500: '#5e7269',
          600: '#4a5c55',
          700: '#3e4b46',
          800: '#353f3b',
          900: '#2f3633',
        }
      }
    },
  },
  plugins: [],
}
