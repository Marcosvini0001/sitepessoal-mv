<main>
  <h2><strong>Introdução</strong></h2>
  <p id="p-main">
    Marcos Vinicius, 20 anos, de Campo Mourão - PR. Estou no segundo período
    de Análise e Desenvolvimento de Sistemas (TADS) e estou em constante evolução para me tornar um
    desenvolvedor/programador. Sempre em busca de novos desafios e conhecimentos, estou comprometido em
    construir um futuro na área de tecnologia
  </p>


  <h2><strong>Habilidades</strong></h2>
  <table id="table-habilidades">
    <thead>
      <tr>
        <th>Certificado</th>
        <th>Instituição</th>
        <th>Data de Conclusão</th>
        <th>Visualizar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Certificado">Curso Nivelamento JAVA</td>
        <td data-label="Instituição">Centro Universitário Integrado</td>
        <td data-label="Data de Conclusão">16 de agosto de 2024</td>
        <td data-label="Visualizar"><a href="javascript:;" onclick="mostrarCertificado('imagens/nivelamentojava1.png')">Ver Certificado</a></td>
      </tr>
      <tr>
        <td data-label="Certificado">Curso Nivelamento JAVA</td>
        <td data-label="Instituição">Centro Universitário Integrado</td>
        <td data-label="Data de Conclusão">23 de agosto de 2024</td>
        <td data-label="Visualizar"><a href="javascript:;" onclick="mostrarCertificado('imagens/nivelamentojava2.png')">Ver Certificado</a></td>
      </tr>
      <tr>
        <td data-label="Certificado">WorkShop TypeScript - TDW</td>
        <td data-label="Instituição">Centro Universitário Integrado</td>
        <td data-label="Data de Conclusão">19 de novembro de 2024</td>
        <td data-label="Visualizar"><a href="javascript:;" onclick="mostrarCertificado('imagens/certificadotdw.PNG')">Ver Certificado</a></td>
      </tr>
      <tr>
        <td data-label="Certificado">Redes - Fast e Giga</td>
        <td data-label="Instituição">Intelbras</td>
        <td data-label="Data de Conclusão">8 de agosto de 2022</td>
        <td data-label="Visualizar"><a href="javascript:;" onclick="mostrarCertificado('imagens/certificadoredes.PNG')">Ver Certificado</a></td>
      </tr>
    </tbody>
  </table>


  <div id="Modal" class="modal">
    <div class="modal-content">
      <button id="fecharModal" onclick="fecharModal()">X</button>
      <img id="imagemCertificado" src="" alt="Certificado">
    </div>
  </div>
  <script>
    function mostrarCertificado(imagemUrl) {
      const modal = document.getElementById('Modal');
      const imagem = document.getElementById('imagemCertificado');

      imagem.src = imagemUrl;

      modal.style.display = 'flex';
    }

    function fecharModal() {
      const modal = document.getElementById('Modal');
      const imagem = document.getElementById('imagemCertificado');

      modal.style.display = 'none';

      imagem.src = '';
    }

    window.addEventListener('click', function(event) {
      const modal = document.getElementById('Modal');
      if (event.target === modal) {
        fecharModal();
      }
    });
  </script>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      position: relative;
      max-width: 90%;
      max-height: 90%;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #imagemCertificado {
      max-width: 100%;
      max-height: 80vh;
    }

    button#fecharModal {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      font-weight: bold;
      background-color: transparent;
      border: none;
      color: #333;
      cursor: pointer;
    }

    button#fecharModal:hover {
      color: #d9534f;
    }
  </style>

  <h2><strong>Projetos</strong></h2>
  <div class="div-projetos">

    <table class="project-table">
      <thead>
        <tr>
          <th>Projeto</th>
          <th>Descrição</th>
          <th>Linguagens</th>
          <th>Visualizar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Projeto"><strong>E-Commerce</strong></td>
          <td data-label="Descrição">Desenvolvido na linguagem JAVA</td>
          <td>
            <i id="icon-java-projeto" class="fa-brands fa-java" alt="Icone do Java" title="JAVA"></i>
          </td>
          <td data-label="Ação" class="titulo-btn">
            <a href="https://github.com/Marcosvini0001/Tech-Academy-4" class="button" target="_blank">Acessar Repositório</a>
          </td>
        </tr>
        <tr>
          <td data-label="Projeto"><strong>GreenLife</strong></td>
          <td data-label="Descrição">Front-end básico - Em desenvolvimento</td>
          <td>
            <i id="icon-html-projeto" class="fa-brands fa-html5"  alt="Icone do HTML" title="HTML"></i>
            <i id="icon-css-projeto" class="fa-brands fa-css3-alt"  alt="Icone do CSS" title="CSS"></>
          </td>
          <td data-label="Ação" class="titulo-btn">
            <a href="https://github.com/Marcosvini0001/GreenLife-portfolio" class="button" target="_blank">Acessar Repositório</a>
          </td>
        </tr>
        <tr>
          <td data-label="Projeto"><strong>Text Adventure - Game</strong></td>
          <td data-label="Descrição">Desenvolvido na linguagem JAVA</td>
          <td>
            <i id="icon-java-projeto" class="fa-brands fa-java"  alt="Icone do Java" title="JAVA"></i>
          </td>
          <td data-label="Ação" class="titulo-btn">
            <a href="https://github.com/Koda012/TechAcademy-3" class="button" target="_blank">Acessar Repositório</a>
          </td>
        </tr>
      </tbody>
    </table>


  </div>
  <h2><strong>Entre em contato</strong></h2>
  <div class="div-icons">
    <a href="https://github.com/Marcosvini0001"> <i id="icon-github" class="fa-brands fa-github" title="GitHub" alt="GitHub"></i></a>
    <a href="https://www.instagram.com/marcosvn06/"> <i id="icon-instagram" class="fa-brands fa-instagram" title="Instagram" alt="Instagram"></i></a>
    <a href="https://www.linkedin.com/in/marcos-vinicius-485726297/"> <i id="icon-linkedin" class="fa-brands fa-linkedin-in" title="Linkedin" alt="Linkedin"></i></a>

  </div>
</main>