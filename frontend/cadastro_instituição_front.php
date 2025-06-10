<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adquirir o EduSystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAV -->
    <nav class="bg-blue-700 text-white p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <span class="font-bold text-xl">EduSystem</span>
            <div>

                <a href="" class="mx-2 font-bold underline">Adquirir</a>
            </div>
        </div>
    </nav>

    <!-- FORMULÁRIO -->
    <div class="max-w-4xl mx-auto bg-white mt-10 p-8 rounded-xl shadow">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">Adquirir o EduSystem</h1>

        <form class="grid gap-6">

            <!-- Dados da Escola -->

            <legend class="font-semibold text-lg text-gray-700 mb-2">🏫 Dados da Escola</legend>
            <input type="text" placeholder="Nome da Escola" class="form-input" required>
            <input type="text" placeholder="CNPJ" class="form-input" required>
            <input type="tel" placeholder="Telefone" class="form-input" required>
            <input type="email" placeholder="E-mail institucional" class="form-input" required>
            <input type="text" placeholder="Endereço (Rua, Nº, Cidade, Estado)" class="form-input" required>


            <!-- Dados do Responsável -->

            <legend class="font-semibold text-lg text-gray-700 mb-2">👤 Responsável pelo Contrato</legend>
            <input type="text" placeholder="Nome do Responsável" class="form-input" required>
            <input type="text" placeholder="CPF" class="form-input" required>
            <input type="tel" placeholder="Telefone" class="form-input" required>
            <input type="email" placeholder="E-mail" class="form-input" required>


            <!-- Pagamento -->
            <fieldset>
                <legend class="font-semibold text-lg text-gray-700 mb-2">💳 Forma de Pagamento</legend>
                <select class="form-input" required>
                    <option disabled selected>Escolha um plano</option>
                    <option>Mensal - R$49,90</option>
                    <option>Trimestral - R$129,90</option>
                    <option>Anual - R$499,90</option>
                </select>

                <select class="form-input" required>
                    <option disabled selected>Forma de Pagamento</option>
                    <option>Cartão de Crédito</option>
                    <option>Boleto Bancário</option>
                    <option>Pix</option>
                </select>
            </fieldset>

            <button type="submit" class="btn-submit">Finalizar Cadastro e Solicitar</button>
        </form>
    </div>

    <style>
        .form-input {
            @apply w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300 mb-3;
        }

        .btn-submit {
            @apply mt-4 bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition;
        }
    </style>

</body>

</html>