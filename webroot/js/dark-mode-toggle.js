document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("darkModeToggle");
    const modeIcon = document.getElementById("modeIcon");
    const body = document.body;

    if (localStorage.getItem("dark-mode") === "enabled") {
        body.classList.add("dark-mode");
        modeIcon.classList.replace("fa-moon", "fa-sun");

    }

    toggleButton.addEventListener("click", function () {
        body.classList.add("fade-transition");

        setTimeout(() => {
            body.classList.toggle("dark-mode");

            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("dark-mode", "enabled");
                modeIcon.classList.replace("fa-moon", "fa-sun");

            } else {
                localStorage.setItem("dark-mode", "disabled");
                modeIcon.classList.replace("fa-sun", "fa-moon");
            }

            body.classList.remove("fade-transition");
        }, 200);
    });
});
