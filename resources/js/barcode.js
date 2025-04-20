document.addEventListener("DOMContentLoaded", function () {
    // Cek apakah ZXing sudah terdefinisi
    if (typeof ZXing === "undefined") {
        console.error("ZXing library tidak ditemukan!");
        return;
    }

    let selectedDeviceId = null;
    let codeReader = null;
    const videoElement = document.getElementById("barcode-scanner");
    const resultElement = document.getElementById("barcode-result");

    function startScanner() {
        if (!codeReader) {
            codeReader = new ZXing.BrowserMultiFormatReader();
        }

        codeReader
            .listVideoInputDevices()
            .then((videoInputDevices) => {
                if (videoInputDevices.length > 0) {
                    selectedDeviceId =
                        videoInputDevices.find((device) =>
                            device.label.toLowerCase().includes("front")
                        )?.deviceId || videoInputDevices[0].deviceId;
                }

                return navigator.mediaDevices
                    .getUserMedia({
                        video: {
                            deviceId: selectedDeviceId,
                            facingMode: "environment",
                        },
                    })
                    .then((stream) => {
                        videoElement.srcObject = stream;
                        videoElement.style.transform = "scaleX(1)"; // Pastikan tidak mirror

                        return codeReader.decodeFromVideoDevice(
                            selectedDeviceId,
                            videoElement,
                            (result, err) => {
                                if (result) {
                                    stopScanner(); // Hentikan scanner langsung
                                    resultElement.textContent = `Barcode: ${result.text}`;
                                    showNextModal(); // Panggil modal selanjutnya
                                }
                            }
                        );
                    });
            })
            .catch((err) => console.error("Error accessing camera:", err));
    }

    function stopScanner() {
        if (codeReader) {
            codeReader.reset(); // Hentikan scanner
        }

        const stream = videoElement.srcObject;
        if (stream) {
            stream.getTracks().forEach((track) => track.stop()); // Matikan semua track kamera
            videoElement.srcObject = null;
        }

        // Tutup modal scan jika masih terbuka
        var scanModal = bootstrap.Modal.getInstance(
            document.getElementById("scanModal")
        );
        if (scanModal) {
            scanModal.hide();
        }
    }

    // Tutup modal scan jika modal lain muncul
    document.querySelectorAll(".modal").forEach((modal) => {
        modal.addEventListener("show.bs.modal", function (event) {
            if (event.target.id !== "scanModal") {
                stopScanner(); // Matikan kamera dan tutup modal scan
            }
        });
    });

    // Fungsi untuk menampilkan modal berikutnya
    function showNextModal() {
        var scanModal = bootstrap.Modal.getInstance(
            document.getElementById("scanModal")
        );
        if (scanModal) {
            scanModal.hide(); // Tutup modal pertama
        }

        var nextModal = new bootstrap.Modal(
            document.getElementById("nextModal")
        );
        nextModal.show(); // Tampilkan modal selanjutnya
    }

    // Event ketika modal pertama dibuka
    document
        .getElementById("scanModal")
        .addEventListener("shown.bs.modal", startScanner);

    // Event ketika modal pertama ditutup
    document
        .getElementById("scanModal")
        .addEventListener("hidden.bs.modal", stopScanner);
});

document.addEventListener("DOMContentLoaded", function () {
    // Cek apakah ZXing sudah terdefinisi
    if (typeof ZXing === "undefined") {
        console.error("ZXing library tidak ditemukan!");
        return;
    }

    let selectedDeviceId = null;
    let codeReader = null;
    const videoElement = document.getElementById("barcode-scanner-pembelian");
    const resultElement = document.getElementById("barcode-result-pembelian");

    function startScanner() {
        if (!codeReader) {
            codeReader = new ZXing.BrowserMultiFormatReader();
        }

        codeReader
            .listVideoInputDevices()
            .then((videoInputDevices) => {
                if (videoInputDevices.length > 0) {
                    selectedDeviceId =
                        videoInputDevices.find((device) =>
                            device.label.toLowerCase().includes("front")
                        )?.deviceId || videoInputDevices[0].deviceId;
                }

                return navigator.mediaDevices
                    .getUserMedia({
                        video: {
                            deviceId: selectedDeviceId,
                            facingMode: "environment",
                        },
                    })
                    .then((stream) => {
                        videoElement.srcObject = stream;
                        videoElement.style.transform = "scaleX(1)"; // Pastikan tidak mirror

                        return codeReader.decodeFromVideoDevice(
                            selectedDeviceId,
                            videoElement,
                            (result, err) => {
                                if (result) {
                                    stopScanner(); // Hentikan scanner langsung
                                    resultElement.textContent = `Barcode: ${result.text}`;
                                    showNextModal(); // Panggil modal selanjutnya
                                }
                            }
                        );
                    });
            })
            .catch((err) => console.error("Error accessing camera:", err));
    }

    function stopScanner() {
        if (codeReader) {
            codeReader.reset(); // Hentikan scanner
        }

        const stream = videoElement.srcObject;
        if (stream) {
            stream.getTracks().forEach((track) => track.stop()); // Matikan semua track kamera
            videoElement.srcObject = null;
        }

        // Tutup modal scan jika masih terbuka
        var scanpembelianModal = bootstrap.Modal.getInstance(
            document.getElementById("scanpembelianModal")
        );
        if (scanpembelianModal) {
            scanpembelianModal.hide();
        }
    }

    // Tutup modal scan jika modal lain muncul
    document.querySelectorAll(".modal").forEach((modal) => {
        modal.addEventListener("show.bs.modal", function (event) {
            if (event.target.id !== "scanpembelianModal") {
                stopScanner(); // Matikan kamera dan tutup modal scan
            }
        });
    });

    // Fungsi untuk menampilkan modal berikutnya
    function showNextModal() {
        var scanpembelianModal = bootstrap.Modal.getInstance(
            document.getElementById("scanpembelianModal")
        );
        if (scanpembelianModal) {
            scanpembelianModal.hide(); // Tutup modal pertama
        }

        var nextModal = new bootstrap.Modal(
            document.getElementById("setelahscansendiri")
        );
        nextModal.show(); // Tampilkan modal selanjutnya
    }

    // Event ketika modal pertama dibukas
    document
        .getElementById("scanpembelianModal")
        .addEventListener("shown.bs.modal", startScanner);

    // Event ketika modal pertama ditutup
    document
        .getElementById("scanpembelianModal")
        .addEventListener("hidden.bs.modal", stopScanner);
});
