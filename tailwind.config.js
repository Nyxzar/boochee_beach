module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: ["Gotham Book"],
        body: ["Gotham Book"],
      },
      colors: {
          'cream': '#f8f0eb',
          'brown': '#a98f5e',
          'dark_brown': '#474734',
          'darker_brown': '#514b23',
          'light_green': '#cbc9ad',
      },
      margin: {
        'auto': 'auto',
      },
      width: {
        '36%': '36%',
      },
      minWidth: {
        '20': '20rem',
      },
      height: {
        '650': '650px',
        '600': '600px',
        '550': '550px',
        '500': '500px',
        '450': '450px',
        '400': '400px',
        '350': '350px',
        '300': '300px',
      },
      minHeight: {
        '543px': '543px',
      },
      screens: {
        '2md': '960px',
        '3xl': '1800px',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
