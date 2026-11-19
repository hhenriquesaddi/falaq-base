<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Evento - AskLive</title>
    <!-- Carregando Tailwind via CDN caso não esteja usando @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-10 px-4">

    <!-- Contêiner centralizado (Ticket #007) -->
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Cadastrar Novo Evento</h1>

        <!-- Ajuste a rota no action conforme definido no seu web.php (ex: route('eventos.store') ou /eventos) -->
        <form action="{{ route('eventos.store') }}" method="POST">
            @csrf

            <!-- Campo: Título -->
            <div class="mb-4">
                <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">
                    Título do Evento
                </label>
                <input 
                    type="text" 
                    name="titulo" 
                    id="titulo" 
                    value="{{ old('titulo') }}"
                    placeholder="Ex: Workshop de Laravel e Tailwind"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('titulo') border-red-500 @else border-gray-300 @enderror"
                >
                @error('titulo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo: Descrição -->
            <div class="mb-6">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">
                    Descrição
                </label>
                <textarea 
                    name="descricao" 
                    id="descricao" 
                    rows="4" 
                    placeholder="Descreva os detalhes do evento..."
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @else border-gray-300 @enderror"
                >{{ old('descricao') }}</textarea>
                @error('descricao')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botão de Envio (Ticket #007) -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200 font-medium"
                >
                    Salvar Evento
                </button>
            </div>
        </form>
    </div>

</body>
</html>
