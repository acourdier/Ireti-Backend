<!-- resources/views/partials/loader.blade.php -->
<div id="loader-wrapper">
    <div id="loader">
        <img src="{{ asset('img/loader.png') }}" alt="Loading..." class="animated-loader">
    </div>
</div>

<style>
    #loader-wrapper {
        display: none; /* Initially hide the loader */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9998;
        width: 80px; /* Adjust based on your loader image size */
        height: 80px; /* Adjust based on your loader image size */
        background-color: transparent; /* Set a background color if needed */
    }

    #loader {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        animation: rotate 2s linear infinite; /* Adjust animation duration */
    }

    .animated-loader {
        width: 100%; /* Adjust based on your loader image size */
        height: 100%; /* Adjust based on your loader image size */
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg) translateX(100px) rotate(0deg); /* Starting position */
        }
        100% {
            transform: rotate(360deg) translateX(100px) rotate(-360deg); /* Ending position */
        }
    }
</style>

<script>
    // JavaScript to show loader while page is loading
    document.addEventListener('DOMContentLoaded', function() {
        var loader = document.getElementById('loader-wrapper');
        loader.style.display = 'flex'; // Show loader initially
    });

    // Hide loader when all resources (including images) have loaded
    window.addEventListener('load', function() {
        var loader = document.getElementById('loader-wrapper');
        loader.style.display = 'none';
    });
</script>
