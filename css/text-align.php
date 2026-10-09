<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>text-align CSS</h1>
        <p>A propriedade <code>text-align</code> é utilizada para controlar o alinhamento horizontal do texto dentro de um elemento HTML. Ela permite que você defina como o texto é alinhado em relação à caixa do elemento que o contém. A propriedade <code>text-align</code> pode ser aplicada a vários tipos de elementos, incluindo parágrafos (<code>&ltp></code>), títulos (<code>&lth1></code>, <code>&lth2></code>, etc.), <code>&ltdiv>s</code>, células de tabela (<code>&lttd></code>) e outros.</p>

        <div class="code">
            <pre>text-align: <em>valor</em>;   </pre>
        </div>

        <hr>

        <p><code>text-align</code> aceita os seguintes valores:</p>

        <h2 style="text-align: left;">left (Padrão)</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
        <h2 style="text-align: right;">right</h2>
        <p style="text-align: right;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
        <h2 style="text-align: center;">center</h2>
        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
        <h2 style="text-align: justify;">justify</h2>
        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
        <h2 style="text-align: initial;">initial</h2>
        <p style="text-align: initial;"><strong>Define o valor da propriedade como seu valor inicial, geralmente igual a <code>left</code>.</strong><br>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
        <h2 style="text-align: inherit;">inherit</h2>
        <p style="text-align: inherit;"><strong>A propriedade herda o valor de <code>text-align</code> do elemento pai.</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores amet impedit aliquid iure perspiciatis recusandae odit, provident pariatur ipsum adipisci similique atque sunt explicabo dolorum aspernatur illo harum, repellat possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita deleniti! Aliquid vitae voluptate, molestiae tempore laudantium suscipit. Possimus id reprehenderit eaque fuga ducimus provident, temporibus ut nobis quo cupiditate! lorem</p>
</div>

<?php
include_once '../footer.php';
?>