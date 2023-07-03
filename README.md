# Documentação do Trabalho Laravel

A API permite realizar operações básicas de criação, leitura, busca, atualização e exclusão de tarefas.

## Apresentação
- Vídeo Apresentando a API: https://youtu.be/J1ldM7vWuso
- Vídeo Mostrando a API funcionando: https://youtu.be/nJNl_KjVC7c

### Listar todas as tarefas

- Endpoint: /Tasktrabalho
- Método: GET
- Resposta: Retorna todas as tarefas cadastradas.

### Obter detalhes de uma tarefa específica

- Endpoint: /Tasktrabalho/{id}
- Método: GET
- Resposta: Retorna os detalhes de uma tarefa específica com base no ID fornecido.
- Parâmetros:
   * id (obrigatório): ID da tarefa

### Criar uma nova tarefa

- Endpoint: /Tasktrabalho
- Método: POST
- Resposta: Cria uma nova tarefa com base nos dados fornecidos.
- Parâmetros:
   * title (obrigatório): Título da tarefa
   * description (obrigatório): Descrição da tarefa
   * status (obrigatório): Status da tarefa (concluída ou não concluída)

### Atualizar os dados de uma tarefa existente

- Endpoint: /Tasktrabalho/{id}
- Método: PUT
- Resposta: Atualiza os dados de uma tarefa existente com base no ID fornecido.
- Parâmetros:
    * id (obrigatório): ID da tarefa a ser atualizada
    * title (opcional): Novo título da tarefa
    * description (opcional): Nova descrição da tarefa
    * status (opcional): Novo status da tarefa (concluída ou não concluída)

### Excluir uma tarefa

- Endpoint: /Tasktrabalho/{id}
- Método: DELETE
- Resposta: Exclui uma tarefa com base no ID fornecido.
- Parâmetros:
    * id (obrigatório): ID da tarefa a ser excluída

### Ferramentas

- Ferramenta de testes de API: Postman, para realizar as requisições e verificar as respostas da API.
- Ferramentas de codificação de API: Visual Studio Code, Prompt de Comando
- Outras ferramentas: XAMPP





