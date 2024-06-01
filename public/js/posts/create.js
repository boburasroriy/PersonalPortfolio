function highlightSelectedText() {
    const articleDiv = document.getElementById('Article');
    const selection = window.getSelection();
    const range = selection.getRangeAt(0);

    if (range.toString().length === 0) {
        return; // Do nothing if no text is selected
    }

    const span = document.createElement('span');
    span.className = 'highlight';
    range.surroundContents(span);

    // Clear the selection to avoid continued highlighting
    selection.removeAllRanges();
    selection.addRange(document.createRange());

    updatePreview();
}

function updatePreview() {
    const articleDiv = document.getElementById('Article');
    const previewDiv = document.getElementById('preview');
    previewDiv.innerHTML = articleDiv.innerHTML;
}

function prepareHighlightedContent() {
    const articleDiv = document.getElementById('Article');
    const hiddenTextarea = document.getElementById('hiddenTextarea');
    hiddenTextarea.value = articleDiv.innerHTML;
}

document.getElementById('Article').addEventListener('input', updatePreview);
