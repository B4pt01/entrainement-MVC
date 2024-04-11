document.addEventListener('DOMContentLoaded', function () {
	let menuButton = document.getElementById('menuButton');
	let mobileMenu = document.getElementById('mobileMenu');

	if (menuButton && mobileMenu) {
		menuButton.addEventListener('click', function () {
			console.log('click');
			mobileMenu.classList.toggle('hidden');
		});
	}
});
