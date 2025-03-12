document.addEventListener("DOMContentLoaded", () => {
    initScrollHandler();
    initBackButton();
    //startTimer();
});

/** Handles header visibility on scroll */
function initScrollHandler() {
    let lastScrollTop = 0;
    const header = document.getElementById("sticky-header");
    const newHeader = document.getElementById("timer-sticky-header");

    window.addEventListener("scroll", () => {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            hideHeader(header, newHeader);
        } else if (scrollTop === 0) {
            showHeader(header, newHeader);
        }
        lastScrollTop = scrollTop;
    });
}

function hideHeader(header, newHeader) {
    header.classList.add("-translate-y-full");
    newHeader.classList.add("-translate-y-[85%]");
}

function showHeader(header, newHeader) {
    header.classList.remove("-translate-y-full");
    newHeader.classList.remove("-translate-y-[85%]");
}

/** Handles option selection */
function selectOption(label) {
    let parent = label.parentElement;
    parent.querySelectorAll(".option-box").forEach(l => 
        l.classList.remove("border-[#0B8493]", "bg-transparent")
    );

    label.classList.add("border-[#0B8493]", "bg-transparent");
    label.querySelector("input").checked = true;
}

/** Displays a confirmation popup before submitting */
function submitForm(img) {
    Swal.fire({
        title: "Nộp bài",
        text: "Sau khi nộp bài, bạn sẽ không thể quay lại phần thi và tiếp tục làm bài. Bạn có chắc chắn nộp bài làm của mình không?",
        imageUrl: img,
        reverseButtons: true,
        showCancelButton: true,
        confirmButtonColor: "#0B8493",
        cancelButtonColor: "#E2E8F0",
        cancelButtonText: "Tiếp tục làm bài",
        confirmButtonText: "Nộp bài và xem kết quả",
        customClass: {
            popup: "rounded-xl shadow-lg",
            title: "text-xl text-full-black font-bold",
            confirmButton: "px-3 py-2 w-52 text-md rounded-full",
            cancelButton: "px-5 py-2 text-full-black w-52 border-2 text-md rounded-full"
        },
    }).then(result => {
        if (result.isConfirmed) document.getElementById('questionForm').submit();
    });
}

/** Starts the countdown timer */
function startTimer() {
    let minutes = 60;
    let totalTime = minutes * 60;
    updateDisplay(totalTime);

    let countdownInterval = setInterval(() => {
        totalTime--;

        if (totalTime <= 60) highlightCountdown();

        if (totalTime <= 0) {
            clearInterval(countdownInterval);
            document.getElementById("questionForm").submit();
        }

        updateDisplay(totalTime);
    }, 1000);
}

function highlightCountdown() {
    document.getElementById("countdown-icon").classList.add('ringing');
    document.getElementById("countdown-wrapper").classList.add('bg-red-500');
}

/** Updates the countdown timer display */
function updateDisplay(seconds) {
    let minutes = Math.floor(seconds / 60);
    let remainingSeconds = seconds % 60;
    document.getElementById("countdown").textContent = 
        `${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
}

/** Handles back button navigation */
function initBackButton() {
    document.querySelector('.back-button').addEventListener('click', event => {
        event.preventDefault();
        window.history.back();
    });
}

function updateFileLabel($number) {
    const fileInput = document.getElementById('fileUpload-' + $number);
    const fileLabel = document.getElementById('fileLabel-' + $number);
    const numbering = document.getElementById('answer-number-' + $number)
    const deleteButton = document.getElementById('delete-button-'+ $number);
    let file = fileInput.files[0];

    if(file) {
        fileLabel.className = "cursor-pointer flex items-center text-blue-900 gap-3 truncate max-w-36";
        fileLabel.innerHTML = `<i class="fa-solid fa-paperclip text-light-gray"></i> ${file.name}`;
        numbering.className = "rounded-full bg-transparent py-2 px-[0.85rem] border hover:cursor-pointer border-[#0B8493] duration-200 ease-out w-fit";
        deleteButton.classList.toggle("hidden");
    }

}

function removeFileUpload($number, $current_button){

    const fileInput = document.getElementById('fileUpload-' + $number);
    const fileLabel = document.getElementById('fileLabel-' + $number);
    const numbering = document.getElementById('answer-number-' + $number)

    fileInput.value = "";
    fileLabel.className = "cursor-pointer flex items-center gap-3 py-3 px-10 bg-[#EDFAF9] border-2 border-[#0B8493] rounded-lg text-[#0B8493] hover:bg-gray-200 transition text-nowrap";
    fileLabel.innerHTML = `<i class="fa-solid fa-arrow-up-from-bracket"></i> Tải tệp lên`;
    numbering.className = "rounded-full bg-[#E2E8F0] py-2 px-[0.85rem] hover:cursor-pointer border border-[#E2E8F0] duration-200 ease-out w-fit";
    $current_button.classList.toggle('hidden');
}
