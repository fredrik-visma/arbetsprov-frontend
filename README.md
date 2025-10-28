<h1>Arbetsprov frontend</h1>

<p>I arbetsprovet tittar vi p&aring; hur du l&ouml;ser frontend-relaterade problem med fokus p&aring; HTML, CSS och Javascript, men ocks&aring; p&aring; PHP f&ouml;r att skriva ut data. Vi kollar ocks&aring; om du h&auml;nger med p&aring; &ouml;vriga punkter, s&aring;som syntax och kommentarer.</p>

<p>H&auml;r &auml;r dokumentation &ouml;ver utvecklingsreglerna hos oss: <a href="https://wgrsecure.se/docs/coding-style/">https://wgrsecure.se/docs/coding-style/</a></p>

<p>B&ouml;rja med att klona detta repo och skapa en branch med ditt namn.</p>

<p><strong>Exempel:</strong></p>

<pre>git clone https://github.com/wgrgh/arbetsprov-frontend.git</pre>

<pre>git checkout -b f&ouml;rnamn-efternamn-arbetsprov</pre>

<p><strong>Om du inte har en installerad lokal server eller plugin, kan du f&ouml;lja guiden nedan:</strong></p>

<ul>
	<li>Installera Node.js&nbsp;p&aring; din dator. Du kan ladda ned och installera det fr&aring;n Node.js officiella webbplats.</li>
	<li>N&auml;r Node.js &auml;r installerat, kan du anv&auml;nda npm f&ouml;r att installera paket som hj&auml;lper dig att k&ouml;ra en lokal server. Ett popul&auml;rt exempel &auml;r http-server.</li>
	<li>Öppna projektet via din kodeditor eller valfri terminal.</li>
	<li>K&ouml;r f&ouml;ljande kommando i terminalen f&ouml;r att installera http-server:<br>
	<pre>npm install -g http-server</pre></li>
	<li>Navigera till katalogen d&auml;r dina filer finns i terminalen och starta servern genom att k&ouml;ra:<br>
	<pre>http-server</pre>
  Detta kommer starta en server och ge dig en URL som vanligtvis ser ut som http://127.0.0.1:8080 eller http://localhost:8080.</li>
	<li>&Ouml;ppna en webbl&auml;sare och skriv in URL:en som http-server gav dig f&ouml;r att se dina filer via localhost.</li>
</ul>

<p>Utf&ouml;r &auml;ndringarna i filerna och n&auml;r du k&auml;nner dig klar med arbetsprovet g&ouml;r en commit.&nbsp;<br>
<pre>git add .</pre></p>
<pre>git commit -m &quot;Commit message&quot;</pre>
<pre>git push&nbsp;</pre>
<pre>git push --set-upstream origin&nbsp;f&ouml;rnamn-efternamn-arbetsprov</pre>

<p><strong>Filer:</strong></p>

<p>Designen hittar du i mappen designskiss. Du &ouml;ppnar den med PhotoShop, har du inte tillg&aring;ng till PhotoShop kan du anv&auml;nda https://www.photopea.com/.</p>

<p>Du kan d&aring; anv&auml;nda den bifogade JPG-filen som referensbild ist&auml;llet f&ouml;r PSD:en. Teckensnitten som anv&auml;nds &auml;r &quot;Martel Sans&quot; och &quot;Cormorant Garamond&quot; vilka b&aring;da hittas p&aring; Google Fonts.</p>

<p>Koden &auml;r baserad p&aring; MVC-modellen.</p>

<p><strong>Uppgifter: &nbsp;</strong></p>

<p>1. Utg&aring; fr&aring;n den befintliga filstrukturen i filmappen och bygg en responsiv sida av den bifogade PSD-filen. En stor del av den HTML som beh&ouml;vs &auml;r redan skriven, men &auml;ndra eller l&auml;gg till som du k&auml;nner beh&ouml;vs.</p>

<p>3. Uppdatera s&ouml;kfunktionen i js/scripts.js s&aring; att det inte spelar n&aring;gon roll om du s&ouml;ker med stora bokst&auml;ver eller inte.</p>

<p>4. G&ouml;r s&aring; att det g&aring;r att s&ouml;ka p&aring; produkternas namn eller f&auml;rg i samma s&ouml;kruta.</p>

<p>5. I klassen &ldquo;WGR_ExamplePageModel&rdquo; finns en metod f&ouml;r att h&auml;mta data f&ouml;r en produkt givet ett visst id. Anv&auml;nd denna metod f&ouml;r att h&auml;mta data f&ouml;r produkten med id = 2. Visa sedan denna produkt i en popup-ruta (modal) vid klick p&aring; knappen &rdquo;Shoppa nu&rdquo;, med en statisk k&ouml;pknapp.</p>

<p>N&auml;r du &auml;r klar &aring;terkoppla till personen du f&aring;tt arbetsprovet ifr&aring;n.</p>

<p>Lycka till!</p>
