// index.js
import "flyonui/flyonui";

const getToggleCountInstance = (element) => {
	if (!window.HSToggleCount) {
		return null;
	}

	if (!window.$hsToggleCountCollection) {
		window.$hsToggleCountCollection = [];
	}

	const existing = window.HSToggleCount.getInstance(element, true);
	if (existing && existing.element) {
		return existing.element;
	}

	return new window.HSToggleCount(element);
};

const startToggleCount = (element) => {
	if (element.dataset.countStarted === "true") {
		return;
	}

	const instance = getToggleCountInstance(element);
	if (!instance) {
		return;
	}

	element.dataset.countStarted = "true";
	instance.countUp();
};

window.addEventListener("load", () => {
	const counters = document.querySelectorAll("[data-toggle-count]");

	if (!counters.length) {
		return;
	}

	if (window.HSStaticMethods && window.HSStaticMethods.autoInit) {
		window.HSStaticMethods.autoInit(["toggle-count"]);
	}

	if ("IntersectionObserver" in window) {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						startToggleCount(entry.target);
						observer.unobserve(entry.target);
					}
				});
			},
			{ threshold: 0.35 }
		);

		counters.forEach((counter) => observer.observe(counter));
		return;
	}

	counters.forEach((counter) => startToggleCount(counter));
});
