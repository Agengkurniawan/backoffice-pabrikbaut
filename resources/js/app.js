import "./bootstrap";
import "sass"; // SCSS kustom kamu
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#datepicker", {
        dateFormat: "F Y", // Format: Januari 2025
        defaultDate: new Date(),
        disableMobile: true, // Paksa tampilan custom di mobile
    });
});

// Notifikasi
$(document).ready(function () {
    const openNotification = document.getElementById("openNotification");
    const closeNotification = document.getElementById("closeNotification");
    const notificationPanel = document.getElementById("notificationPanel");

    if (openNotification && closeNotification && notificationPanel) {
        openNotification.addEventListener("click", function () {
            notificationPanel.classList.add("active");
        });

        closeNotification.addEventListener("click", function () {
            notificationPanel.classList.remove("active");
        });

        document.addEventListener("click", function (event) {
            if (
                !notificationPanel.contains(event.target) &&
                !openNotification.contains(event.target)
            ) {
                notificationPanel.classList.remove("active");
            }
        });
    } else {
        console.warn("Elemen notifikasi tidak ditemukan di halaman ini.");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".tab-content");

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            // Hapus kelas active dari semua tombol dan konten
            buttons.forEach((btn) => btn.classList.remove("active"));
            contents.forEach((content) => content.classList.remove("active"));

            // Tambahkan active ke tombol yang diklik dan tampilkan konten yang sesuai
            this.classList.add("active");
            document
                .getElementById(this.getAttribute("data-target"))
                .classList.add("active");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (event) {
        // Cek apakah yang diklik adalah dropdown item
        let dropdownItem = event.target.closest(".dropdown-item");
        if (!dropdownItem) return; // Jika bukan, abaikan

        // Cari elemen dropdown terdekat
        let dropdownMenu = dropdownItem.closest(".dropdown-menu");
        if (!dropdownMenu) return; // Jika tidak ada, keluar

        // Cari tombol toggle yang terkait
        let dropdownToggle =
            dropdownMenu.previousElementSibling.querySelector(
                "#selectedOption"
            );

        // Ubah teks hanya untuk dropdown terkait
        if (dropdownToggle) {
            dropdownToggle.innerHTML = dropdownItem.innerHTML;
        }
    });
});
