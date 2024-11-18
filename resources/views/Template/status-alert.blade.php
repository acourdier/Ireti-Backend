@if (session('success'))
                <script>
                    swal("", "", "success");
                    // Confetti animation function
                    const colors = ["#2F7630", "#38833A"];
                    function createConfetti() {
                        const confetti = document.createElement("div");
                        confetti.classList.add("confetti");
                        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                        confetti.style.left = Math.random() * 100 + "vw";
                        const size = Math.random() * 10 + 5;
                        confetti.style.width = size + "px";
                        confetti.style.height = (Math.random() * 10 + 5) + "px";
                        if (Math.random() > 0.5) {
                            confetti.style.borderRadius = "50%";
                        }
                        confetti.style.animationDuration = (Math.random() * 1 + 2) + "s";
                        confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                        document.body.appendChild(confetti);
                        setTimeout(() => {
                            confetti.remove();
                            $(".swal-icon--success__line").hide();
                            $(".swal-icon--success__ring").hide();
                            $(".swal-icon").hide();
                        }, 3000);
                    }
                    // Start the confetti animation only when session is successful
                    const confettiInterval = setInterval(createConfetti, 1);
                    // Stop the confetti animation after 5 seconds
                    setTimeout(() => {
                        clearInterval(confettiInterval);
                    }, 3000);
                </script>
                @endif
                @if (session('Delete'))
                <script>
                    swal("Good job!", "{{ session('Delete') }}", "success");
                </script>
                @endif
                @if (session('update'))
                <script>
                    swal("Good job!", "{{ session('update') }}", "success");
                </script>
                @endif
                @if (session('error'))
                <script>
                    swal("Ooops!", "{{session('error')}}", "error");
                </script>
                @endif
                @if (session('reject'))
                <script>
                    swal("Good job!", "{{ session('reject') }}", "success");
                </script>
                @endif

                <style>
                    .swal-overlay--show-modal .swal-modal{
    background: transparent;
}
.swal-icon--success:before{
    display: none;
}
.swal-icon--success:after {
    display: none;
}
.swal-icon--success__hide-corners {
    display: none;
}
.swal-button {
    display: none;
}
.swal-icon--success__line {
    background-color:#2F7630;
}
.swal-icon--success__ring {
    border-color: #2F7630;
}
.confetti{
    widows: 50%
}
                </style>