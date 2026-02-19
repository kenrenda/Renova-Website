module.exports = {
  content: ['./**/*.{html,js,php}'],
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens:{
      sm:'480px',
      md:'768px',
      lg:'976px',
      xl:'1440px',
    },  
    extend: {
      colors:{
        renovaBlue: 'hsl(259, 73%, 28%)',
        renovaGreen: 'hsl(70, 93%, 44%)',
        renovaBrightGreen: 'hsl(70, 93%, 50%)',
        renovaWhite: 'hsl(0, 0%, 85%)',
        renovaPaleWhite: 'hsla(0, 0%, 85%, 0.6)',
        renovaBrightBlue: 'hsl(259, 80%, 39%)',
      },
      backgroundImage: {
        'renova-gradient': 'linear-gradient(90deg, var(--tw-gradient-stops))',
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
