export default () => ({
	message: null,
	status: null,

	show(event) {
		const [{ message, status }] = event

		this.message = message
		this.status = status
	},

	hide() {
		this.message = null
	},

	autoHide() {
		const timeout = setTimeout(() => {
			this.hide()
			clearTimeout(timeout)
		}, 3000)
	}
})