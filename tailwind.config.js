/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center : true,
      padding: '14px',
    },
    extend: {
      fontFamily : {
        "poppins" :['poppins'],
        "itim" : ['itim'],
        "jura" : ['jura']
      },
      backgroundImage:{
        'my-image' : "url('C:/laragon/www/crud-portolk/public/img/blue-bg.png')"
      },
      colors : {
        "hitam" : '#000000',
        "btn-contact" : '#4771AF',
        "grey" : '#939393',
        "grey-ft" : '#D8D8D8',
        "cyan" : '#0EFFC5',
        "birungu" : '#0500FF',
        "led-fill" : '#97A1FF',
        "led" : '#0066FF',
        "green" : '#0EFF34',
        "str-btn" : '#01193D',
        "biru" : '#004DC1',
        "card" : '#2B2C2B',
        "card-str" : '#2E5CA1',
        "led-green" : '#0EFFC5',
        "primary" :'#1d4ed8',
      },
      dropShadow : {
        'led' : '0px 0px 15px #001AFF',
        'led-green' : '0px 0px 15px #0EFFC5',
        'led-black' : '0px 0px 15px #000000',
      },
      letterSpacing: {
        lebar: '.5em',
      }
    },
  },
  plugins: [],
}

