// index.js
import "flyonui/flyonui"

// console.log("hello from landing_v1.js");
// console.log("HSStaticMethods available:", !!window.HSStaticMethods);

// // Helper function to safely init
// function initFlyonUI() {
//   if (window.HSStaticMethods?.autoInit) {
//     console.log("Calling autoInit");
//     window.HSStaticMethods.autoInit();
//   }
// }

// // Init immediately if DOM is ready
// if (document.readyState === "loading") {
//   console.log("DOM still loading, waiting for DOMContentLoaded");
//   document.addEventListener("DOMContentLoaded", initFlyonUI);
// } else {
//   console.log("DOM already loaded, initializing now");
//   initFlyonUI();
// }

// // Also init on page load
// window.addEventListener("load", () => {
//   console.log("Page fully loaded, reinitializing");
//   initFlyonUI();
// });

// // Add a small delay init as fallback
// setTimeout(() => {
//   console.log("Timeout init (500ms)");
//   initFlyonUI();
// }, 500);
