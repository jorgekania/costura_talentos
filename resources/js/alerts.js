import Swal from "sweetalert2";

const colors = {
    info: {
        background: "#f0f9ff",
        font: "#029fda",
    },
    success: {
        background: "#f0fdf4",
        font: "#33af61",
    },
    warning: {
        background: "#fffbeb",
        font: "#e69f42",
    },
    error: {
        background: "#fef2f2",
        font: "#de4850",
    },
};

window.addEventListener("alert", (event) => {
    const data = event.detail;
    const { type, timer, position, title, text } = data;

    const { background, font } = colors[type] || colors.info;

    const Toast = Swal.mixin({
        toast: true,
        showConfirmButton: false,
        timerProgressBar: false,
        timer,
        background,
        color: font,
        position,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });

    Toast.fire({
        icon: type,
        title,
        text,
    });
});
