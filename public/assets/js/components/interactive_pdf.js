pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';
var pdfUrl = document.getElementById("pdf_script").getAttribute("data-pdf-url"); // PDF stored in public storage
var pdfDoc = null;
var scale = 2;
var pdfContainer = document.getElementById('pdf-container');

pdfjsLib.getDocument(pdfUrl).promise.then(function (pdf) {
    pdfDoc = pdf;
    renderAllPages(); // Load first page by default
});

function renderAllPages() {
    for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
        renderPage(pageNum);
    }
}

function renderPage(pageNumber) {
    pdfDoc.getPage(pageNumber).then(function (page) {
        var viewport = page.getViewport({
            scale: scale
        });

        // Create a new canvas for each page
        var canvas = document.createElement("canvas");
        canvas.classList.add(`pdf-canvas-${pageNumber}`) // Add a class for styling
        canvas.classList.add(`pdf-canvas-size`);
        pdfContainer.appendChild(canvas);

        var context = canvas.getContext("2d");
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        var renderContext = {
            canvasContext: context,
            viewport: viewport
        };
        page.render(renderContext);
    });
}

let originalCanvasData = {}; // Store original canvas states
let currentlyHighlighted = new Set(); // Track active highlights

function highlightText(x, y, pageNum, questionNumber) {
    let canvas = document.querySelector(`.pdf-canvas-${pageNum}`);
    let ctx = canvas.getContext("2d");

    if (!canvas) return;

    // Prevent re-highlighting the same question before it disappears
    if (currentlyHighlighted.has(questionNumber)) return;

    // Mark this question as currently highlighted
    currentlyHighlighted.add(questionNumber);

    // Restore all canvases to remove previous highlights
    document.querySelectorAll("[class^='pdf-canvas-']").forEach((c) => {
        let context = c.getContext("2d");
        let page = c.dataset.pageNum;
        if (originalCanvasData[page]) {
            context.putImageData(originalCanvasData[page], 0, 0);
        }
    });

    // Store original image data (if not already stored)
    if (!originalCanvasData[pageNum]) {
        originalCanvasData[pageNum] = ctx.getImageData(0, 0, canvas.width, canvas.height);
    }

    ctx.fillStyle = "rgba(255, 255, 0, 0.4)"; // Yellow highlight
    ctx.fillRect(x, y - 20, canvas.width - 50, 30); // Adjust height & width for highlight

    // Scroll smoothly to the exact question position
    // Convert PDF canvas Y position to webpage scroll position
    let canvasRect = canvas.getBoundingClientRect();
    let adjustedY = window.scrollY + canvasRect.top + (y / 2);

    // Scroll smoothly to the question position
    window.scrollTo({
        top: adjustedY - 100,
        behavior: "smooth"
    });

    // Remove highlight after 2 seconds
    setTimeout(() => {
        ctx.putImageData(originalCanvasData[pageNum], 0, 0); // Restore original canvas
        currentlyHighlighted.delete(questionNumber); // Allow re-highlighting after it disappears
    }, 1500);
}

function scrollToQuestion(questionNumber) {
    let found = false; // Track if the question is found

    for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
        pdfDoc.getPage(pageNum).then(function (page) {
            page.getTextContent().then(function (textContent) {
                let textItems = textContent.items;
                let viewport = page.getViewport({
                    scale: 1
                });
                let extractedText = "";
                let positions = [];
                let canvas = document.querySelector(
                    `.pdf-canvas-${pageNum}`); // Target the correct canvas
                let ctx = canvas.getContext("2d");

                textItems.forEach(item => {
                    let y = viewport.height - item.transform[
                        5]; // Correct Y-position (flip it)
                    positions.push({
                        x: item.transform[4],
                        y: y,
                        str: item.str
                    });
                    extractedText += item.str;
                });

                let searchString = `Question ${questionNumber}:`;
                let foundIndex = extractedText.indexOf(searchString);

                //console.log(foundIndex)

                if (foundIndex !== -1) {
                    // Find the corresponding textItem that contains the first character
                    let accumulatedLength = 0;

                    for (let i = 0; i < positions.length; i++) {
                        accumulatedLength += positions[i].str.length;

                        if (accumulatedLength > foundIndex) {
                            let {
                                x,
                                y
                            } = positions[i]; // X, Y position of the matched text

                            // You can now use x, y to highlight the text
                            highlightText(x, y * 2, pageNum, questionNumber);

                            console.log(
                                `Found "${searchString}" on page ${pageNum} at (${x}, ${y * 2})`);

                            break;
                        }
                    }
                } else {
                    console.log(`"${searchString}" not found on page ${pageNum}`);
                }
            });
        });
    }

    if (!found) {
        console.log(`Question ${questionNumber} not found.`);
    }
}