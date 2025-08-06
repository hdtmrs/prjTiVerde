<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('folderStyle/style.css') }}">
    <title>TI Green</title>
</head>
<body>
    <header class="header">
        <img src="{{ asset('folderImages/folhaVerde(logo).webp') }}" alt="logo">
        <h2>TI Green</h2>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <main class="main">
            <div class="box-one">
                <h2>Ti o que? </h2>
                <p>Ti verde! É um nome que se da a um conjunto de ações que visam reduzir o consumo de energia e controlar os impactos ambientais que a area da tecnologia tras, exemplos de impactos ambientais nós temos descarte indevido e falta de reutilização de placas de hardware.</p>
            </div>
            <div class="mini-container">
            <div class="box-two">
                <h2>Como eu posso contribuir?</h2>
                <p>Você pode contribuir com a TI Verde adotando práticas sustentáveis no uso da tecnologia, como prolongar a vida útil dos equipamentos, optar por hardware com baixo consumo de energia, utilizar softwares eficientes e descartar corretamente resíduos eletrônicos. </p>
            </div>
            <div class="box-two">
                <h2>E quais são as vantagens?</h2>
                <p>Contribuir com a TI Verde traz benefícios como redução de custos operacionais devido ao menor consumo de energia, diminuição do impacto ambiental e uso mais eficiente dos recursos. Além disso, promove uma imagem positiva para empresas e indivíduos.</p>
            </div>
            </div>
        </main>
        <div class="help-me">
            <h2>Ajude com a causa</h2>
            <p>Há muitas organizações e instituições que lutam pelo progresso das causas ambientalistas...</p>
            
            <ul>
                <li>Doe equipamentos que não usa mais para escolas e ONGs.</li>
                <li>Descarte corretamente pilhas e baterias.</li>
                <li>Prefira produtos com baixo consumo de energia.</li>
                <li>Participe de campanhas de conscientização ambiental.</li>
            </ul>

            <blockquote>
                "Pequenas ações, quando multiplicadas por milhões de pessoas, podem transformar o mundo."
            </blockquote>

            <p><strong>Meta de arrecadação:</strong> R$ 5.000,00</p>
            <progress value="1200" max="5000"></progress>

            <h3>BRL contribuída: R$ 1.200,00</h3>

            {{-- Form para Stripe --}}
            <form action="{{ route('stripe.checkout') }}" method="POST">
                @csrf
                <input type="hidden" name="product" value="Doação TI Green">
                <input type="hidden" name="amount" value="20"> {{-- valor em dólares, altere se quiser --}}
                <button class="btn" type="submit">Contribuir Agora</button>
            </form>
        </div>

        <div class="big-main">
            <h2>Celebridades que apoiam a causa</h2>
            <div class="box-celebrity">
                <div class="people">
                    <h2>Leonardo DiCaprio</h2>
                </div>
                <div class="people">
                    <h2>Mark Ruffalo</h2>
                </div>
                <div class="people">
                    <h2>Gisele Bündchen</h2>
                </div>
                <div class="people">
                    <h2>Brad Pitt</h2>
                </div>
                <div class="people">
                    <h2>Emma Watson</h2>
                </div>
                <div class="people">
                    <h2>Alicia Silverstone</h2>
                </div>
            </div>
        </div>
        <footer class="rodape">
            <h1>RODAPE</h1>
            <div class="box-rodape-left">
                <p>Todos os direitos reservados para esse site</p>
                <p>Para saber a respeito dos nossos termos clique aqui</p>  
            </div>
            <div class="box-rodape-right">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="material-symbols-outlined">interests</span>
                <span class="material-symbols-outlined">chat</span>
            </div>
        </footer>
    </div>
</body>
</html>
