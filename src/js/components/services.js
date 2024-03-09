const serviceTabsContainer = document.querySelector('.service-tabs');
const serviceTabTitles = serviceTabsContainer.querySelector('.tab-titles');
const serviceTabElements = serviceTabsContainer.querySelector('.tab-elements');
if (serviceTabTitles && serviceTabElements) {
	const serviceTabButtons = serviceTabTitles.querySelectorAll('button');
	const serviceTabs = serviceTabElements.querySelectorAll('.tab');
	for (const button of serviceTabButtons)
		button.addEventListener('click', e => {
			e.preventDefault();
			if (button.classList.contains('active')) return;
			const target = button.dataset.target;
			for (const button of serviceTabButtons) button.classList.remove('active');
			for (const tab of serviceTabs) tab.classList.remove('active');
			serviceTabElements.querySelector('#' + target).classList.add('active');
			button.classList.add('active');
		});
}
