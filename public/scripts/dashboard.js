const dahboard_tabs_card = document.querySelector(".dash-tabs")
const dash_close_tabs_btn = document.querySelector(".dash-close-btn")

dash_close_tabs_btn.addEventListener('click', () => {
  dahboard_tabs_card.classList.add('hidden')
})

const dash_video_card = document.querySelector(".dash-video-card")
const dash_video_close_btn = document.querySelector(".dash-video-close-btn")

dash_video_close_btn.addEventListener('click', () => {
  dash_video_card.classList.add('hidden')
})