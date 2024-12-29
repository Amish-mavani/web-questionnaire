let isScrapingDetected = false;
function replaceContentWithMessage(message) {
    function replaceTextContent(node) {
        if (node.nodeType === Node.TEXT_NODE) {
            node.nodeValue = message; // Replace text node content
        } else if (node.nodeType === Node.ELEMENT_NODE) {
            for (const child of node.childNodes) {
                replaceTextContent(child); 
            }
        }
    }
    replaceTextContent(document.body); 
}
function monitorScraping() {
    const observer = new PerformanceObserver((list) => {
        list.getEntries().forEach((entry) => {
            // Detect unusual resource loads (e.g., many frequent requests to fetch the page)
            if (entry.initiatorType === "script" || entry.name.includes("scrape")) {
                isScrapingDetected = true;
                replaceContentWithMessage("This cannot be copied");
                observer.disconnect(); 
            }
        });
    });
    observer.observe({ type: "resource", buffered: true });
}
document.addEventListener('DOMContentLoaded', () => {
    monitorScraping();
    document.addEventListener('copy', (event) => {
        if (isScrapingDetected) {
            event.clipboardData.setData("text/plain", "This cannot be copied");
            event.preventDefault();
        }
    });
});
