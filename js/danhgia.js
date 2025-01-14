let selectedRating = 0;
let replyingTo = null; // Biến lưu trữ bình luận mà người dùng muốn trả lời

// Hàm xử lý chọn sao
function rate(stars) {
    selectedRating = stars;
    updateStars(stars);
}

// Hàm tô màu sao dựa trên số sao được chọn
function updateStars(stars) {
    const allStars = document.querySelectorAll('.rating span');
    allStars.forEach((star, index) => {
        star.style.color = index < stars ? 'gold' : '#ccc'; // Tô màu từ trái sang phải
    });
}

// Hàm xử lý khi di chuột qua các sao
function hoverStars(stars) {
    updateStars(stars);
}

// Hàm xử lý khi chuột rời khỏi
function clearHover() {
    updateStars(selectedRating); // Khôi phục trạng thái đã chọn
}

// Hàm xử lý gửi đánh giá
function submitReview() {
    const reviewerName = document.getElementById('reviewer-name').value.trim();
    const reviewInput = document.getElementById('review-input').value.trim();
    const reviewsContainer = document.getElementById('reviews-container');

    if (!reviewerName) {
        alert("Vui lòng nhập tên của bạn!");
        return;
    }

    if (selectedRating === 0) {
        alert("Vui lòng chọn số sao!");
        return;
    }

    if (!reviewInput) {
        alert("Vui lòng nhập nội dung đánh giá!");
        return;
    }

    // Tạo một phần tử đánh giá mới
    const reviewDiv = document.createElement('div');
    reviewDiv.className = 'review';

    reviewDiv.innerHTML = `
        <div class="reviewer">${reviewerName}</div>
        <div class="stars">${'&#9733;'.repeat(selectedRating)}</div>
        <div class="content">${reviewInput}</div>
        <button class="reply-btn" onclick="startReply(this)">Trả lời</button>
        <button class="delete-btn" onclick="deleteReview(this)">Xóa bình luận</button> <!-- Nút xóa -->
        <div class="replies-container"></div>
    `;

    reviewsContainer.prepend(reviewDiv); // Thêm đánh giá mới vào đầu

    // Lưu bình luận vào localStorage
    saveReviewsToLocalStorage();

    document.getElementById('reviewer-name').value = ''; // Xóa nội dung ô nhập tên
    document.getElementById('review-input').value = ''; // Xóa nội dung đánh giá
    rate(0); // Reset số sao
    replyingTo = null; // Reset lại biến trả lời
}

// Hàm bắt đầu trả lời
function startReply(button) {
    replyingTo = button.parentNode; // Lưu lại bình luận mà người dùng muốn trả lời
    const replyForm = document.createElement('div');
    replyForm.className = 'reply-form';
    replyForm.innerHTML = `
        <input type="text" id="replyer-name" placeholder="Nhập tên bạn..." />
        <textarea id="reply-input" placeholder="Nhập trả lời của bạn..."></textarea>
        <button onclick="submitReply()">Gửi trả lời</button>
        <button onclick="cancelReply()">Hủy</button> <!-- Nút hủy -->
    `;
    replyingTo.querySelector('.replies-container').appendChild(replyForm);
}

// Hàm xử lý gửi trả lời
function submitReply() {
    const replyerName = document.getElementById('replyer-name').value.trim();
    const replyInput = document.getElementById('reply-input').value.trim();
    if (!replyerName) {
        alert("Vui lòng nhập tên của bạn!");
        return;
    }

    if (!replyInput) {
        alert("Vui lòng nhập nội dung trả lời!");
        return;
    }

    // Tạo phần trả lời
    const replyDiv = document.createElement('div');
    replyDiv.className = 'reply';

    replyDiv.innerHTML = `
        <div class="replyer">${replyerName}</div>
        <div class="reply-content">${replyInput}</div>
        <button class="reply-btn" onclick="startReply(this)">Trả lời</button>
        <div class="replies-container"></div> <!-- Phần này để chứa trả lời cho bình luận trả lời -->
    `;

    // Nếu đang trả lời bình luận gốc (review)
    if (replyingTo.classList.contains('review')) {
        const repliesContainer = replyingTo.querySelector('.replies-container');
        repliesContainer.appendChild(replyDiv);
    } 
    // Nếu đang trả lời bình luận con (reply)
    else if (replyingTo.classList.contains('reply')) {
        const repliesContainer = replyingTo.querySelector('.replies-container');
        repliesContainer.appendChild(replyDiv);
    }

    // Lưu bình luận vào localStorage
    saveReviewsToLocalStorage();

    // Xóa ô trả lời và reset placeholder
    replyingTo.querySelector('.reply-form').remove();
    document.getElementById('reply-input').value = ''; // Xóa nội dung trả lời
    document.getElementById('replyer-name').value = ''; // Xóa tên người trả lời
    replyingTo = null; // Reset lại bình luận đang trả lời
}

// Hàm hủy trả lời
function cancelReply() {
    replyingTo.querySelector('.reply-form').remove(); // Xóa phần trả lời
    replyingTo = null; // Reset lại bình luận đang trả lời
}

// Hàm xóa bình luận
function deleteReview(button) {
    const reviewDiv = button.parentNode;
    reviewDiv.remove(); // Xóa bình luận khỏi giao diện

    // Lưu lại thay đổi vào localStorage
    saveReviewsToLocalStorage();
}

// Hàm lưu bình luận vào localStorage
function saveReviewsToLocalStorage() {
    const reviewsContainer = document.getElementById('reviews-container');
    const reviews = [];

    // Duyệt qua tất cả các bình luận và trả lời
    const reviewElements = reviewsContainer.querySelectorAll('.review');
    reviewElements.forEach((reviewElement) => {
        const review = {
            reviewer: reviewElement.querySelector('.reviewer').innerText,
            stars: reviewElement.querySelector('.stars').childElementCount, // Lưu số sao
            content: reviewElement.querySelector('.content').innerText,
            replies: []
        };

        // Duyệt qua tất cả các phần trả lời của bình luận này
        const replyElements = reviewElement.querySelectorAll('.reply');
        replyElements.forEach((replyElement) => {
            const reply = {
                replyer: replyElement.querySelector('.replyer').innerText,
                content: replyElement.querySelector('.reply-content').innerText,
                replies: [] // Mỗi trả lời có thể có các trả lời con nữa
            };
            review.replies.push(reply);
        });

        reviews.push(review);
    });

    // Lưu vào localStorage
    localStorage.setItem('reviews', JSON.stringify(reviews));
}

// Hàm tải lại bình luận từ localStorage
function loadReviewsFromLocalStorage() {
    const savedReviews = JSON.parse(localStorage.getItem('reviews'));
    if (savedReviews) {
        const reviewsContainer = document.getElementById('reviews-container');
        savedReviews.forEach((review) => {
            const reviewDiv = document.createElement('div');
            reviewDiv.className = 'review';

            reviewDiv.innerHTML = `
                <div class="reviewer">${review.reviewer}</div>
                <div class="stars">${'&#9733;'.repeat(review.stars)}</div> <!-- Khôi phục số sao -->
                <div class="content">${review.content}</div>
                <button class="reply-btn" onclick="startReply(this)">Trả lời</button>
                <button class="delete-btn" onclick="deleteReview(this)">Xóa bình luận</button> <!-- Nút xóa -->
                <div class="replies-container"></div>
            `;

            reviewsContainer.appendChild(reviewDiv);

            // Tải các trả lời cho bình luận này
            review.replies.forEach((reply) => {
                const replyDiv = document.createElement('div');
                replyDiv.className = 'reply';

                replyDiv.innerHTML = `
                    <div class="replyer">${reply.replyer}</div>
                    <div class="reply-content">${reply.content}</div>
                    <button class="reply-btn" onclick="startReply(this)">Trả lời</button>
                    <div class="replies-container"></div>
                `;

                reviewDiv.querySelector('.replies-container').appendChild(replyDiv);

                // Nếu có trả lời con thì bạn có thể thực hiện tương tự
            });
        });
    }
}

// Tải lại bình luận khi trang được tải lại
window.onload = loadReviewsFromLocalStorage;