@if(session()->hasAny(['success', 'Delete', 'update', 'error', 'reject']))
<script>
    // Define session messages and their associated styles
    const sessionMessages = {
        success: { type: "success", message: " ", colors: ["#2F7630", "#38833A"] },
        Delete: { type: "success", message: " ", colors: ["#2F7630", "#38833A"] },
        update: { type: "success", message: " ", colors: ["#2F7630", "#38833A"] },
    };

    // Detect the active session and apply animations
    const activeSession = Object.keys(sessionMessages).find(key => sessionMessages[key].message);
    if (activeSession) {
        const { type, message, colors } = sessionMessages[activeSession];

        // SweetAlert Display
        swal({
            title: "",
            text: message,
            icon: type,
            timer: 3000,
            buttons: false,
        }).then(() => {});

        // SweetAlert Modal Styling
        setTimeout(() => {
            const modal = document.querySelector(".swal-modal");
            if (modal) {
                modal.style.background = "transparent";
            }
        }, 100);

        // Confetti Animation
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
    }
</script>
@endif
@if (session('error'))
<script>
    swal("Error!", "{{ session('error') }}", "error");
    setTimeout(() => {
            const modal = document.querySelector(".swal-modal");
            if (modal) {
                modal.style.background = "#ffffff";
            }
        }, 100);
</script>
@endif

@if (session('reject'))
<script>
    swal("Rejected!", "{{ session('reject') }}", "error");
    setTimeout(() => {
            const modal = document.querySelector(".swal-modal");
            if (modal) {
                modal.style.background = "#ffffff";
            }
        }, 100);
</script>
@endif
<style>
    .swal-icon--success__line {
        background-color: #2F7630;
    }

    .swal-icon--success__ring {
        border-color: #2F7630;
    }


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
