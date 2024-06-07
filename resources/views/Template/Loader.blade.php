<!-- resources/views/partials/loader.blade.php -->
<div id="loader-wrapper">
    <div id="loader">
        <img src="{{ asset('img/loader.png') }}" alt="Loading..." class="animated-loader">
    </div>
</div>

<style>
    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9998;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #loader-wrapper.hidden {
        display: none;
    }

    .animated-loader {
        width: 200px; /* Adjust based on your image size */
        height: 200px; /* Adjust based on your image size */
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('loader-wrapper').style.display = 'none';
    });

    $(document).ready(function() {
        $(document).ajaxStart(function() {
            $('#loader-wrapper').show();
        });

        $(document).ajaxComplete(function() {
            $('#loader-wrapper').hide();
        });
    });
</script>
