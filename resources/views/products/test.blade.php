<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    <form id="product-form" method="POST" action="/nsubmit">
        @csrf
        <!-- حقول الإدخال -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description"><br>

        <label for="price">Image Path:</label>
        <input type="text" id="imagepath" name="imagepath" required><br>

        <!-- زر الإرسال -->
        <button type="submit">Add Product</button>
    </form>

    <!-- عرض نتائج الإرسال -->
    <div id="result-container"></div>

    <!-- الجافا سكريبت للتواصل مع الخادم -->
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const form = document.getElementById('product-form');
            const resultContainer = document.getElementById('result-container');
            const apiUrl = "http://127.0.0.1:8000/nsubmit"; // تم تحديث العنوان

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // منع السلوك الافتراضي للنموذج

                const formData = {
                    name: document.getElementById('name').value,
                    description: document.getElementById('description').value,
                    imagepath: document.getElementById('imagepath').value,
                };

                fetch(apiUrl, {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        // عرض رسالة النجاح
                        resultContainer.innerHTML = `<p>${data.message}</p>`;
                        // إعادة تحميل البيانات بعد إضافة المنتج
                        loadProducts();
                    } else {
                        // عرض رسالة الخطأ
                        resultContainer.innerHTML += `<p>${data.error}</p>`;
                    }
                })
                .catch(error => {
                    console.error("Error submitting data:", error);
                    resultContainer.innerHTML = "Error submitting data";
                });
            });

            // دالة لتحميل البيانات عند تحميل الصفحة الأولى وبعد إضافة منتج جديد
            function loadProducts() {
                fetch("http://127.0.0.1:8000/getproductsdata")
                    .then(response => response.json())
                    .then(data => {
                        if (Array.isArray(data.products) && data.products.length > 0) {
                            resultContainer.innerHTML = renderResult(data.products);
                        }
                    })
                    .catch(error => {
                        console.error("Error fetching data:", error);
                        resultContainer.innerHTML = "Error fetching data";
                    });
            }

            // دالة لعرض البيانات
            function renderResult(data) {
                return data.map(item =>
                    `<div>
                        <p>ID: ${item.id}</p>
                        <p>Name: ${item.name}</p>
                        <p>Description: ${item.description}</p>
                        <p>Price: ${item.price}</p>
                    </div>
                    <hr>`
                ).join("");
            }

            // تحميل البيانات عند تحميل الصفحة الأولى
            loadProducts();
        });
    </script>
</body>
</html>
