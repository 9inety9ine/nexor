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
