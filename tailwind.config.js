/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,html}"],
   theme: {
     extend: {},
},
   plugins: [],
}

// npx tailwindcss -i input.css -o output.css --watch