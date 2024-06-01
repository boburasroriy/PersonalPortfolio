// Get all post elements
const posts = document.querySelectorAll('.post');

// Apply staggered delay for each post
posts.forEach((post, index) => {
    const delay = index * 0.3; // Adjust delay (0.2 seconds between each post)
    post.style.animationDelay = `${delay}s`; // Apply the delay
});
// const convertedLinks = linkifyStr(textarea.value, {
//     target: '_blank',
// });

