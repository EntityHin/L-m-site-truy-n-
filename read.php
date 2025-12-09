<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Truyện | Web Đọc Truyện</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }
        .reader-container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            line-height: 1.8;
            font-size: 18px;
        }
        .chapter-title {
            text-align: center;
            font-weight: bold;
            font-size: 26px;
            margin-bottom: 20px;
        }
        /* Dark Mode */
        .dark-mode {
            background-color: #1e1e1e !important;
            color: #d8d8d8 !important;
        }
        .dark-reader-container {
            background-color: #2a2a2a !important;
            color: #e8e8e8 !important;
        }
        .dark-mode-toggle {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="home.html">Web Đọc Truyện</a>

            <button class="btn btn-outline-light dark-mode-toggle">
                🌙 Dark Mode
            </button>
        </div>
    </nav>

    <!-- Nội dung đọc truyện -->
    <div class="container mt-4 mb-5">
        <div class="reader-container" id="readerBox">

            <h2 class="chapter-title">Chương 1: Công nghệ AI đã phát triển đến mức này chưa?</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                Đây là đoạn nội dung mẫu cho chương truyện.  
                Bạn có thể thay đổi phần này bằng dữ liệu từ backend.
            </p>

            <p>
                Suspendisse potenti. Curabitur tincidunt, ipsum nec pellentesque blandit,  
                lacus dolor efficitur ipsum, eget faucibus justo lorem vel arcu.
            </p>

            <p>
                Maecenas vitae massa sit amet neque fermentum interdum. Sed vel metus quis leo  
                convallis varius sit amet non tortor.
            </p>

        </div>

        <!-- Điều hướng chương -->
        <div class="d-flex justify-content-between mt-4">
            <a href="#" class="btn btn-secondary">&larr; Chương trước</a>
            <a href="#" class="btn btn-primary">Chương sau &rarr;</a>
        </div>

        <!-- Nút chọn chương -->
        <div class="text-center mt-3">
            <a href="detail.html" class="btn btn-outline-dark">📜 Danh sách chương</a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center p-3 bg-dark text-white">
        © 2025 Web Đọc Truyện - Nhóm 3
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Dark mode toggle
        const toggleBtn = document.querySelector('.dark-mode-toggle');
        const readerBox = document.querySelector('#readerBox');

        toggleBtn.onclick = () => {
            document.body.classList.toggle('dark-mode');
            readerBox.classList.toggle('dark-reader-container');

            toggleBtn.textContent =
                document.body.classList.contains('dark-mode') ? "☀ Light Mode" : "🌙 Dark Mode";
        }
    </script>

</body>
</html>
