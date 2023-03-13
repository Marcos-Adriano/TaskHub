document.addEventListener('DOMContentLoaded', function() {
  const botaoAbrirFormulario = document.getElementById('abrir-formulario');
  const formulario = document.getElementById('formulario');
  const botaoCancelar = document.getElementById('cancelar');
  const listaTarefas = document.getElementById('lista-tarefas');
  const form = document.querySelector('form');
  const titulo = document.getElementById('titulo');
  const descricao = document.getElementById('descricao');

  let contadorTarefas = 0;

  botaoAbrirFormulario.addEventListener('click', () => {
    formulario.style.display = 'block';
  });

  botaoCancelar.addEventListener('click', () => {
    formulario.style.display = 'none';
  });

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const novaTarefa = document.createElement('li');
    novaTarefa.classList.add('container'); // adiciona a classe "container" ao elemento "li"
    
    const tituloTarefa = document.createElement('h3');
    tituloTarefa.textContent = titulo.value;
    const descricaoTarefa = document.createElement('p');
    descricaoTarefa.textContent = descricao.value;
    const botaoConcluido = document.createElement('button');
    botaoConcluido.textContent = 'Concluído';
    botaoConcluido.setAttribute('data-tarefa-id', contadorTarefas);
    botaoConcluido.addEventListener('click', (event) => {
      const idTarefa = event.target.getAttribute('data-tarefa-id');
      const tarefaConcluida = document.querySelector(`li[data-tarefa-id="${idTarefa}"]`);
      tarefaConcluida.remove();
    });
    novaTarefa.appendChild(tituloTarefa);
    novaTarefa.appendChild(descricaoTarefa);
    novaTarefa.appendChild(botaoConcluido);
    novaTarefa.setAttribute('data-tarefa-id', contadorTarefas);
    listaTarefas.appendChild(novaTarefa);

    formulario.style.display = 'none';
    titulo.value = '';
    descricao.value = '';
    contadorTarefas++;
  });
});
