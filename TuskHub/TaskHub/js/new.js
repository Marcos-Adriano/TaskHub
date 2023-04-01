// seleciona os elementos HTML relevantes
const abrirFormulario = document.getElementById('abrir-formulario');
const cancelar = document.getElementById('cancelar');
const formulario = document.getElementById('formulario');
const titulo = document.getElementById('titulo');
const descricao = document.getElementById('descricao');
const tarefas = document.getElementById('tarefas');
const verMais = document.querySelectorAll('.ver-mais');

// adiciona um ouvinte de evento ao botão "Nova Tarefa"
abrirFormulario.addEventListener('click', function() {
  formulario.style.display = 'block';
});

// adiciona um ouvinte de evento ao botão "Cancelar"
cancelar.addEventListener('click', function() {
  formulario.style.display = 'none';
});

// adiciona um ouvinte de evento ao formulário
formulario.addEventListener('submit', function(event) {
  event.preventDefault(); // impede o envio do formulário

  // cria um novo elemento HTML para a tarefa
  const novaTarefa = document.createElement('div');
  novaTarefa.classList.add('tarefa');

  const tituloTarefa = document.createElement('h3');
  tituloTarefa.textContent = titulo.value;
  novaTarefa.appendChild(tituloTarefa);

  const descricaoTarefa = document.createElement('p');
  descricaoTarefa.classList.add('descricao'); // adiciona classe para estilização CSS
  descricaoTarefa.textContent = descricao.value;
  novaTarefa.appendChild(descricaoTarefa);

  // verifica se a descrição é maior do que 70 caracteres e adiciona botão "ver mais" se necessário
  if (descricao.value.length > 70) {
    descricaoTarefa.classList.add('corta-texto'); // adiciona classe para cortar o texto em 70 caracteres
    const botaoVerMais = document.createElement('button');
    botaoVerMais.classList.add('ver-mais');
    botaoVerMais.textContent = 'Ver mais';
    novaTarefa.appendChild(botaoVerMais);

    // adiciona um ouvinte de evento ao botão "ver mais"
    botaoVerMais.addEventListener('click', function() {
      descricaoTarefa.classList.remove('corta-texto');
      botaoVerMais.style.display = 'none';
    });
  }

  const botaoConcluir = document.createElement('button');
  botaoConcluir.textContent = 'Concluir';
  botaoConcluir.classList.add('concluir');
  novaTarefa.appendChild(botaoConcluir);

  // adiciona um ouvinte de evento ao botão de concluir tarefa
  botaoConcluir.addEventListener('click', function() {
    novaTarefa.classList.add('concluida');
    setTimeout(function() {
      novaTarefa.remove(); // remove a div da página após um breve intervalo
    }, 500);
  });

  // adiciona a nova tarefa à lista de tarefas
  tarefas.appendChild(novaTarefa);

  // esconde o formulário e limpa os campos de entrada
  formulario.style.display = 'none';
  titulo.value = '';
  descricao.value = '';
});

// seleciona todas as descrições de tarefas
const descricoesTarefas = document.querySelectorAll('.descricao');

// adiciona um ouvinte de evento a cada descrição de tarefa
descricoesTarefas.forEach(function(descricaoTarefa) {
  // verifica se a descrição é maior do que 70 caracteres e adiciona botão "ver mais" se necessário
  if (descricaoTarefa.textContent.length > 70) {
    descricaoTarefa.classList.add('corta-texto');
    descricaoTarefa.addEventListener('click', function() {
      descricaoTarefa.classList.remove('corta-texto');
    });
  }})
