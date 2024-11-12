/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        primary: "#F6AD49",
        dark: "#433D3C",
        secondary: "#E60033",
      },
      fontFamily: {
        montserrat: "Montserrat",
        economica: "Economica",
        coming: "Coming Soon",
      },
      backgroundImage: {
        banner: "url('../img/night.jpg')",
        menu: "url('../img/pattern.jpeg')",
      },
    },
  },
  plugins: [],
};
