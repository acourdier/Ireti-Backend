<div id="loader-wrapper">
    <div id="loader">
        <img src="{{ asset('img/loader.png') }}" alt="Loading..." class="animated-loader">
    </div>
</div>

<style>
    #loader-wrapper {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9998;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 0, 0 ,0.5);
        background-size: cover;
    }
    
    #loader {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        animation: rotate 2s linear infinite;

    }
    
    .animated-loader {
        width: 35px;
        height: 50px;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg) translateX(100px) rotate(0deg);
        }

        100% {
            transform: rotate(360deg) translateX(100px) rotate(-360deg);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var loader = document.getElementById('loader-wrapper');
        loader.style.display = 'flex';
    });

    window.addEventListener('load', function() {
        var loader = document.getElementById('loader-wrapper');
        loader.style.display = 'none';
    });
</script>