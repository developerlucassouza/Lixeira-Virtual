<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltinput> HTML</h1>

    <p>A tag <code>&ltinput></code> é usada para criar campos interativos em formulários. É uma tag autocontida (não
        possui uma tag de fechamento) e pode ser usada para receber diferentes tipos de entrada do usuário, como texto,
        números, datas e muito mais.</p>

    <div class="code">
        <pre>
&ltform>
    &ltinput type="text" name="nome" placeholder="Digite seu nome">
&lt/form></pre>
    </div>

    <hr>

    <h2>Estrutura da Tag &ltinput></h2>
    <p>A estrutura básica de um &ltinput> é a seguinte:</p>
    <div class="code">
        <pre>&ltinput type="TIPO" name="NOME" value="VALOR"></pre>
    </div>
    <p>Atributos principais:</p>
    <ul>
        <li>type: Define o tipo do campo.</li>
        <li>name: Nome do campo, usado para identificar o valor no servidor.</li>
        <li>value: Valor inicial do campo.</li>
        <li>placeholder: Texto que aparece dentro do campo como sugestão.</li>
        <li>required: Torna o campo obrigatório.</li>
        <li>disabled: Desabilita o campo.</li>
        <li>readonly: Permite visualizar, mas não editar o campo.</li>
        <li>maxlength: Define o número máximo de caracteres.</li>
    </ul>

    <hr>

    <h2>Tipos de Input</h2>
    <p>O tipo da tag <code>&ltinput></code> irá variar de acordo com o seu atributo <code>type</code>, armazenando dados
        diferentes de acordo o seu <code>type</code></p>

    <p class="text-danger">*Os exemplos abaixo possuem uso de Bootstrap para estilização</p>

    <div style="padding: 0px 20px">

        <style>
            @media screen and (min-width: 768px) {
                .input-group-prepend {
                    width: 20%;
                }

                .input-group-text {
                    width: 100%;
                }
            }

            @media screen and (max-width: 767px) {
                .input-group-prepend {
                    width: 40%;
                }

                .input-group-text {
                    width: 100%;
                }
            }
        </style>

        <!-- Text -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">text</span>
            </div>
            <input type="text" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Password (senha) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">password (senha)</span>
            </div>
            <input type="password" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Number (número) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">number (número)</span>
            </div>
            <input type="number" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Email -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">email</span>
            </div>
            <input type="email" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Tel (telefone) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">tel (telefone)</span>
            </div>
            <input type="tel" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Url -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">url</span>
            </div>
            <input type="url" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Date (data) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">date (data)</span>
            </div>
            <input type="date" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Time (hora) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">time (hora)</span>
            </div>
            <input type="time" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Datetime-local (data e hora) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">datetime-local (data e hora)</span>
            </div>
            <input type="datetime-local" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Month (mes) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">month (mês)</span>
            </div>
            <input type="month" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Week (semana) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">week (semana)</span>
            </div>
            <input type="week" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Checkbox -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">checkbox</span>
            </div>
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="checkbox" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Radio -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">radio</span>
            </div>
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
            <input type="radio" name="exemploradio" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- File (arquivo) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">file (arquivo)</span>
            </div>
            <input type="file" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Color -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">color</span>
            </div>
            <input type="color" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Range -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">range</span>
            </div>
            <input type="range" style="margin-left: 5px" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <!-- Hidden (oculto) -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">hidden (oculto)</span>
            </div>
            <input type="hidden" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
        </div>

        <hr>

        <h2>Atributos Importantes para Inputs</h2>

        <ul>
            <li>
                <code>placeholder</code>: Texto exibido dentro do campo como sugestão.
                <div class="code">
                    <pre>&ltinput type="text" <em>placeholder="Digite seu nome"</em>></pre>
                </div>
                <input type="text" placeholder="Digite seu nome" class="form-control">
            </li>
            <li>
                <code>required</code>: Torna o campo obrigatório.
                <div class="code">
                    <pre>&ltinput type="email" <em>required</em>></pre>
                </div>
            </li>
            <li>
                <code>disabled</code>: Desabilita o campo, impedindo a interação.
                <div class="code">
                    <pre>&ltinput type="text" <em>disabled</em>></pre>
                </div>
                <input type="text" disabled class="form-control">
            </li>
            <li>
                <code>maxlength</code>: Define o número máximo de caracteres permitidos.
                <div class="code">
                    <pre>&ltinput type="text" <em>maxlength="10"</em>></pre>
                </div>
                <input type="text" maxlength="10" class="form-control">
            </li>
            <li>
                <code>pattern</code>: Valida o campo com base em uma expressão regular.
                <div class="code">
                    <pre>&ltinput type="text" <em>pattern="[A-Za-z]{3,}"</em> title="Digite ao menos 3 letras"></pre>
                </div>
                <input type="text" pattern="[A-Za-z]{3,}" title="Digite ao menos 3 letras" class="form-control">
            </li>
        </ul>

        <hr>

        <h2>Boas Práticas</h2>
<ul>
    <li>
        <strong>Use o atributo required para validações básicas</strong>:<br>
        Isso garante que os campos obrigatórios não sejam deixados em branco.
    </li>
    <li>
        <strong>Valide os dados no lado do cliente e servidor</strong>:<br>
        Validação no cliente melhora a experiência do usuário.<br>
        No servidor, é essencial para evitar dados inválidos.
    </li>
    <li>
        <strong>Utilize inputs apropriados</strong>:<br>
        Escolha tipos específicos (email, date, etc.) para melhorar a usabilidade e minimizar erros.
    </li>
    <li>
        <strong>Atenção à acessibilidade</strong>:<br>
        Inclua descrições claras no atributo placeholder e use aria-label ou title quando necessário.
    </li>
</ul>

    </div>
</div>

<?php
include_once '../footer.php';
?>