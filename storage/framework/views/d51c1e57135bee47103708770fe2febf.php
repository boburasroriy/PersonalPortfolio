<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Title'); ?> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
</head>
<body>
<?php echo e($slot); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("toggle-theme-button");
        const body = document.body;

        const currentTheme = localStorage.getItem("theme");

        // Set the initial theme based on localStorage
        if (currentTheme === "dark") {
            body.classList.add("dark-mode");
            toggleButton.innerHTML = '<i class="fas fa-moon" style="color: #ffffff;"></i>'; // Moon icon for dark mode
        } else {
            body.classList.add("light-mode");
            toggleButton.innerHTML = '<i class="fas fa-moon" style="color: #090d1f;"></i>'; // Sun icon for light mode
        }

        // Toggle theme on button click
        toggleButton.addEventListener("click", () => {
            if (body.classList.contains("dark-mode")) { // If dark mode, switch to light
                body.classList.remove("dark-mode");
                body.classList.add("light-mode");
                toggleButton.innerHTML = '<i class="fas fa-moon" style="color: #090d1f;"></i>'; // Sun icon
                localStorage.setItem("theme", "light");
            } else { // If light mode, switch to dark
                body.classList.remove("light-mode");
                body.classList.add("dark-mode");
                toggleButton.innerHTML = '<i class="fas fa-moon" style="color: #ffffff;"></i>'; // Moon icon
                localStorage.setItem("theme", "dark");
            }
        });
    });
</script>
</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/components/layouts/main.blade.php ENDPATH**/ ?>