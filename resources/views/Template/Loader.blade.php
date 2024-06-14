<!-- resources/views/partials/loader.blade.php -->
<div id="loader-wrapper" style="display: none;">
    <div id="loader">
        <img src="{{ asset('images/your-image.png') }}" alt="Loading..." class="animated-loader">
    </div>
</div>

<style>
    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 9998;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .animated-loader {
        width: 100px; /* Adjust based on your image size */
        height: 100px; /* Adjust based on your image size */
        animation: rotate 2s linear infinite;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
