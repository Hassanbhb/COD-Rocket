const shipping_type = document.getElementById('shipping_type')
const city_shipping_options = document.querySelector('.city')
const offer_shipping_options = document.querySelector('.offer')

shipping_type.addEventListener('change', (e) => {
  const shipping_type = e.target.value
  
  switch (shipping_type) {
    case 'free':
      document.querySelector('.shipping_options_section').classList.add('hidden')
      city_shipping_options.classList.add('hidden')
      offer_shipping_options.classList.add('hidden')
      break;
    case 'city':
      document.querySelector('.shipping_options_section').classList.remove('hidden')
      offer_shipping_options.classList.add('hidden')
      city_shipping_options.classList.remove('hidden')
      break;
    case 'offer':
      document.querySelector('.shipping_options_section').classList.remove('hidden')
      city_shipping_options.classList.add('hidden')
      offer_shipping_options.classList.remove('hidden')
      break;
    default:
      document.querySelector('.shipping_options_section').classList.add('hidden')
      offer_shipping_options.classList.add('hidden')
      break;
  }
})