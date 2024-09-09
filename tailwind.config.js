/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/js/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            primary: ['"Archivo Black"'],
            secondary: ['"Raleway"'],
            tertiary: ['"Lora"'],

        },
        minHeight: {
            'screen': '75vh',
            'full' : '100vh',
          },
          colors: {
            'primary': '#243c5a',
            'secondary': '#e18935',
            'background': '#EEF0F2',
            'header': '#f5f5f5',
          },
    },
  },
  plugins:  [require("tw-elements/plugin.cjs")],
  darkMode: "class",
}

