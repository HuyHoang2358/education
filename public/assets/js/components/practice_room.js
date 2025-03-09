document.addEventListener("DOMContentLoaded", () => {
    initSwiper();
    setupToggleButtons();
    classRoomSelection();
});

function initSwiper() {
    new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next-unique",
            prevEl: ".swiper-button-prev-unique",
        },
        pagination: {
            el: ".swiper-pagination-2",
            clickable: true,
        },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 4, spaceBetween: 40 },
            1049: { slidesPerView: 6, spaceBetween: 40 },
        },
    });
}

function setupToggleButtons() {
    document.querySelectorAll('.toggleButton').forEach(button => {
        button.addEventListener('click', () => toggleSection(button));
    });
}

function toggleSection(button) {
    const sectionsWrapper = button.nextElementSibling;
    const chevronIcon = button.querySelector('.chevronIcon');
    const content = button.querySelector('.buttonContent');

    sectionsWrapper.classList.toggle('hidden');
    chevronIcon.classList.toggle('rotate-180');

    const isExpanded = content.textContent.trim().startsWith("Xem thêm");
    content.textContent = isExpanded 
        ? "Thu gọn" 
        : `Xem thêm ${content.getAttribute('num_of_exercise')} bài tập`;
}

function classRoomSelection() {
    document.querySelectorAll('.class-list').forEach(list => {
        const selections = list.querySelectorAll('.class-selection');

        selections.forEach(selection => {
            let input_radio = selection.querySelector('input');
            let current_class_id = input_radio.getAttribute('current_class_id');

            // Đánh dấu radio được chọn mặc định
            if (input_radio.getAttribute('value') == current_class_id) {
                input_radio.checked = true;
                selection.classList.add('class-selection-active');
            }

            // Sự kiện click vào radio button
            selection.addEventListener('click', () => {
                // Bỏ chọn tất cả các radio khác trong danh sách
                selections.forEach(otherSelection => {
                    let otherInput = otherSelection.querySelector('input');
                    otherInput.checked = false;
                    otherSelection.classList.remove('class-selection-active');
                });

                // Chỉ chọn radio hiện tại và thêm class active
                input_radio.checked = true;
                selection.classList.add('class-selection-active');
            });
        });
    });
}


function toggleModal(show) {
    document.getElementById("modal").classList.toggle("hidden");
    const body = document.body;
    if(show){
        body.style.overflow = "hidden";
    }else{
        body.style.overflow = "";
    }
}

function closeModal(event) {
    if (event.target.id === "modal") {
        toggleModal(false);
    }
}
