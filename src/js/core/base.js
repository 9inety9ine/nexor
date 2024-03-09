const siteHeader = document.querySelector('header');
const menuLinks = siteHeader.querySelectorAll('.menu-item a');
for (const link of menuLinks) {
	link.addEventListener('mouseenter', e => {
		for (const link of menuLinks) if (link !== e.target) link.classList.add('no-hover');
	});
	link.addEventListener('mouseleave', () => {
		for (const link of menuLinks) link.classList.remove('no-hover');
	});
}

window.initImageLoad = () => {
	let imagesToLoad = document.querySelectorAll('img[data-src]');
	if (imagesToLoad) {
		const loadImages = image => {
			const imageSRC = image.getAttribute('data-src');
			if (imageSRC) {
				image.setAttribute('src', imageSRC);
				image.onload = () => {
					image.removeAttribute('data-src');
					image.classList.remove('preload');
				};
			}
		};
		if ('IntersectionObserver' in window) {
			const observer = new IntersectionObserver((items, observer) => {
				items.forEach(item => {
					if (item.isIntersecting) {
						loadImages(item.target);
						observer.unobserve(item.target);
					}
				});
			});
			imagesToLoad.forEach(img => {
				observer.observe(img);
			});
		} else {
			imagesToLoad.forEach(img => {
				loadImages(img);
			});
		}
	}
};
window.addEventListener('DOMContentLoaded', window.initImageLoad);
