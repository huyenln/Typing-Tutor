<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cười mỗi ngày</title>
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/hoang.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/myjs.js"></script>
  	<script type="text/javascript" src="js/hoang.js"></script>
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="#">Home</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Basics</a></li>
		        <li><a href="#">Quick Test</a></li>
		        <li><a href="#">Record</a></li>
		        <li style="text-align:right"><!-- MODAL TRIGGER -->
		<button id="modalToggle" type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#index_modal">
			<span class="glyphicon glyphicon-arrow-right"></span>
			Start Typing</button></li>
		      </ul>
		    </div>
		</div>
		
	</nav>
	<!-- CONTENT TILL THE END -->
	


		<!-- MODAL -->
		<div id="index_modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				
				<textarea id="spaceTrick"  autofocus="" style="opacity: 0; height:10px"></textarea>
				<div >
        					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>	
			<div>
					<div class="col-md-4">Time: <span id="timer-minutes">00</span>:<span id="timer-seconds">00</span></div>
					<div class="col-md-4">CPM: <span id="cpm">0</span></div>
					<div class="col-md-4">Accuracy: <span id="accuracy">100</span>%</div>
				</div>
				<div class="container-fluid bg-1 text-center" style="text-align:left" id="typingField">
		<div id="text-typing"><span id="0" class="text-current">J</span><span id="1">o</span><span id="2">h</span><span id="3">n</span><span id="4"> </span><span id="5">h</span><span id="6">a</span><span id="7">d</span><span id="8"> </span><span id="9">n</span><span id="10">o</span><span id="11">t</span><span id="12"> </span><span id="13">m</span><span id="14">u</span><span id="15">c</span><span id="16">h</span><span id="17"> </span><span id="18">a</span><span id="19">f</span><span id="20">f</span><span id="21">e</span><span id="22">c</span><span id="23">t</span><span id="24">i</span><span id="25">o</span><span id="26">n</span><span id="27"> </span><span id="28">f</span><span id="29">o</span><span id="30">r</span><span id="31"> </span><span id="32">h</span><span id="33">i</span><span id="34">s</span><span id="35"> </span><span id="36">m</span><span id="37">o</span><span id="38">t</span><span id="39">h</span><span id="40">e</span><span id="41">r</span><span id="42"> </span><span id="43">a</span><span id="44">n</span><span id="45">d</span><span id="46"> </span><span id="47">s</span><span id="48">i</span><span id="49">s</span><span id="50">t</span><span id="51">e</span><span id="52">r</span><span id="53">s</span><span id="54">,</span><span id="55"> </span><span id="56">a</span><span id="57">n</span><span id="58">d</span><span id="59"> </span><span id="60">a</span><span id="61">n</span><span id="62"> </span><span id="63">a</span><span id="64">n</span><span id="65">t</span><span id="66">i</span><span id="67">p</span><span id="68">a</span><span id="69">t</span><span id="70">h</span><span id="71">y</span><span id="72"> </span><span id="73">t</span><span id="74">o</span><span id="75"> </span><span id="76">m</span><span id="77">e</span><span id="78">.</span><span id="79"> </span><span id="80">H</span><span id="81">e</span><span id="82"> </span><span id="83">b</span><span id="84">u</span><span id="85">l</span><span id="86">l</span><span id="87">i</span><span id="88">e</span><span id="89">d</span><span id="90"> </span><span id="91">a</span><span id="92">n</span><span id="93">d</span><span id="94"> </span><span id="95">p</span><span id="96">u</span><span id="97">n</span><span id="98">i</span><span id="99">s</span><span id="100">h</span><span id="101">e</span><span id="102">d</span><span id="103"> </span><span id="104">m</span><span id="105">e</span><span id="106">;</span><span id="107"> </span><span id="108">n</span><span id="109">o</span><span id="110">t</span><span id="111"> </span><span id="112">t</span><span id="113">w</span><span id="114">o</span><span id="115"> </span><span id="116">o</span><span id="117">r</span><span id="118"> </span><span id="119">t</span><span id="120">h</span><span id="121">r</span><span id="122">e</span><span id="123">e</span><span id="124"> </span><span id="125">t</span><span id="126">i</span><span id="127">m</span><span id="128">e</span><span id="129">s</span><span id="130"> </span><span id="131">i</span><span id="132">n</span><span id="133"> </span><span id="134">t</span><span id="135">h</span><span id="136">e</span><span id="137"> </span><span id="138">w</span><span id="139">e</span><span id="140">e</span><span id="141">k</span><span id="142">,</span><span id="143"> </span><span id="144">n</span><span id="145">o</span><span id="146">r</span><span id="147"> </span><span id="148">o</span><span id="149">n</span><span id="150">c</span><span id="151">e</span><span id="152"> </span><span id="153">o</span><span id="154">r</span><span id="155"> </span><span id="156">t</span><span id="157">w</span><span id="158">i</span><span id="159">c</span><span id="160">e</span><span id="161"> </span><span id="162">i</span><span id="163">n</span><span id="164"> </span><span id="165">t</span><span id="166">h</span><span id="167">e</span><span id="168"> </span><span id="169">d</span><span id="170">a</span><span id="171">y</span><span id="172">,</span><span id="173"> </span><span id="174">b</span><span id="175">u</span><span id="176">t</span><span id="177"> </span><span id="178">c</span><span id="179">o</span><span id="180">n</span><span id="181">t</span><span id="182">i</span><span id="183">n</span><span id="184">u</span><span id="185">a</span><span id="186">l</span><span id="187">l</span><span id="188">y</span><span id="189">:</span><span id="190"> </span><span id="191">e</span><span id="192">v</span><span id="193">e</span><span id="194">r</span><span id="195">y</span><span id="196"> </span><span id="197">n</span><span id="198">e</span><span id="199">r</span><span id="200">v</span><span id="201">e</span><span id="202"> </span><span id="203">I</span><span id="204"> </span><span id="205">h</span><span id="206">a</span><span id="207">d</span><span id="208"> </span><span id="209">f</span><span id="210">e</span><span id="211">a</span><span id="212">r</span><span id="213">e</span><span id="214">d</span><span id="215"> </span><span id="216">h</span><span id="217">i</span><span id="218">m</span><span id="219">,</span><span id="220"> </span><span id="221">a</span><span id="222">n</span><span id="223">d</span><span id="224"> </span><span id="225">e</span><span id="226">v</span><span id="227">e</span><span id="228">r</span><span id="229">y</span><span id="230"> </span><span id="231">m</span><span id="232">o</span><span id="233">r</span><span id="234">s</span><span id="235">e</span><span id="236">l</span><span id="237"> </span><span id="238">o</span><span id="239">f</span><span id="240"> </span><span id="241">f</span><span id="242">l</span><span id="243">e</span><span id="244">s</span><span id="245">h</span><span id="246"> </span><span id="247">i</span><span id="248">n</span><span id="249"> </span><span id="250">m</span><span id="251">y</span><span id="252"> </span><span id="253">b</span><span id="254">o</span><span id="255">n</span><span id="256">e</span><span id="257">s</span><span id="258"> </span><span id="259">s</span><span id="260">h</span><span id="261">r</span><span id="262">a</span><span id="263">n</span><span id="264">k</span><span id="265"> </span><span id="266">w</span><span id="267">h</span><span id="268">e</span><span id="269">n</span><span id="270"> </span><span id="271">h</span><span id="272">e</span><span id="273"> </span><span id="274">c</span><span id="275">a</span><span id="276">m</span><span id="277">e</span><span id="278"> </span><span id="279">n</span><span id="280">e</span><span id="281">a</span><span id="282">r</span><span id="283">.</span><span id="284"> </span><span id="285">T</span><span id="286">h</span><span id="287">e</span><span id="288">r</span><span id="289">e</span><span id="290"> </span><span id="291">w</span><span id="292">e</span><span id="293">r</span><span id="294">e</span><span id="295"> </span><span id="296">m</span><span id="297">o</span><span id="298">m</span><span id="299">e</span><span id="300">n</span><span id="301">t</span><span id="302">s</span><span id="303"> </span><span id="304">w</span><span id="305">h</span><span id="306">e</span><span id="307">n</span><span id="308"> </span><span id="309">I</span><span id="310"> </span><span id="311">w</span><span id="312">a</span><span id="313">s</span><span id="314"> </span><span id="315">b</span><span id="316">e</span><span id="317">w</span><span id="318">i</span><span id="319">l</span><span id="320">d</span><span id="321">e</span><span id="322">r</span><span id="323">e</span><span id="324">d</span><span id="325"> </span><span id="326">b</span><span id="327">y</span><span id="328"> </span><span id="329">t</span><span id="330">h</span><span id="331">e</span><span id="332"> </span><span id="333">t</span><span id="334">e</span><span id="335">r</span><span id="336">r</span><span id="337">o</span><span id="338">r</span><span id="339"> </span><span id="340">h</span><span id="341">e</span><span id="342"> </span><span id="343">i</span><span id="344">n</span><span id="345">s</span><span id="346">p</span><span id="347">i</span><span id="348">r</span><span id="349">e</span><span id="350">d</span><span id="351">,</span><span id="352"> </span><span id="353">b</span><span id="354">e</span><span id="355">c</span><span id="356">a</span><span id="357">u</span><span id="358">s</span><span id="359">e</span><span id="360"> </span><span id="361">I</span><span id="362"> </span><span id="363">h</span><span id="364">a</span><span id="365">d</span><span id="366"> </span><span id="367">n</span><span id="368">o</span><span id="369"> </span><span id="370">a</span><span id="371">p</span><span id="372">p</span><span id="373">e</span><span id="374">a</span><span id="375">l</span><span id="376"> </span><span id="377">w</span><span id="378">h</span><span id="379">a</span><span id="380">t</span><span id="381">e</span><span id="382">v</span><span id="383">e</span><span id="384">r</span><span id="385"> </span><span id="386">a</span><span id="387">g</span><span id="388">a</span><span id="389">i</span><span id="390">n</span><span id="391">s</span><span id="392">t</span><span id="393"> </span><span id="394">e</span><span id="395">i</span><span id="396">t</span><span id="397">h</span><span id="398">e</span><span id="399">r</span><span id="400"> </span><span id="401">h</span><span id="402">i</span><span id="403">s</span><span id="404"> </span><span id="405">m</span><span id="406">e</span><span id="407">n</span><span id="408">a</span><span id="409">c</span><span id="410">e</span><span id="411">s</span><span id="412"> </span><span id="413">o</span><span id="414">r</span><span id="415"> </span><span id="416">h</span><span id="417">i</span><span id="418">s</span><span id="419"> </span><span id="420">i</span><span id="421">n</span><span id="422">f</span><span id="423">l</span><span id="424">i</span><span id="425">c</span><span id="426">t</span><span id="427">i</span><span id="428">o</span><span id="429">n</span><span id="430">s</span><span id="431">;</span><span id="432"> </span><span id="433">t</span><span id="434">h</span><span id="435">e</span><span id="436"> </span><span id="437">s</span><span id="438">e</span><span id="439">r</span><span id="440">v</span><span id="441">a</span><span id="442">n</span><span id="443">t</span><span id="444">s</span><span id="445"> </span><span id="446">d</span><span id="447">i</span><span id="448">d</span><span id="449"> </span><span id="450">n</span><span id="451">o</span><span id="452">t</span><span id="453"> </span><span id="454">l</span><span id="455">i</span><span id="456">k</span><span id="457">e</span><span id="458"> </span><span id="459">t</span><span id="460">o</span><span id="461"> </span><span id="462">o</span><span id="463">f</span><span id="464">f</span><span id="465">e</span><span id="466">n</span><span id="467">d</span><span id="468"> </span><span id="469">t</span><span id="470">h</span><span id="471">e</span><span id="472">i</span><span id="473">r</span><span id="474"> </span><span id="475">y</span><span id="476">o</span><span id="477">u</span><span id="478">n</span><span id="479">g</span><span id="480"> </span><span id="481">m</span><span id="482">a</span><span id="483">s</span><span id="484">t</span><span id="485">e</span><span id="486">r</span><span id="487"> </span><span id="488">b</span><span id="489">y</span><span id="490"> </span><span id="491">t</span><span id="492">a</span><span id="493">k</span><span id="494">i</span><span id="495">n</span><span id="496">g</span><span id="497"> </span><span id="498">m</span><span id="499">y</span><span id="500"> </span><span id="501">p</span><span id="502">a</span><span id="503">r</span><span id="504">t</span><span id="505"> </span><span id="506">a</span><span id="507">g</span><span id="508">a</span><span id="509">i</span><span id="510">n</span><span id="511">s</span><span id="512">t</span><span id="513"> </span><span id="514">h</span><span id="515">i</span><span id="516">m</span><span id="517">,</span><span id="518"> </span><span id="519">a</span><span id="520">n</span><span id="521">d</span><span id="522"> </span><span id="523">M</span><span id="524">r</span><span id="525">s</span><span id="526">.</span><span id="527"> </span><span id="528">R</span><span id="529">e</span><span id="530">e</span><span id="531">d</span><span id="532"> </span><span id="533">w</span><span id="534">a</span><span id="535">s</span><span id="536"> </span><span id="537">b</span><span id="538">l</span><span id="539">i</span><span id="540">n</span><span id="541">d</span><span id="542"> </span><span id="543">a</span><span id="544">n</span><span id="545">d</span><span id="546"> </span><span id="547">d</span><span id="548">e</span><span id="549">a</span><span id="550">f</span><span id="551"> </span><span id="552">o</span><span id="553">n</span><span id="554"> </span><span id="555">t</span><span id="556">h</span><span id="557">e</span><span id="558"> </span><span id="559">s</span><span id="560">u</span><span id="561">b</span><span id="562">j</span><span id="563">e</span><span id="564">c</span><span id="565">t</span><span id="566">:</span><span id="567"> </span><span id="568">s</span><span id="569">h</span><span id="570">e</span><span id="571"> </span><span id="572">n</span><span id="573">e</span><span id="574">v</span><span id="575">e</span><span id="576">r</span><span id="577"> </span><span id="578">s</span><span id="579">a</span><span id="580">w</span><span id="581"> </span><span id="582">h</span><span id="583">i</span><span id="584">m</span><span id="585"> </span><span id="586">s</span><span id="587">t</span><span id="588">r</span><span id="589">i</span><span id="590">k</span><span id="591">e</span><span id="592"> </span><span id="593">o</span><span id="594">r</span><span id="595"> </span><span id="596">h</span><span id="597">e</span><span id="598">a</span><span id="599">r</span><span id="600">d</span><span id="601"> </span><span id="602">h</span><span id="603">i</span><span id="604">m</span><span id="605"> </span><span id="606">a</span><span id="607">b</span><span id="608">u</span><span id="609">s</span><span id="610">e</span><span id="611"> </span><span id="612">m</span><span id="613">e</span><span id="614">,</span><span id="615"> </span><span id="616">t</span><span id="617">h</span><span id="618">o</span><span id="619">u</span><span id="620">g</span><span id="621">h</span><span id="622"> </span><span id="623">h</span><span id="624">e</span><span id="625"> </span><span id="626">d</span><span id="627">i</span><span id="628">d</span><span id="629"> </span><span id="630">b</span><span id="631">o</span><span id="632">t</span><span id="633">h</span><span id="634"> </span><span id="635">n</span><span id="636">o</span><span id="637">w</span><span id="638"> </span><span id="639">a</span><span id="640">n</span><span id="641">d</span><span id="642"> </span><span id="643">t</span><span id="644">h</span><span id="645">e</span><span id="646">n</span><span id="647"> </span><span id="648">i</span><span id="649">n</span><span id="650"> </span><span id="651">h</span><span id="652">e</span><span id="653">r</span><span id="654"> </span><span id="655">v</span><span id="656">e</span><span id="657">r</span><span id="658">y</span><span id="659"> </span><span id="660">p</span><span id="661">r</span><span id="662">e</span><span id="663">s</span><span id="664">e</span><span id="665">n</span><span id="666">c</span><span id="667">e</span><span id="668">,</span><span id="669"> </span><span id="670">m</span><span id="671">o</span><span id="672">r</span><span id="673">e</span><span id="674"> </span><span id="675">f</span><span id="676">r</span><span id="677">e</span><span id="678">q</span><span id="679">u</span><span id="680">e</span><span id="681">n</span><span id="682">t</span><span id="683">l</span><span id="684">y</span><span id="685">,</span><span id="686"> </span><span id="687">h</span><span id="688">o</span><span id="689">w</span><span id="690">e</span><span id="691">v</span><span id="692">e</span><span id="693">r</span><span id="694">,</span><span id="695"> </span><span id="696">b</span><span id="697">e</span><span id="698">h</span><span id="699">i</span><span id="700">n</span><span id="701">d</span><span id="702"> </span><span id="703">h</span><span id="704">e</span><span id="705">r</span><span id="706"> </span><span id="707">b</span><span id="708">a</span><span id="709">c</span><span id="710">k</span><span id="711">.</span></div>
		<div class="clear"></div>
			</div>
		</div>

	</div>
	<div class="container-fluid bg-2 text-center">
		<h3>Welcome to Typing Tutor</h3>
		<p>Test your typing speed</p>
	</div>
	<div class="container-fluid bg-3 text-center ">
		<h3>Easy to use, Easy to feel </h3>
		<p>Something to text here bla bla </p>
		<div class="row">
			<div class="col-md-4">
				<h3>Section 1</h3>
				<img src="img/truyen-cuoi-logo.jpg" alt="truyen-cuoi-logo" class="img-responsive logo">
			</div>
			<div class="col-md-4">
				<h3>Section 2</h3>
				<img src="img/anh-cuoi-logo.jpg" 	alt="anh-cuoi-logo" 	class="img-repsonsive logo">
			</div>
			<div class="col-md-4">
				<h3>Section 3</h3>
				<img src="img/video-logo.jpg" 		alt="video-logo" 		class="img-responsive logo">
			</div>
		</div>		
	</div>
	<footer class="container-fluid bg-4 text-center">
 		<h4>Feedback: typingtutor@gmail.com</h4>
	</footer>
</body>
</html>	