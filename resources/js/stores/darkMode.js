export default {
	on: false,

	get darkEnabled() {
		return window.matchMedia('(prefers-color-scheme: dark)').matches
	},

	enable() {
		this.on = true
		localStorage.setItem('codrocket:dark', this.on)
	},

	disable() {
		this.on = false
		localStorage.setItem('codrocket:dark', this.on)
	},

	init() {
		this.on = localStorage.getItem('codrocket:dark') ? JSON.parse(localStorage.getItem('codrocket:dark')) : this.darkEnabled
	}
}