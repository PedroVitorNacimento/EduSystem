<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Professor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAV -->
    <nav class="bg-blue-700 text-white p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <span class="font-bold text-xl">EduSystem</span>
            <div>
                <a href="../index.php" class="mx-2 hover:underline">Início</a>
                <a href="cadastro_professor.html" class="mx-2 hover:underline font-bold">Professor</a>
                <a href="cadastro_aluno_front.php" class="mx-2 hover:underline">Aluno</a>
                <a href="cadastro_turma_front.php" class="mx-2 hover:underline">Curso</a>
                <a href="contato.html" class="mx-2 hover:underline">Contato</a>
            </div>
        </div>
    </nav>

    <!-- FORMULÁRIO -->
    <div class="max-w-3xl mx-auto bg-white mt-10 p-8 rounded-xl shadow">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">Cadastro de Aluno</h1>
        <form class="grid gap-4">
            <input type="text" placeholder="Nome Completo" class="form-input">
            <input type="email" placeholder="E-mail" class="form-input">
            <input type="text" placeholder="CPF" class="form-input">
            <input type="text" placeholder="Telefone" class="form-input">
            <input type="date" placeholder="Data de Nascimento" class="form-input">
            <button type="submit" class="btn-submit">Cadastrar Aluno</button>
        </form>
    </div>

    <style>
        .form-input {
            @apply w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300;
        }

        .btn-submit {
            @apply mt-4 bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition;
        }
    </style>

</body>

</html>