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
$number_meaning = ["<b>Cifra destinului: 1</b><br>Persoanele care au acest destin sunt destul de u??or remarcate ??n societate, iar dac?? nu sunt vor face tot posibilul s?? ias?? ??n eviden???? cumva. Au o mare capacitate de conducere, de ini??iere a proiectelor, leadership-ul le este la ??ndem??n??, tind c??tre individualism ??i de multe ori exprim?? unicitatea prin ceea ce fac. La nivel profesional, sunt primii care ies ??n eviden????, care ini??iaz?? schimbarea, pot dezvolta rapid proiecte noi, sunt pioneri ??i chiar vizionari. <br>Nu se pot acomoda ??n activit????i de rutin??, caut?? s?? fie v??zu??i ??i de multe ori sunt cataloga??i drept egoi??ti. Au o ??ncredere naiv?? c?? pot reu??i ??n tot ce ????i propun ??i c?? toata lumea ??i va urma. Dac?? nu ob??in rapid ce ??i-au propus, devin ner??bd??tori, lacomi ??i dominatori. ", "<b>Cifra destinului: 2</b<br> Persoana cu cifra de destin 2 este caracterizat?? de dorin??a de a fi un partener bun, are o diploma??ie des??v??r??it?? ??i, ??n tot ceea ce face, ??ine cont ??i de cei din jur. Are capacitatea de a se adapta rapid, este un bun mediator ??i ????i dore??te s??-i sus??in?? pe ceilal??i prin ceea ce este ??i face. <br> Anumite persoane ????i pierd u??or ??ncrederea ??i stima de sine, devin ezitante ??i oscilante ??i ????i pot manifesta frica de singur??tate, frica de a gre??i ??i frica de schimbare.<br> Vibra??ia 2 este caracterizat?? de energie feminin??, care poate rezolva u??or conflictele, este creativ?? ??i are toate calit????ile unui coechipier nemaipomenit. Persoanele cu cifra destinului 2 se conecteaz?? u??or la oameni ??i ??i ??ncurajeaz??, ??i sus??in necondi??ionat.","<b>Cifra destinului: 3</b> <br> Persoana cu vibra??ia 3 este foarte distractiv??, iubitoare de frumos, debordeaz?? de energie ??i aduce ???lumin????? oriunde s-ar afla. Are o vitalitate deosebit??. <br> Explorarea este foarte important?? pentru aceast?? persoan??, are nevoie s?? culeag?? noi informa??ii permanent, din c??t mai multe domenii. ??i place mult s?? comunice, s?? fac?? leg??turi cu c??t mai multe persoane, are un spirit artistic ??i ??i e u??or s?? fie ??n lumina reflectoarelor. <br> Riscul este s?? se ??mpr????tie ??n foarte multe direc??ii ??i s?? nu reu??easc?? s?? finalizeze nimic sau s??-??i risipeasc?? energia pe activit????i puerile.<br> ??i este team?? de restric??ii, de pierderea tinere??ii, de plictiseal?? ??i frica de a nu avea acces la informa??ie suficient?? ??i c?? nu va reu??i s?? ajung?? la un ??nalt nivel de cunoa??tere.", "<b>Cifra destinului: 4</b> <br>Dac?? cifra ta de destin este 4 ??nseamn?? c?? ????i place organizarea, claritatea, ????i plac procedurile, ordinea de orice fel ??i e??ti o persoana muncitoare, pe care ceilal??i se pot baza. E??ti persoana care d?? via???? ideilor, care materializeaz??, care d?? o form?? lucrurilor ??i le umple de con??inut. <br> Este o persoan?? realist??, tradi??ionalist??, practic?? ??i productiv??. <br> E important pentru tine s?? ai claritate, s?? vezi limitele ??i s?? te ghidezi dupa acestea. Po??i deveni destul de rigid ??i po??i avea o viziune limitat?? dac?? lucrezi de unul singur. Profesiile care ??i se potrivesc cel mai bine sunt cele de cercet??tor, om de ??tiin????, administrator, avocat, func??ionar, antreprenor.", "<b>Cifra destinului: 5</b> <br>Se spune c?? persoanele cu cifra destinului 5 iubesc distrac??ia, aventura, ????i doresc s??-??i exprime nonconformismul pe orice plan (??n carier??, familie, cuplu, etc). Au nevoie s??-??i exprime creativitatea liber, f??r?? ??ablone, f??r?? limite ??i multe reguli sau proceduri. <br>Se plictisesc at??t de repede ??nc??t nu pot rezista ??ntr-un job de 8ore pe zi dac?? nu fac ceva cu pasiune, unde s?? se remarce, s?? se exprime liber, s?? ias?? ??n fa????. <br>Persoana cu destinul 5 ????i dore??te mult schimbarea, este curajoas??, extrovertit?? ??i rebel??. Se poate transforma ??n ???fiul ratacitor??? dac?? nu-??i impune limite ??i nu-??i ??ndepline??te scopurile. <br>Persoanele cu cifra de destin 5 au o mare fric?? de b??trane??e, de a nu cunoa??te lumea ??i, mai ales, de plictiseal??.", "<b>Cifra destinului: 6</b> <br>Ceea ce descrie rapid persoana cu cifra destinului 6 este armonia ??i echilibrul. Este o persoan?? care protejeaz??, care sus??ine, este un dascal, este responsabil?? ??i ocrotitoare, dar ??i geloas??.<br>Iube??te tradi??iile de familie ??i este ??ndreptata c??tre s??n??tate, are mare nevoie de stabilitate, de confortul familiei. <br> Cel mai important scop ??n via???? este s??-i sus??in?? pe ceilalti, s?? le asigure bun??starea, s?? ocroteasc??, s?? iubeasc?? ??i s?? primeasc?? iubire. Poate s?? sacrifice extrem de multe pentru asta.<br> ??i este fric?? de a nu avea suficiente resurse financiare ??i dragoste ??i se comport?? anxios ??n locurile noi.  Este o persoana preten??ioas??, ??i place s?? impun?? reguli ??n familie ??i poate u??or manifesta st??ri de gelozie.", "<b>Cifra destinului: 7</b> <br>Cei care au cifra destinului 7 par persoane introvertite, sunt foarte ??n??elepte, ra??ionale ??i au o viziune aparte, greu de ??n??eles pentru cei din jur.<br> 7 este ??i cifra spiritualit????ii, persoanele cu aceast?? energie au o profunzime pe care cei din jur nu prea o pricep. Nu-??i exprim?? u??or sentimentele, tr??irile, chiar se izoleaz?? de agita??ia lumii. Au capacitatea de a ajuta. <br>Sunt persoane foarte talentate, care observ?? tot ??n jur, analizeaz?? detaliile, comtempl?? ??i vin cu perspective profunde asupra lucrurilor. Poate p??rea o persoan?? arogant?? pentru c?? nu se implic?? foarte tare ??n via??a social??, de??i se descurc?? foarte bine ??n public. ??i place destul de mult polemica ??i nu renun???? p??n?? nu-??i demonstreaz?? punctul de vedere, foarte bine studiat ??i documentat. <br>??n cazuri extreme, devine o persoan?? fanatic??, dogmatic??. Fiind o persoan?? perfec??ionist??, este greu de mul??umit de c??tre persoanele apropiate.", "<b>Cifra destinului: 8</b> <br> C??nd vorbim de persoana cu cifra destinului 8, neap??rat vorbim de putere, pe toate planurile. Are o capacitate foarte mare de a ob??ine ce ????i propune, este determinat??, are viziune, este un lider ??nn??scut, se remarc?? prin spiritul justi??iar ??i se poate sacrifica pentru o cauz?? nobil??. Patriotismul ??i este natural.<br>Multe persoane cu cifra 8 se dezvolt?? ??n activit????i pentru publicul larg, ??n ac??iuni umanitare ??i sunt capabile s?? aduc?? valoare pentru mase mari de oameni, inclusiv pe plan politic. Dorin??a de a ob??ine bunuri materiale ??i bani nu le d?? pace ??i este o preocupare principal?? pentru aceste persoane. Ce-i drept, se pricep s?? fac?? bani.<br>Au o dorin???? puternic?? de control ??i se poate transforma ??n scopul lor principal ??n via????. Le este u??or s??-??i manifeste controlul ??i domina??ia ??n toate aspectele din via??a lor (carier??, afacere, familie, rela??ia de cuplu, etc). ??n situa??iile pe care nu le poate controla, se va r??zbuna puternic, f??r?? scrupule.", "<b>Cifra destinului: 9</b> <br>9 este profesorul, profetul, este transformare continu??. De obicei este persoana care ??i inspir?? pe cei din jur, care ??i ghideaz??, care ??i sus??ine ??i care se dedic?? oamenilor. Face multe ac??iuni umanitare, este cel care mereu se g??nde??te la binele suprem. Este vis??tor, permanent caut?? solu??ii s?? transforme totul ??n mai bine, ??n acea lume ideal?? ??n care exist?? armonie pe toate planurile. <br> Ca profesie, foarte multe persoane cu cifra destinului 9 sunt medici, terapeu??i, profesori, traineri, arti??ti, consilieri, consultan??i.<br>??i este fric?? de restric??ii de orice fel ??i are frica de a nu-??i mai putea controla emo??iile. Este o persoan?? elitist??, smerit?? ??i care ofer?? dragoste necondi??ionat??. ??n dorin??a sa de a face bine celorlal??i, poate s?? piard?? din vedere propriul interes ??i propria bun??stare.", "<b> Numarul destinului: 11 </b> <br>Acest num??r este cel mai ??nc??rcat num??r dintre toate! E??ti la fel de intens precum un fulger! Atragi idei puternice, intui??ii ??i chiar informa??ii de natur?? psi. Ai o prezen???? impresionant??, chiar ??i dac?? tu nu realizezi c?? ai vreo anumit?? putere personal??. Se poate spune despre tine c?? e??ti un canal prin care curg vibra??ii ??nalte, dar pentru ca tu s?? po??i fi echilibrat din punct de vedere emo??ional ??i psihologic, trebuie s?? ??nve??i s?? controlezi acest flux de energie. <br> ??n alt?? ordine de idei, ??n mintea ta exist?? o punte solid?? ??ntre incon??tient ??i con??tient. Dificultatea const?? ??n faptul c?? incon??tientul este o resurs?? infinit??, ??n timp ce con??tientul este un ???spa??iu limitat???. Cele dou?? laturi vor fi ??ntr-o permanent?? contradic??ie at??ta timp c??t nu ??nve??i s?? tr??ie??ti cu ele ??n armonie. Aici intervine controlul pe care ??l men??ionam mai devreme. P??n?? ce nu vei putea controla ??n mod con??tient fluxul acestei energii superioare, vei sim??i adesea c?? te afli sub influen??a capriciilor sale, r??v????it constant de c??tre acesta at??t ??n plan emo??ional c??t ??i nervos. <br> Aceste lucruri le-ai sim??it dintotdeauna. Ai ??tiut cumva c?? e??ti aparte, dar era un sentiment greu de definit. Erai extrem de sensibil, ??n special ??n copil??rie. Acest lucru te-a f??cut s?? fii oarecum vulnerabil ??n fa??a conflictelor ??i a situa??iilor dureroase. <br> ??n cea mai mare parte a timpului nu realizai c?? oamenii din jur nu sunt la fel de sensibili ca tine, sau c?? nu v??d lucrurile a??a cum le vezi ??i tu.", "<b>Numarul destinului: 22 </b> <br> E??ti un Maestru Constructor. E??ti ??nzestrat cu un dar unic pentru a percepe anumite tipare ??n lumea arhetipala ??? infinit?? ??i divin?? ??? ??i de a le transpune ??n realitatea, ??n via??a noastr?? cea de toate zilele. <br>Ai vise mari ??i fiecare ??el pe care ??i-l propui este colosal. Visezi s?? la??i o urm?? care s?? d??inuie pentru secole, ??i nutre??ti speran??a c?? ??ntr-o zi vei putea schimba cursul istoriei. Pur ??i simplu sim??i c?? este imperios necesari s?? ????i la??i amprenta asupra civiliza??iei umane. Sim??i c?? e??ti capabil de orice ??i c?? ????i po??i imagina orice. Dintre toate numerele, al t??u este ??nzestrat cu cea mai mare capacitate de materializare ??i reu??it??, dar ??i cu cel mai ??nalt grad de e??ec. <br>Ca s?? ????i po??i manifesta visele ??i aspira??iile vei fi nevoit s?? ????i dedici ??ntreaga via???? pentru realizarea lor, ??i este foarte posibil s?? fi sim??it deja acest lucru ??nc?? din copil??rie, ceea ce poate te-a f??cut s?? fii u??or intimidat de gravitatea ??i de impozan??a muncii care se prefigura la orizont, conduc??nd adesea poate c??tre angoas?? ??i ??ndoial??. <br>Abia ??n fazele t??rzii ale maturit????ii vei putea utiliza cu adev??rat puterea ta interioar?? ??i vei pune cu adev??rat pietrele de temelie ale destinului t??u, c??ci ??n calitate de Maestru Constructor ????i vei construi destinul de la zero. Promisiunea r??spl????ilor va fi cel pu??in la fel de mare ca ??i gradul de dificultate ??i de munc?? al sarcinilor pe care le vei avea de dus la cap??t. <br>Num??rul 22 ofer?? celor care realizeaz?? dimensiunea sa ad??nc?? ??ansa de a p????i ??ntr-o dimensiune nou?? ??n care zilele sunt expandate, capacitatea de crea??ie este multiplicat??, iar puterea de a ajuta umanitatea se va extinde dincolo de limitele normale ale vie??ii lor.", "<b> Numarul destinului: 33</b> <br> 33 este denumit Maestru Inv??????tor. Exista foarte pu??ine persoane cu aceast?? cifr?? a destinului.  Ace??tia au multiple talente, g??ndire str??lucitoare, intui??ie superioar?? ??i o viziune remarcabil??. Num??rul 33 se reduce la 6 (3+3=6) ??i preia o mare parte din vibra??ia num??rului ??ase. Perfec??ionismul, standarde ??nalte, sensibilitatea, dragostea, sacrificiul, spiritualitatea, responsabilitatea sunt doar c??teva dintre calit????ile lui 33. ????i este greu sa delegi sau s?? ai ??ncredere ??n ceilal??i. E??ti sensibil ??i dispui de o puternic?? intui??ie, po??i ajunge p??n?? la clarviziune. Ai capacitatea de a sim??i nevoile celorlal??i, pentru c?? te po??i pune cu u??urin???? ??n locul lor. Oamenii te caut?? adesea pentru sfaturile tale. E??ti admirat, respectat ??i urmat de c??tre ceilal??i f??r?? a depune efort. <br> Idealurile tale ??nalte reprezint?? o surs?? de inspira??ie pentru ceilal??i. Num??rul 33 aduce o pronun??at?? ??nclina??ie c??tre religie ??i spiritualitate. ??elul t??u este s?? aduci iubirea ??ntregii lumi. Nu e??ti preocupat de ambi??ii personale. Cau??i s?? te dedici unor cauze universale, ??ncerc??nd s?? ridici nivelul de con??tien???? al omenirii... Continuarea la Cursul de Numerologie", "<b> Numarul destinului: 44 <b> <br> Cei cu numarul 44 sunt oameni pragmatici, realisti si ambitiosi, iar talentul lor le permite sa-si foloseasca imaginatia pentru a elabora planuri vaste in activitati care necesita strategie, pricepere si viziune generala." ];

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