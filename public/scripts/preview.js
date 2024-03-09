const preview_form = document.querySelector('.preview-form')
const preview_header = document.querySelector('.preview-header')
const preview_inputs = document.querySelectorAll('.preview-input')
const preview_button = document.querySelector('.preview_button')

const preview_settings_header_input = document.querySelector('.preview-header-input')
const preview_settings_color_radios = document.querySelectorAll('input[name="ColorOption"]')
const preview_settings_button_input = document.querySelector('.preview-button-input')

preview_settings_header_input.addEventListener('change', (e) => {
  preview_header.innerHTML  = e.target.value.length === 0 ? "Please fill this form" : e.target.value
})

preview_settings_color_radios.forEach(radio => {
  radio.addEventListener('change', (e) => {
    preview_form.style.borderColor = e.target.value
    changePreview(e.target.value)
  })
})

preview_settings_button_input.addEventListener('change', (e) => {
  preview_button.innerHTML = e.target.value.length === 0 ? "Order Now!" : e.target.value
})

function changePreview(color){
  console.log(color)
  preview_inputs.forEach(input => {
    input.style.borderColor = color
  })
}
