// INSERIR LOGO
let logo = document.querySelector('img#logo');
logo.src = '../imgs/logo_html.png';
logo.style.display = 'block';
logo.style.margin = '50px auto';

// RENOMEAR TAG TITLE
try {
    document.querySelector('title').innerHTML = document.querySelector('h1').innerHTML + ' - Lixeira Virtual';
} catch(ERRO) {
    console.log(ERRO.getMessage());
}





// ORGANIZAR PAGINAÇÃO
let pages = document.querySelector('#menu');

pages.innerHTML = '';

// MOLDE
// pages.innerHTML += '<a href="#">&lt > HTML</a>';

pages.innerHTML += '<a href="../"><i class="fa-solid fa-trash-can"></i> Lixeira Virtual</a>';
pages.innerHTML += '<a href="./">HTML Introdução</a>';

pages.innerHTML += '<p>Tags HTML</p>';

// A
pages.innerHTML += '<a href="a.php">HTML &lta&gt</a>'
pages.innerHTML += '<a href="abbr.php">HTML &ltabbr&gt</a>'
// pages.innerHTML += '<a href="address.php">HTML &ltaddress&gt</a>'
// pages.innerHTML += '<a href="article.php">HTML &ltarticle&gt</a>'
// pages.innerHTML += '<a href="audio.php">HTML &ltaudio&gt</a>'

// B
// pages.innerHTML += '<a href="blockquote.php">HTML &ltblockquote&gt</a>'
pages.innerHTML += '<a href="body.php">HTML &ltbody&gt</a>'
pages.innerHTML += '<a href="br.php">HTML &ltbr&gt</a>'

// C
pages.innerHTML += '<a href="caption.php">HTML &ltcaption&gt</a>'
pages.innerHTML += '<a href="code.php">HTML &ltcode&gt</a>'
pages.innerHTML += '<a href="col.php">HTML &ltcol&gt</a>'
pages.innerHTML += '<a href="colgroup.php">HTML &ltcolgroup&gt</a>'

// D
pages.innerHTML += '<a href="datalist.php">HTML &ltdatalist&gt</a>'
pages.innerHTML += '<a href="dd.php">HTML &ltdd&gt</a>'
pages.innerHTML += '<a href="del.php">HTML &ltdel&gt</a>'
pages.innerHTML += '<a href="details.php">HTML &ltdetails&gt</a>'
pages.innerHTML += '<a href="div.php">HTML &ltdiv&gt</a>'
pages.innerHTML += '<a href="dl.php">HTML &ltdl&gt</a>'
pages.innerHTML += '<a href="dt.php">HTML &ltdt&gt</a>'

// E
pages.innerHTML += '<a href="em.php">HTML &ltem&gt</a>'

// F
pages.innerHTML += '<a href="fieldset.php">HTML &ltfieldset&gt</a>'
pages.innerHTML += '<a href="footer.php">HTML &ltfooter&gt</a>'
pages.innerHTML += '<a href="form.php">HTML &ltform&gt</a>'

// H
pages.innerHTML += '<a href="h1-h6.php">HTML &lth1&gt - &lth6&gt</a>'
pages.innerHTML += '<a href="head.php">HTML &lthead&gt</a>'
pages.innerHTML += '<a href="header.php">HTML &ltheader&gt</a>'
pages.innerHTML += '<a href="html.php">HTML &lthtml&gt</a>'

// I
pages.innerHTML += '<a href="iframe.php">HTML &ltiframe&gt</a>'
pages.innerHTML += '<a href="img.php">HTML &ltimg&gt</a>'
pages.innerHTML += '<a href="input.php">HTML &ltinput&gt</a>'
pages.innerHTML += '<a href="ins.php">HTML &ltins&gt</a>'

// L
pages.innerHTML += '<a href="label.php">HTML &ltlabel&gt</a>'
pages.innerHTML += '<a href="legend.php">HTML &ltlegend&gt</a>'
pages.innerHTML += '<a href="li.php">HTML &ltli&gt</a>'
pages.innerHTML += '<a href="link.php">HTML &ltlink&gt</a>'

// M
pages.innerHTML += '<a href="main.php">HTML &ltmain&gt</a>'
pages.innerHTML += '<a href="meta.php">HTML &ltmeta&gt</a>'

// N
pages.innerHTML += '<a href="nav.php">HTML &ltnav&gt</a>'

// O
pages.innerHTML += '<a href="ol.php">HTML &ltol&gt</a>'
pages.innerHTML += '<a href="optgroup.php">HTML &ltoptgroup&gt</a>'
pages.innerHTML += '<a href="option.php">HTML &ltoption&gt</a>'

// P
pages.innerHTML += '<a href="p.php">HTML &ltp&gt</a>'
pages.innerHTML += '<a href="pre.php">HTML &ltpre&gt</a>'

// Q
// pages.innerHTML += '<a href="q.php">HTML &ltq&gt</a>'

// S
pages.innerHTML += '<a href="script.php">HTML &ltscript&gt</a>'
// pages.innerHTML += '<a href="section.php">HTML &ltsection&gt</a>'
pages.innerHTML += '<a href="select.php">HTML &ltselect&gt</a>'
pages.innerHTML += '<a href="small.php">HTML &ltsmall&gt</a>'
pages.innerHTML += '<a href="span.php">HTML &ltspan&gt</a>'
pages.innerHTML += '<a href="strong.php">HTML &ltstrong&gt</a>'
pages.innerHTML += '<a href="style.php">HTML &ltstyle&gt</a>'
// pages.innerHTML += '<a href="sub.php">HTML &ltsub&gt</a>'
pages.innerHTML += '<a href="summary.php">HTML &ltsummary&gt</a>'
// pages.innerHTML += '<a href="sup.php">HTML &ltsup&gt</a>'

// T
pages.innerHTML += '<a href="table.php">HTML &lttable&gt</a>'
// pages.innerHTML += '<a href="tbody.php">HTML &lttbody&gt</a>'
pages.innerHTML += '<a href="td.php">HTML &lttd&gt</a>'
pages.innerHTML += '<a href="textarea.php">HTML &lttextarea&gt</a>'
// pages.innerHTML += '<a href="tfoot.php">HTML &lttfoot&gt</a>'
pages.innerHTML += '<a href="th.php">HTML &ltth&gt</a>'
// pages.innerHTML += '<a href="thead.php">HTML &ltthead&gt</a>'
pages.innerHTML += '<a href="title.php">HTML &lttitle&gt</a>'
pages.innerHTML += '<a href="tr.php">HTML &lttr&gt</a>'

// U
pages.innerHTML += '<a href="ul.php">HTML &ltul&gt</a>'

// V
// pages.innerHTML += '<a href="video.php">HTML &ltvideo&gt</a>'

// MOLDE
// pages.innerHTML += '<a href="#">&lt > HTML</a>';