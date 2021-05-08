<!DOCTYPE html>
    <html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./destiny_digit_style.css">
		<title> Find your destiny number</title>
    </head>
    
    
    <body>
    	<div>
    		<p class="details"><b>Check your destiny digit</b><br><br> <br>
    		Enter your birthday:</p>

    	</div>
		<div class="container">
		  <div class="row">
		    <div class='col-sm-6'>
		    	<form action="">
		            <div class="form-group">
		                <div class='input-group date' id='birthday'>
		                    <input type='text' name="birthday" class="form-control"/>
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
		           	<div class="form-group">

				  		<button type="submit" class="btn btn-default">Calculate</button>
		            </div>
		        </form>
		    </div>

		    <script type="text/javascript">
		    	var currentDate = new Date();
		        $(function () {
		            $('#birthday').datetimepicker({
			      	maxDate: currentDate,
						format: 'YYYY-MM-DD'

			      }).on('changeDate', function (ev) {
			         $(this).datetimepicker('hide');
			      });
			      $('.disableFuturedate').keyup(function () {
			         if (this.value.match(/[^0-9]/g)) {
			            this.value = this.value.replace(/[^0-9^-]/g, '');
			         }
			      });
			   });
		    </script>
		  </div>
		</div>
    </body>
</html>
 <?php
$number_meaning = ["<b>Cifra destinului: 1</b><br>Persoanele care au acest destin sunt destul de uşor remarcate în societate, iar dacă nu sunt vor face tot posibilul să iasă în evidenţă cumva. Au o mare capacitate de conducere, de iniţiere a proiectelor, leadership-ul le este la îndemână, tind către individualism şi de multe ori exprimă unicitatea prin ceea ce fac. La nivel profesional, sunt primii care ies în evidenţă, care iniţiază schimbarea, pot dezvolta rapid proiecte noi, sunt pioneri şi chiar vizionari. <br>Nu se pot acomoda în activităţi de rutină, caută să fie văzuţi şi de multe ori sunt catalogaţi drept egoişti. Au o încredere naivă că pot reuşi în tot ce îşi propun şi că toata lumea îi va urma. Dacă nu obţin rapid ce şi-au propus, devin nerăbdători, lacomi şi dominatori. ", "<b>Cifra destinului: 2</b<br> Persoana cu cifra de destin 2 este caracterizată de dorinţa de a fi un partener bun, are o diplomaţie desăvârşită şi, în tot ceea ce face, ţine cont şi de cei din jur. Are capacitatea de a se adapta rapid, este un bun mediator şi îşi doreşte să-i susţină pe ceilalţi prin ceea ce este şi face. <br> Anumite persoane îşi pierd uşor încrederea şi stima de sine, devin ezitante şi oscilante şi îşi pot manifesta frica de singurătate, frica de a greşi şi frica de schimbare.<br> Vibraţia 2 este caracterizată de energie feminină, care poate rezolva uşor conflictele, este creativă şi are toate calităţile unui coechipier nemaipomenit. Persoanele cu cifra destinului 2 se conectează uşor la oameni şi îi încurajează, îi susţin necondiţionat.","<b>Cifra destinului: 3</b> <br> Persoana cu vibraţia 3 este foarte distractivă, iubitoare de frumos, debordează de energie şi aduce „lumină“ oriunde s-ar afla. Are o vitalitate deosebită. <br> Explorarea este foarte importantă pentru această persoană, are nevoie să culeagă noi informaţii permanent, din cât mai multe domenii. Îi place mult să comunice, să facă legături cu cât mai multe persoane, are un spirit artistic şi îi e uşor să fie în lumina reflectoarelor. <br> Riscul este să se împrăştie în foarte multe direcţii şi să nu reuşească să finalizeze nimic sau să-şi risipească energia pe activităţi puerile.<br> Îi este teamă de restricţii, de pierderea tinereţii, de plictiseală şi frica de a nu avea acces la informaţie suficientă şi că nu va reuşi să ajungă la un înalt nivel de cunoaştere.", "<b>Cifra destinului: 4</b> <br>Dacă cifra ta de destin este 4 înseamnă că îţi place organizarea, claritatea, îţi plac procedurile, ordinea de orice fel şi eşti o persoana muncitoare, pe care ceilalţi se pot baza. Eşti persoana care dă viaţă ideilor, care materializează, care dă o formă lucrurilor şi le umple de conţinut. <br> Este o persoană realistă, tradiţionalistă, practică şi productivă. <br> E important pentru tine să ai claritate, să vezi limitele şi să te ghidezi dupa acestea. Poţi deveni destul de rigid şi poţi avea o viziune limitată dacă lucrezi de unul singur. Profesiile care ţi se potrivesc cel mai bine sunt cele de cercetător, om de ştiinţă, administrator, avocat, funcţionar, antreprenor.", "<b>Cifra destinului: 5</b> <br>Se spune că persoanele cu cifra destinului 5 iubesc distracţia, aventura, îşi doresc să-şi exprime nonconformismul pe orice plan (în carieră, familie, cuplu, etc). Au nevoie să-şi exprime creativitatea liber, fără şablone, fără limite şi multe reguli sau proceduri. <br>Se plictisesc atât de repede încât nu pot rezista într-un job de 8ore pe zi dacă nu fac ceva cu pasiune, unde să se remarce, să se exprime liber, să iasă în faţă. <br>Persoana cu destinul 5 îşi doreşte mult schimbarea, este curajoasă, extrovertită şi rebelă. Se poate transforma în „fiul ratacitor“ dacă nu-şi impune limite şi nu-şi îndeplineşte scopurile. <br>Persoanele cu cifra de destin 5 au o mare frică de bătraneţe, de a nu cunoaşte lumea şi, mai ales, de plictiseală.", "<b>Cifra destinului: 6</b> <br>Ceea ce descrie rapid persoana cu cifra destinului 6 este armonia şi echilibrul. Este o persoană care protejează, care susţine, este un dascal, este responsabilă şi ocrotitoare, dar şi geloasă.<br>Iubeşte tradiţiile de familie şi este îndreptata către sănătate, are mare nevoie de stabilitate, de confortul familiei. <br> Cel mai important scop în viaţă este să-i susţină pe ceilalti, să le asigure bunăstarea, să ocrotească, să iubească şi să primească iubire. Poate să sacrifice extrem de multe pentru asta.<br> Îi este frică de a nu avea suficiente resurse financiare şi dragoste şi se comportă anxios în locurile noi.  Este o persoana pretenţioasă, îi place să impună reguli în familie şi poate uşor manifesta stări de gelozie.", "<b>Cifra destinului: 7</b> <br>Cei care au cifra destinului 7 par persoane introvertite, sunt foarte înţelepte, raţionale şi au o viziune aparte, greu de înţeles pentru cei din jur.<br> 7 este şi cifra spiritualităţii, persoanele cu această energie au o profunzime pe care cei din jur nu prea o pricep. Nu-şi exprimă uşor sentimentele, trăirile, chiar se izolează de agitaţia lumii. Au capacitatea de a ajuta. <br>Sunt persoane foarte talentate, care observă tot în jur, analizează detaliile, comtemplă şi vin cu perspective profunde asupra lucrurilor. Poate părea o persoană arogantă pentru că nu se implică foarte tare în viaţa socială, deşi se descurcă foarte bine în public. Îi place destul de mult polemica şi nu renunţă până nu-şi demonstrează punctul de vedere, foarte bine studiat şi documentat. <br>În cazuri extreme, devine o persoană fanatică, dogmatică. Fiind o persoană perfecţionistă, este greu de mulţumit de către persoanele apropiate.", "<b>Cifra destinului: 8</b> <br> Când vorbim de persoana cu cifra destinului 8, neapărat vorbim de putere, pe toate planurile. Are o capacitate foarte mare de a obţine ce îşi propune, este determinată, are viziune, este un lider înnăscut, se remarcă prin spiritul justiţiar şi se poate sacrifica pentru o cauză nobilă. Patriotismul îi este natural.<br>Multe persoane cu cifra 8 se dezvoltă în activităţi pentru publicul larg, în acţiuni umanitare şi sunt capabile să aducă valoare pentru mase mari de oameni, inclusiv pe plan politic. Dorinţa de a obţine bunuri materiale şi bani nu le dă pace şi este o preocupare principală pentru aceste persoane. Ce-i drept, se pricep să facă bani.<br>Au o dorinţă puternică de control şi se poate transforma în scopul lor principal în viaţă. Le este uşor să-şi manifeste controlul şi dominaţia în toate aspectele din viaţa lor (carieră, afacere, familie, relaţia de cuplu, etc). În situaţiile pe care nu le poate controla, se va răzbuna puternic, fără scrupule.", "<b>Cifra destinului: 9</b> <br>9 este profesorul, profetul, este transformare continuă. De obicei este persoana care îi inspiră pe cei din jur, care îi ghidează, care îi susţine şi care se dedică oamenilor. Face multe acţiuni umanitare, este cel care mereu se gândeşte la binele suprem. Este visător, permanent caută soluţii să transforme totul în mai bine, în acea lume ideală în care există armonie pe toate planurile. <br> Ca profesie, foarte multe persoane cu cifra destinului 9 sunt medici, terapeuţi, profesori, traineri, artişti, consilieri, consultanţi.<br>Îi este frică de restricţii de orice fel şi are frica de a nu-şi mai putea controla emoţiile. Este o persoană elitistă, smerită şi care oferă dragoste necondiţionată. În dorinţa sa de a face bine celorlalţi, poate să piardă din vedere propriul interes şi propria bunăstare.", "<b> Numarul destinului: 11 </b> <br>Acest număr este cel mai încărcat număr dintre toate! Ești la fel de intens precum un fulger! Atragi idei puternice, intuiții și chiar informații de natură psi. Ai o prezență impresionantă, chiar și dacă tu nu realizezi că ai vreo anumită putere personală. Se poate spune despre tine că ești un canal prin care curg vibrații înalte, dar pentru ca tu să poți fi echilibrat din punct de vedere emoțional și psihologic, trebuie să înveți să controlezi acest flux de energie. <br> În altă ordine de idei, în mintea ta există o punte solidă între inconștient și conștient. Dificultatea constă în faptul că inconștientul este o resursă infinită, în timp ce conștientul este un „spațiu limitat”. Cele două laturi vor fi într-o permanentă contradicție atâta timp cât nu înveți să trăiești cu ele în armonie. Aici intervine controlul pe care îl menționam mai devreme. Până ce nu vei putea controla în mod conștient fluxul acestei energii superioare, vei simți adesea că te afli sub influența capriciilor sale, răvășit constant de către acesta atât în plan emoțional cât și nervos. <br> Aceste lucruri le-ai simțit dintotdeauna. Ai știut cumva că ești aparte, dar era un sentiment greu de definit. Erai extrem de sensibil, în special în copilărie. Acest lucru te-a făcut să fii oarecum vulnerabil în fața conflictelor și a situațiilor dureroase. <br> În cea mai mare parte a timpului nu realizai că oamenii din jur nu sunt la fel de sensibili ca tine, sau că nu văd lucrurile așa cum le vezi și tu.", "<b>Numarul destinului: 22 </b> <br> Ești un Maestru Constructor. Ești înzestrat cu un dar unic pentru a percepe anumite tipare în lumea arhetipala – infinită și divină – și de a le transpune în realitatea, în viața noastră cea de toate zilele. <br>Ai vise mari și fiecare țel pe care ți-l propui este colosal. Visezi să lași o urmă care să dăinuie pentru secole, și nutrești speranța că într-o zi vei putea schimba cursul istoriei. Pur și simplu simți că este imperios necesari să îți lași amprenta asupra civilizației umane. Simți că ești capabil de orice și că îți poți imagina orice. Dintre toate numerele, al tău este înzestrat cu cea mai mare capacitate de materializare și reușită, dar și cu cel mai înalt grad de eșec. <br>Ca să îți poți manifesta visele și aspirațiile vei fi nevoit să îți dedici întreaga viață pentru realizarea lor, și este foarte posibil să fi simțit deja acest lucru încă din copilărie, ceea ce poate te-a făcut să fii ușor intimidat de gravitatea și de impozanța muncii care se prefigura la orizont, conducând adesea poate către angoasă și îndoială. <br>Abia în fazele târzii ale maturității vei putea utiliza cu adevărat puterea ta interioară și vei pune cu adevărat pietrele de temelie ale destinului tău, căci în calitate de Maestru Constructor îți vei construi destinul de la zero. Promisiunea răsplăților va fi cel puțin la fel de mare ca și gradul de dificultate și de muncă al sarcinilor pe care le vei avea de dus la capăt. <br>Numărul 22 oferă celor care realizează dimensiunea sa adâncă șansa de a păși într-o dimensiune nouă în care zilele sunt expandate, capacitatea de creație este multiplicată, iar puterea de a ajuta umanitatea se va extinde dincolo de limitele normale ale vieții lor.", "<b> Numarul destinului: 33</b> <br> 33 este denumit Maestru Invățător. Exista foarte puține persoane cu această cifră a destinului.  Aceștia au multiple talente, găndire strălucitoare, intuiție superioară și o viziune remarcabilă. Numărul 33 se reduce la 6 (3+3=6) și preia o mare parte din vibrația numărului șase. Perfecționismul, standarde înalte, sensibilitatea, dragostea, sacrificiul, spiritualitatea, responsabilitatea sunt doar căteva dintre calitățile lui 33. îți este greu sa delegi sau să ai încredere în ceilalți. Ești sensibil și dispui de o puternică intuiție, poți ajunge pănă la clarviziune. Ai capacitatea de a simți nevoile celorlalți, pentru că te poți pune cu ușurință în locul lor. Oamenii te caută adesea pentru sfaturile tale. Ești admirat, respectat și urmat de către ceilalți fără a depune efort. <br> Idealurile tale înalte reprezintă o sursă de inspirație pentru ceilalți. Numărul 33 aduce o pronunțată înclinație către religie și spiritualitate. Țelul tău este să aduci iubirea întregii lumi. Nu ești preocupat de ambiții personale. Cauți să te dedici unor cauze universale, încercănd să ridici nivelul de conștiență al omenirii... Continuarea la Cursul de Numerologie", "<b> Numarul destinului: 44 <b> <br> Cei cu numarul 44 sunt oameni pragmatici, realisti si ambitiosi, iar talentul lor le permite sa-si foloseasca imaginatia pentru a elabora planuri vaste in activitati care necesita strategie, pricepere si viziune generala." ];

if(isset($_GET['birthday'])) {
	$birthday = $_GET['birthday'];
	//echo $birthday;
	//echo "<br>";
	$split_birthday = explode("-", $birthday);	
	//echo intval($split_birthday[0]);
	//echo intval(date("Y"));
	$valid_date = checkdate($split_birthday[1], $split_birthday[2], $split_birthday[0]);
	//echo $valid_date;
	if(checkdate($split_birthday[1], $split_birthday[2], $split_birthday[0]) && (intval($split_birthday[0]) <= intval(date("Y")))) {
		preg_match_all('!\d+!', $birthday, $matches);
		//print_r($matches[0]); 
		//$digit = 0;
		$destiny_no = 0;

		for($i=0; $i<3; $i++) {
			//echo $matches[0][$i];
			//echo "<br>";
			$date_part = $matches[0][$i];
			for($j = 0; $j < strlen($date_part); $j++) {
				//echo $date_part[$j];
				//echo "<br>";

				for($k = 0; $k < strlen($date_part[$j]); $k++) {
					$date_digit = substr($date_part[$j], $k, 1);
					$destiny_no = intval($destiny_no) + intval($date_digit);
				}
			}
			
		}
		echo "<p id='destiny_digit_meaning'>";

		if(($destiny_no > 9) && ($destiny_no != 11)&& ($destiny_no != 22)&& ($destiny_no != 33)&& ($destiny_no != 44)){
			$final_destiny_no = 0;
			for($n = 0; $n < strlen($destiny_no); $n++) {
				$date_digit = substr($destiny_no, $n, 1);
				$final_destiny_no = intval($final_destiny_no) + intval($date_digit);
			}

			if($final_destiny_no > 9){
				$last_destiny_no = 0;
				for($p = 0; $p < strlen($final_destiny_no); $p++) {
					$date_digit = substr($final_destiny_no, $p, 1);
					$last_destiny_no = intval($last_destiny_no) + intval($date_digit);
				}
				
				echo $number_meaning[$last_destiny_no - 1];
			} else {
				echo $number_meaning[$final_destiny_no - 1];
			}
		}
		else {
			//echo $destiny_no;
			switch ($destiny_no) {
				case 11:
					echo $number_meaning[9];
					break;
				case 22:
					echo $number_meaning[10];
					break;
				case 33:
					echo $number_meaning[11];
					break;
				case 44:
					echo $number_meaning[12];
					break;
				default: 			
					echo $number_meaning[$destiny_no - 1];

			}
		}
		echo "</p>";

	}
}
?>