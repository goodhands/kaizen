module.exports = {
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
    },

    fontFamily: {
      display: ['Gilroy', 'sans-serif'],
      body: ['Graphik', 'sans-serif', 'Work sans'],
    },
    borderWidth: {
      default: '1px',
      '0': '0',
      '2': '2px',
      '4': '4px',
    },
    extend: {
      width:{
        'image-item': '24%',
        'image-item-small': '48%'
      },

      colors: {
        cyan: '#9cdbff',
        primary: '#AEFFAC',
        grey: 'lightgrey',
        'white-ter': '#F9F9F9',
        'dark-grey': '#efeeee',
        'light-dark': '#3e3e3e',
        'fade-black': 'rgba(0,0,0,0.45)',
        'subtitle': '#727272'
      },

      boxShadow:{
        'outlined': '1px 1px 2px 0px rgba(0, 0, 0, 0.11)',
        'btn-secondary': '0px 0px 2px rgba(0, 0, 0, 0.25)',
        'image-item': '0px 0px 1px rgba(0, 0, 0, 0.25)'
      },

      fontFamily:{
        primary: ["Work sans", 'sans-serif']
      },
      padding: {
        primary: '80px',
        btn: '0.05rem 0.6rem'
      },
      spacing: {
        '96': '24rem',
        '128': '32rem',
      },

      height:{
        hero : '500px',
        dash: '0.05rem'
      },
    }
  }
}
