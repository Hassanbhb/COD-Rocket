window.onload = (e) => {
  show_dash()
}

const dahboard_tabs_card = document.querySelector(".dash-tabs")
const dash_close_tabs_btn = document.querySelector(".dash-close-btn")

dash_close_tabs_btn.addEventListener('click', () => {
  dahboard_tabs_card.classList.add('hidden')
  localStorage.setItem('is_dahboard_tabs_hidden', 'true')
  show_dash()
})

const dash_video_card = document.querySelector(".dash-video-card")
const dash_video_close_btn = document.querySelector(".dash-video-close-btn")

dash_video_close_btn.addEventListener('click', () => {
  dash_video_card.classList.add('hidden')
  localStorage.setItem('is_dahboard_vid_hidden', 'true')
  show_dash()
})

function show_dash(){
  if(localStorage.getItem('is_dahboard_tabs_hidden') === 'true' && localStorage.getItem('is_dahboard_vid_hidden') === 'true') {
  
    document.querySelector('.tabs_vid_section').classList.add('hidden')
    document.querySelector('.dash_data').classList.remove('hidden')
  
  }
}