<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Checkout Stripe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #f7f7f7;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }
        .checkout-box {
            background: white;
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 20px;
            color: #32325d;
        }
        p {
            margin-bottom: 30px;
            color: #555;
        }
        button {
            background-color: #6772e5;
            border: none;
            padding: 12px 20px;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background .3s;
        }
        button:hover {
            background-color: #5469d4;
        }
    </style>
</head>
<body>

    <div class="checkout-box">
        <h1>Pagamento com Stripe</h1>
        <p>Produto: <strong>Meu Produto</strong></p>
        <p>Preço: <strong>US$ 20,00</strong></p>

        <form action="{{ route('stripe.checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="product" value="Meu Produto">
            <input type="hidden" name="amount" value="20">
            <button type="submit">Pagar agora</button>
        </form>
    </div>

</body>
</html>
