<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Belanja Layout Horizontal</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 800px;
            display: flex;
            gap: 30px;
            animation: fadeIn 1s ease-in-out;
        }

        .form-section, .result-section {
            flex: 1;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #6a11cb;
            font-weight: 600;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 14px;
            color: #555;
        }

        select, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        #result {
            padding: 30px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #result h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #6a11cb;
        }

        #result p {
            font-size: 18px;
            color: #555;
        }

        #result span {
            font-weight: 600;
            color: #2575fc;
            font-size: 20px;
        }

        /* Tulisan Keren "IQIS MARKET" */
        .market-text {
            margin-top: 30px;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Gambar Toko atau Logo */
        .store-image {
            margin-top: 20px;
            text-align: center;
        }

        .store-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Form Section -->
        <div class="form-section">
            <h1>Aplikasi Belanja</h1>
            <form id="shoppingForm">
                <label for="item">Pilih Barang:</label>
                <select id="item" name="item">
                    <option value="10000">Barang A - Rp 10.000</option>
                    <option value="20000">Barang B - Rp 20.000</option>
                    <option value="30000">Barang C - Rp 30.000</option>
                </select>

                <label for="quantity">Pilih Jumlah Barang:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">

                <label for="discount">Masukkan Diskon (%):</label>
                <input type="number" id="discount" name="discount" min="0" max="100" value="0">

                <label for="payment">Jumlah Uang yang Dibayarkan:</label>
                <input type="number" id="payment" name="payment" min="0" value="0">

                <button type="button" onclick="calculateTotal()">Hitung Total</button>
            </form>
        </div>

        <!-- Result Section -->
        <div class="result-section">
            <div id="result">
                <h2>Hasil Perhitungan</h2>
                <p>Total Harga: <span id="totalPrice">Rp 0</span></p>
                <p>Total Setelah Diskon: <span id="totalAfterDiscount">Rp 0</span></p>
                <p>Kembalian: <span id="change">Rp 0</span></p>
                <!-- Tulisan Keren "IQIS MARKET" -->
                <div class="market-text">IQIS MARKET</div>
                <!-- Gambar Toko atau Logo -->
                <div class="store-image">
                    <img src="foto/Screenshot 2025-02-19 081331.png" alt="Store Image">
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateTotal() {
            const itemPrice = parseInt(document.getElementById('item').value);
            const quantity = parseInt(document.getElementById('quantity').value);
            const discount = parseFloat(document.getElementById('discount').value);
            const payment = parseInt(document.getElementById('payment').value);

            // Hitung total harga
            let totalPrice = itemPrice * quantity;

            // Hitung diskon (dalam persentase)
            const discountAmount = totalPrice * (discount / 100);
            const totalAfterDiscount = totalPrice - discountAmount;

            // Hitung kembalian
            const change = payment - totalAfterDiscount;

            // Tampilkan hasil
            document.getElementById('totalPrice').innerText = `Rp ${totalPrice.toLocaleString()}`;
            document.getElementById('totalAfterDiscount').innerText = `Rp ${totalAfterDiscount.toLocaleString()}`;
            document.getElementById('change').innerText = `Rp ${change > 0 ? change.toLocaleString() : '0'}`;
        }
    </script>
</body>
</html>