var profileImage = document.getElementById("profile-image");
var modal = document.getElementById("modal");
var modalImage = document.getElementById("modal-image");

profileImage.addEventListener("click", function() {
    displayModal();
});

function displayModal() {
    modal.style.display = "block";
    modalImage.src = profileImage.src;
}

function closeModal() {
    modal.style.display = "none";
}

$(document).ready(function() {
    $(".rating .fa-star").click(function() {
        $(this).addClass("checked");
        $(this).prevAll(".fa-star").addClass("checked");
        $(this).nextAll(".fa-star").removeClass("checked");
    });
});

const images = ['img/blog/c1.jpg', 'img/blog/c2.jpg', 'img/blog/c3.jpg'];

function changeImageRandomly() {
    const imageElement = document.getElementById('image');
    const randomIndex = Math.floor(Math.random() * images.length);
    imageElement.src = images[randomIndex];
}

changeImageRandomly(); // Thay đổi hình ảnh ngẫu nhiên ban đầu

// Gọi hàm changeImageRandomly() khi bạn muốn thay đổi hình ảnh ngẫu nhiên