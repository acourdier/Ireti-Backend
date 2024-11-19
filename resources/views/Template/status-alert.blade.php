@if (session('success'))
<script>
    swal({
        title: "",
        text: "",
        icon: "success",
        buttons: false, 
    }).then(() => {
    });

    setTimeout(() => {
        const modal = document.querySelector(".swal-modal");
        if (modal) {
            modal.style.background = "transparent"; 
        }
    }, 100); 

    const colors = ["#2F7630", "#38833A"];
    function createConfetti() {
        const confetti = document.createElement("div");
        confetti.classList.add("confetti");
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.left = Math.random() * 98 + "vw";
        const size = Math.random() * 10 + 5;
        confetti.style.width = `${size}px`;
        confetti.style.height = `${Math.random() * 10 + 5}px`;
        if (Math.random() > 0.5) {
            confetti.style.borderRadius = "50%";
        }
        confetti.style.animationDuration = `${Math.random() * 1 + 2}s`;
        confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
        document.body.appendChild(confetti);
        setTimeout(() => {
            confetti.remove();
        }, 3000);
    }

    const confettiInterval = setInterval(createConfetti, 1);
    setTimeout(() => {
        clearInterval(confettiInterval);
    }, 3000);
</script>
@endif


@if (session('Delete'))
<script>
    swal("Deleted!", "{{ session('Delete') }}", "success");
</script>
@endif

@if (session('update'))
<script>
    swal("Updated!", "{{ session('update') }}", "success");
</script>
@endif

@if (session('error'))
<script>
    swal("Error!", "{{ session('error') }}", "error");
</script>
@endif

@if (session('reject'))
<script>
    swal("Rejected!", "{{ session('reject') }}", "error");
</script>
@endif

<style>
    .swal-icon--success__line {
        background-color: #2F7630;
    }

    .swal-icon--success__ring {
        border-color: #2F7630;
    }

    /* Confetti styling */
    .confetti {
        position: absolute;
        top: 0px;
        opacity: 1;
        overflow: hidden;
        animation: confetti-fall linear infinite;
    }

    @keyframes confetti-fall {
        0% {
            opacity: 1;
            transform: translateY(0) rotate(0deg);
        }

        100% {
            opacity: 0;
            transform: translateY(98dvh) rotate(720deg);
        }
    }
</style>