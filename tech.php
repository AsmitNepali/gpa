<?php
	include('header.php');
$thmath= $_POST['thmath'];
$thnepali= $_POST['thnepali'];
$thenglish= $_POST['thenglish'];
$thdbms= $_POST['thdbms'];
$thmp= $_POST['thmicro'];
$thcn=$_POST['thcn'];
$thcrm=$_POST['thcrm'];
$thcp=$_POST['thcp'];
$thedc=$_POST['thedc'];
$thscience=$_POST['thscience'];
// practical marks
$prenglish= $_POST['prenglish'];
$prdbms= $_POST['prdbms'];
$prmp= $_POST['prmicro'];
$prcn=$_POST['prcn'];
$prcrm=$_POST['prcrm'];
$prcp=$_POST['prcp'];
$predc=$_POST['predc'];
$prscience=$_POST['prscience'];

// echo $thmath;
// echo $thnepali;
// echo $prmath;
// echo $prscience;
//$mt=0;
//###################### 	This is for mathematics #############################//

if($_POST)
{
	if($thmath <=100 && $thmath >= 90)
	{
		$mt=4;
	
	}
	else if ($thmath < 90 && $thmath >=80) 
	{
		$mt= 3.6;
	}
	else if ($thmath < 80 && $thmath >=70) 
	{
		$mt= 3.2;
	}
	else if ($thmath < 70 && $thmath >=60 ) 
	{
		$mt= 2.8;
	}
	else if ($thmath < 60 && $thmath >= 50) 
	{
		$mt= 2.4;
	}
	else if ($thmath < 50 && $thmath >= 40) 
	{
		$mt= 2.0;
	}
	else if ($thmath < 40 && $thmath >= 20) 
	{
		$mt= 1.6;
	}
	else if ($thmath < 20 && $thmath >= 1) 
	{
		$mt= 0.8;
	}
	
	else 
	{
		$mt= 0;
	}
		//echo $mt;
	
	//###################### 	This is for Nepali #############################//

	if($thnepali <=100 && $thnepali >= 90)
	{
		$np=4;
	
	}
	else if($thnepali < 90 && $thnepali >=80) 
	{
		$np= 3.6;
	}
	else if ($thnepali < 80 && $thnepali >=70) 
	{
		$np= 3.2;
	}
	else if ($thnepali < 70 && $thnepali >=60 ) 
	{
		$np= 2.8;
	}
	else if ($thnepali < 60 && $thnepali >= 50) 
	{
		$np= 2.4;
	}
	else if ($thnepali < 50 && $thnepali >= 40) 
	{
		$np= 2.0;
	}
	else if ($thnepali < 40 && $thnepali >= 20) 
	{
		$np= 1.6;
	}
	else if ($thnepali < 20 && $thnepali >= 1) 
	{
		$np= 0.8;
	}
	
	else
	{
		$np= 0;
	}
	//###################### 	This is for Science #############################//
		//echo $thscience+$prscience;
		$gpaScience = $thscience+$prscience;
		
	if($gpaScience <=100 && $gpaScience >= 90)
	{
		$thSc=4;
	
	}
	else if ($gpaScience < 90 && $gpaScience >=80) 
	{
		$thSc= 3.6;
	}
	else if ($gpaScience < 80 && $gpaScience >=70) 
	{
		$thSc= 3.2;
	}
	else if ($gpaScience < 70 && $gpaScience >=60 ) 
	{
		$thSc= 2.8;
	}
	else if ($gpaScience < 60 && $gpaScience >= 50) 
	{
		$thSc= 2.4;
	}
	else if ($gpaScience < 50 && $gpaScience >= 40) 
	{
		$thSc= 2.0;
	}
	else if ($gpaScience < 40 && $gpaScience >= 20) 
	{
		$thSc= 1.6;
	}
	else if ($gpaScience < 20 && $gpaScience >= 1) 
	{
		$thSc= 0.8;
	}
	
	else 
	{
		$thSc= 0;
	}



	

	 

	//###################### 	This is for English #############################//
	
	$gpaEnglish= ($thenglish+$prenglish);
	


	//for theory English

	if($gpaEnglish <=100 && $gpaEnglish >= 90)
	{
		$thEng=4;
	
	}
	else if ($gpaEnglish < 90 && $gpaEnglish >=80) 
	{
		$thEng= 3.6;
	}
	else if ($gpaEnglish < 80 && $gpaEnglish >=70) 
	{
		$thEng= 3.2;
	}
	else if ($gpaEnglish < 70 && $gpaEnglish >=60 ) 
	{
		$thEng= 2.8;
	}
	else if ($gpaEnglish < 60 && $gpaEnglish >= 50) 
	{
		$thEng= 2.4;
	}
	else if ($gpaEnglish < 50 && $gpaEnglish >= 40) 
	{
		$thEng= 2.0;
	}
	else if ($gpaEnglish < 40 && $gpaEnglish >= 20) 
	{
		$thEng= 1.6;
	}
	else if ($gpaEnglish < 20 && $gpaEnglish >= 1) 
	{
		$thEng= 0.8;
	}
	
	else
	{
		$thEng= 0;
	}

	
	

	//###################### 	This is for DBMS #############################//

	$gpaDbms= ($thdbms+$prdbms);




	if($gpaDbms <=100 && $gpaDbms >= 90)
	{
		$thDBMS=4;
	
	}
	else if ($gpaDbms < 90 && $gpaDbms >=80) 
	{
		$thDBMS= 3.6;
	}
	else if ($gpaDbms < 80 && $gpaDbms >=70) 
	{
		$thDBMS= 3.2;
	}
	else if ($gpaDbms < 70 && $gpaDbms >=60 ) 
	{
		$thDBMS= 2.8;
	}
	else if ($gpaDbms < 60 && $gpaDbms >= 50) 
	{
		$thDBMS= 2.4;
	}
	else if ($gpaDbms < 50 && $gpaDbms >= 40) 
	{
		$thDBMS= 2.0;
	}
	else if ($gpaDbms < 40 && $gpaDbms >= 20) 
	{
		$thDBMS= 1.6;
	}
	else if ($gpaDbms < 20 && $gpaDbms >= 1) 
	{
		$thDBMS= 0.8;
	}
	
	else 
	{
		$thDBMS= 0;

	}

	//###################### 	This is for MP #############################//

	$gpaMp= ($thmp+$prmp);


	if($gpaMp <=100 && $gpaMp >= 90)
	{
		$thMp=4;
	
	}
	else if ($gpaMp < 90 && $gpaMp >=80) 
	{
		$thMp= 3.6;
	}
	else if ($gpaMp < 80 && $gpaMp >=70) 
	{
		$thMp= 3.2;
	}
	else if ($gpaMp < 70 && $gpaMp >=60 ) 
	{
		$thMp= 2.8;
	}
	else if ($gpaMp < 60 && $gpaMp >= 50) 
	{
		$thMp= 2.4;
	}
	else if ($gpaMp < 50 && $gpaMp >= 40) 
	{
		$thMp= 2.0;
	}
	else if ($gpaMp < 40 && $gpaMp >= 20) 
	{
		$thMp= 1.6;
	}
	else if ($gpaMp < 20 && $gpaMp >= 1) 
	{
		$thMp= 0.8;
	}
	
	else 
	{
		$thMp= 0;

	}

	//###################### 	This is for C++ #############################//

	$gpaCp= ($thcp+$prcp);
	

	//for theory of C++

	if($gpaCp <=100 && $gpaCp >= 90)
	{
		$thCp=4;
	
	}
	else if ($gpaCp < 90 && $gpaCp >=80) 
	{
		$thCp= 3.6;
	}
	else if ($gpaCp < 80 && $gpaCp >=70) 
	{
		$thCp= 3.2;
	}
	else if ($gpaCp < 70 && $gpaCp >=60 ) 
	{
		$thCp= 2.8;
	}
	else if ($gpaCp < 60 && $gpaCp >= 50) 
	{
		$thCp= 2.4;
	}
	else if ($gpaCp < 50 && $gpaCp >= 40) 
	{
		$thCp= 2.0;
	}
	else if ($gpaCp < 40 && $gpaCp >= 20) 
	{
		$thCp= 1.6;
	}
	else if ($gpaCp < 20 && $gpaCp >= 1) 
	{
		$thCp= 0.8;
	}
	
	else
	{
		$thCp= 0;

	}

	
	

	//###################### 	This is for CRM #############################//

	$gpaCrm= ($thcrm+$prcrm);

	

	if($gpaCrm <=100 && $gpaCrm >= 90)
	{
		$thCrm=4;
	
	}
	else if ($gpaCrm < 90 && $gpaCrm >=80) 
	{
		$thCrm= 3.6;
	}
	else if ($gpaCrm < 80 && $gpaCrm >=70) 
	{
		$thCrm= 3.2;
	}
	else if ($gpaCrm < 70 && $gpaCrm >=60 ) 
	{
		$thCrm= 2.8;
	}
	else if ($gpaCrm < 60 && $gpaCrm >= 50) 
	{
		$thCrm= 2.4;
	}
	else if ($gpaCrm < 50 && $gpaCrm >= 40) 
	{
		$thCrm= 2.0;
	}
	else if ($gpaCrm < 40 && $gpaCrm >= 20) 
	{
		$thCrm= 1.6;
	}
	else if ($gpaCrm < 20 && $gpaCrm >= 1) 
	{
		$thCrm= 0.8;
	}
	
	else 
	{
		$thCrm= 0;

	}

	//###################### 	This is for EDC #############################//

	$gpaEdc= ($thedc+$predc);
	

	//for theory of EDC

	if($gpaEdc <=100 && $gpaEdc >= 90)
	{
		$thEdc=4;
	
	}
	else if ($gpaEdc < 90 && $gpaEdc >=80) 
	{
		$thEdc= 3.6;
	}
	else if ($gpaEdc < 80 && $gpaEdc >=70) 
	{
		$thEdc= 3.2;
	}
	else if ($gpaEdc < 70 && $gpaEdc >=60 ) 
	{
		$thEdc= 2.8;
	}
	else if ($gpaEdc < 60 && $gpaEdc >= 50) 
	{
		$thEdc= 2.4;
	}
	else if ($gpaEdc < 50 && $gpaEdc >= 40) 
	{
		$thEdc= 2.0;
	}
	else if ($gpaEdc < 40 && $gpaEdc >= 20) 
	{
		$thEdc= 1.6;
	}
	else if ($gpaEdc < 20 && $gpaEdc >= 1) 
	{
		$thEdc= 0.8;
	}
	
	else
	{
		$thEdc= 0;

	}

	

	//###################### 	This is for CN #############################//


	$gpaCn= ($thcn+$prcn);

	//for theory of CN

	if($gpaCn <=100 && $gpaCn >= 90)
	{
		$thCn=4;
	
	}
	else if ($gpaCn < 90 && $gpaCn >=80) 
	{
		$thCn= 3.6;
	}
	else if ($gpaCn < 80 && $gpaCn >=70) 
	{
		$thCn= 3.2;
	}
	else if ($gpaCn < 70 && $gpaCn >=60 ) 
	{
		$thCn= 2.8;
	}
	else if ($gpaCn < 60 && $gpaCn >= 50) 
	{
		$thCn= 2.4;
	}
	else if ($gpaCn < 50 && $gpaCn >= 40) 
	{
		$thCn= 2.0;
	}
	else if ($gpaCn < 40 && $gpaCn >= 20) 
	{
		$thCn= 1.6;
	}
	else if ($gpaCn < 20 && $gpaCn >= 1) 
	{
		$thCn= 0.8;
	}
	
	else
	{
		$thCn= 0;

	}
	//#################### Formula Grade ###################//

	//#################### Formula Grade for math ###################//
	if ($mt == 4.0) {
		$gmt="A+";
	}
	if ($mt== 3.6) {
		$gmt="A";
	}
	if ($mt== 3.2) {
		$gmt="B+";
	}
	if ($mt== 2.8) {
		$gmt="B";
	}
	if ($mt== 2.4) {
		$gmt="C+";
	}
	if ($mt== 2.0) {
		$gmt="C";
	} 
	if ($mt== 1.6) {
		$gmt="D";
	}
	if ($mt== 0.8) {
		$gmt="E";
	}
		if ($mt== 0) {
		$gmt="N";
	}

	//#################### Formula Grade for nepali ###################//
	if ($np == 4.0) {
		$gnp="A+";
	}
	if ($np== 3.6) {
		$gnp="A";
	}
	if ($np== 3.2) {
		$gnp="B+";
	}
	if ($np== 2.8) {
		$gnp="B";
	}
	if ($np== 2.4) {
		$gnp="C+";
	}
	if ($np== 2.0) {
		$gnp="C";
	} 
	if ($np== 1.6) {
		$gnp="D";
	}
	if ($np== 0.8) {
		$gnp="E";
	}
	if ($np== 0) {
		$gnp="N";
	}

	//#################### Formula Grade for science ###################//
	if ($thSc == 4.0) {
		$gSc="A+";
	}
	if ($thSc== 3.6) {
		$gSc="A";
	}
	if ($thSc== 3.2) {
		$gSc="B+";
	}
	if ($thSc== 2.8) {
		$gSc="B";
	}
	if ($thSc== 2.4) {
		$gSc="C+";
	}
	if ($thSc== 2.0) {
		$gSc="C";
	} 
	if ($thSc== 1.6) {
		$gSc="D";
	}
	if ($thSc== 0.8) {
		$gSc="E";
	}
	if ($thSc== 0) {
		$gSc="N";
	}
	
		//#################### Formula Grade for English ###################//

	if ($thEng == 4.0) {
		$gEng="A+";
	}
	if ($thEng== 3.6) {
		$gEng="A";
	}
	if ($thEng== 3.2) {
		$gEng="B+";
	}
	if ($thEng== 2.8) {
		$gEng="B";
	}
	if ($thEng== 2.4) {
		$gEng="C+";
	}
	if ($thEng== 2.0) {
		$gEng="C";
	} 
	if ($thEng== 1.6) {
		$gEng="D";
	}
	if ($thEng== 0.8) {
		$gEng="E";
	}
	if ($thEng== 0) {
		$gEng="N";
	}


		//#################### Formula Grade for DBMS ###################//

	if ($thDBMS == 4.0) {
		$gDBMS="A+";
	}
	if ($thDBMS== 3.6) {
		$gDBMS="A";
	}
	if ($thDBMS== 3.2) {
		$gDBMS="B+";
	}
	if ($thDBMS== 2.8) {
		$gDBMS="B";
	}
	if ($thDBMS== 2.4) {
		$gDBMS="C+";
	}
	if ($thDBMS== 2.0) {
		$gDBMS="C";
	} 
	if ($thDBMS== 1.6) {
		$gDBMS="D";
	}
	if ($thDBMS== 0.8) {
		$gDBMS="E";
	}
	if ($thDBMS== 0) {
		$gDBMS="N";
	}


		//#################### Formula Grade for MP ###################//

	if ($thMp == 4.0) {
		$gMP="A+";
	}
	if ($thMp== 3.6) {
		$gMP="A";
	}
	if ($thMp== 3.2) {
		$gMP="B+";
	}
	if ($thMp== 2.8) {
		$gMP="B";
	}
	if ($thMp== 2.4) {
		$gMP="C+";
	}
	if ($thMp== 2.0) {
		$gMP="C";
	} 
	if ($thMp== 1.6) {
		$gMP="D";
	}
	if ($thMp== 0.8) {
		$gMP="E";
	}
		if ($thMp== 0) {
		$gMP="N";
	}


		//#################### Formula Grade for C++ ###################//

	if ($thCp == 4.0) {
		$gCP="A+";
	}
	if ($thCp== 3.6) {
		$gCP="A";
	}
	if ($thCp== 3.2) {
		$gCP="B+";
	}
	if ($thCp== 2.8) {
		$gCP="B";
	}
	if ($thCp== 2.4) {
		$gCP="C+";
	}
	if ($thCp== 2.0) {
		$gCP="C";
	} 
	if ($thCp== 1.6) {
		$gCP="D";
	}
	if ($thCp== 0.8) {
		$gCP="E";
	}
		if ($thCp== 0) {
		$gCP="N";
	}



		//#################### Formula Grade for CRM ###################//

	if ($thCrm == 4.0) {
		$gCRM="A+";
	}
	if ($thCrm== 3.6) {
		$gCRM="A";
	}
	if ($thCrm== 3.2) {
		$gCRM="B+";
	}
	if ($thCrm== 2.8) {
		$gCRM="B";
	}
	if ($thCrm== 2.4) {
		$gCRM="C+";
	}
	if ($thCrm== 2.0) {
		$gCRM="C";
	} 
	if ($thCrm== 1.6) {
		$gCRM="D";
	}
	if ($thCrm== 0.8) {
		$gCRM="E";
	}
		if ($thCrm== 0) {
		$gCRM="N";
	}



		//#################### Formula Grade for EDC ###################//

	if ($thEdc == 4.0) {
		$gEDC="A+";
	}
	if ($thEdc== 3.6) {
		$gEDC="A";
	}
	if ($thEdc== 3.2) {
		$gEDC="B+";
	}
	if ($thEdc== 2.8) {
		$gEDC="B";
	}
	if ($thEdc== 2.4) {
		$gEDC="C+";
	}
	if ($thEdc== 2.0) {
		$gEDC="C";
	} 
	if ($thEdc== 1.6) {
		$gEDC="D";
	}
	if ($thEdc== 0.8) {
		$gEDC="E";
	}
	if ($thEdc== 0) {
		$gEDC="N";
	}


		//#################### Formula Grade for EDC ###################//

	if ($thCn == 4.0) {
		$gCN="A+";
	}
	if ($thCn== 3.6) {
		$gCN="A";
	}
	if ($thCn== 3.2) {
		$gCN="B+";
	}
	if ($thCn== 2.8) {
		$gCN="B";
	}
	if ($thCn== 2.4) {
		$gCN="C+";
	}
	if ($thCn== 2.0) {
		$gCN="C";
	} 
	if ($thCn== 1.6) {
		$gCN="D";
	}
	if ($thCn== 0.8) {
		$gCN="E";
	}
	if ($thCn== 0) {
		$gCN="N";
	}






/*echo $np."=Nepali";
echo "<br/>";
echo $mt. "=mathematics";
echo "<br/>";
echo $thSc. "=Science";
echo "<br/>";
echo $thEng. "=English";
echo "<br/>";
echo $thDBMS."=DBMS";
echo "<br/>";
echo $thMp."=MP";
echo "<br/>";
echo $thCp."=CP";
echo "<br/>";
echo $thCrm."=CRM";
echo "<br/>";
echo $thEdc."=EDC";
echo "<br/>";
echo $thCn."=CN";
echo "<br/>";*/

	 $totalGpa=($np+$mt+$thSc+$thEng+$thDBMS+$thMp+$thCp+$thCrm+$thEdc+$thCn)/10;

	 //####################### Total Average Grade######################//

	 if ($totalGpa == 4.0) 
	 {
		$grade="A+";
	}
	if ($totalGpa== 3.6) 
	{
		$grade="A";
	}
	if ($totalGpa== 3.2) 
	{
		$grade="B+";
	}
	if ($totalGpa== 2.8)
	 {
		$grade="B";
	}
	if ($totalGpa== 2.4)
	 {
		$grade="C+";
	}
	if ($totalGpa== 2.0)
	 {
		$grade="C";
	} 
	if ($totalGpa== 1.6)
	 {
		$grade="D";
	}
	if ($totalGpa== 0.8) 
	{
		$grade="E";
	}
	

	?>

	<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
	<div class= "container">
	<div id="printablediv">
	<div class="insert">
<table width="40%" cellpadding="0" cellspacing="0" border="1">
<thead>
	<tr>
		<th colspan="4" class="school"><?php echo $_POST['school']; ?></th>
	</tr>
	<tr>
		<th colspan="4">Secondary Education Examination</th>
	</tr>
	<tr>
	<td colspan="2">Name:<i> <?php echo $_POST['stuName'];?></i></td>
	<td>Sy.No:<i> <?php echo $_POST['stuRoll'];?></i></td>
	<td>Class:<i>10</i></td>

	</tr>
	<tr>
	<th align="center" >S.N</th>
	<th align="center" >Subject</th>
	<th align="center" >Final Grade</th>
	<th align="center" >Grade Point</th>
	</tr>
</thead>
	<tr>
		<td align="center">1</td>
		<td align="left">Mathmatics</td>
		<td align="center"><i><b><?php echo $gmt; ?></b></i></td>
		<td align="center"><i><b><?php echo $mt;?></b></i></td>
		
	
	
	</tr>	

	
	<tr>
		<td align="center">2</td>
		<td align="left">Nepali</td>
		<td align="center"><i><b><?php echo $gnp; ?></b></i></td>
		<td align="center"><i><b><?php echo $np;?></b></i></td>
		
		
	</tr>
		<tr>
		<td align="center">3</td>
		<td align="left">Science</td>
		<td align="center"><i><b><?php echo $gSc; ?></b></i></td>
		<td align="center"><i><b><?php echo $thSc; ?></b></i></td>
		
	
	</tr>
	<tr>
		<td align="center">4</td>
		<td align="left">English</td>
		<td align="center"><i><b><?php echo $gEng; ?></b></i></td>
		<td align="center"><i><b><?php echo $thEng; ?></b></i></td>
	
	
	</tr>
	<tr>
		<td align="center">5</td>
		<td align="left">DBMS</td>
		<td align="center"><i><b><?php echo $gDBMS; ?></b></i></td>
		<td align="center"><i><b><?php echo $thDBMS; ?></b></i></td>
		
	</tr>
	<tr>
		<td align="center">6</td>
		<td align="left">Microprocessor</td>
		<td align="center"><i><b><?php echo $gMP; ?></b></i></td>
		<td align="center"><i><b><?php echo $thMp; ?></b></i></td>

	</tr>
	
	<tr>
		<td align="center">7</td>
		<td align="left">C++</td>
		<td align="center"><i><b><?php echo $gCP; ?></b></i></td>
		<td align="center"><i><b><?php echo $thCp; ?></b></i></td>
		
	</tr>
	<tr>
		<td align="center">8</td>
		<td align="left">CRM</td>
		<td align="center"><i><b><?php echo $gCRM; ?></b></i></td>
		<td align="center"><i><b><?php echo $thCrm; ?></b></i></td>
		
	</tr>
	
	<tr>
		<td align="center">9</td>
		<td align="left">EDC</td>
		<td align="center"><i><b><?php echo $gEDC; ?></b></i></td>
		<td align="center"><i><b><?php echo $thEdc; ?></b></i></td>
		
	</tr>
	<tr>
		<td align="center">10</td>
		<td align="left">CN</td>
		<td align="center"><i><b><?php echo $gCN; ?></b></i></td>
		<td align="center"><i><b><?php echo $thCn; ?></b></i></td>
		
	
	</tr>
	<tfoot>
	<tr>
		<td colspan="3" align="center">Grade Point Aaverage(GPA)</td>
		<td align="center"><h3><?php echo $totalGpa; ?></h3></td>
		</tr>
		
		<td  colspan="2" align="center">	90 to 100	</td>
		<td align="center">	4.0	</td>
		<td align="center">	A+	</td>
		
	<tr>
	
		<td  colspan="2" align="center">	80 to below 90	</td>
		<td align="center">	3.6	</td>
		<td align="center">	A	</td>
		
	</tr>
	<tr>
		
		<td  colspan="2" align="center">	70 to below 80	</td>
		<td align="center">	3.2	</td>
		<td align="center">B+</td>
		
	</tr>
	<tr>
		
		<td  colspan="2" align="center">	60 to below 70	</td>
		<td align="center">	2.8	</td>
		<td align="center">B</td>
		
	</tr>
	<tr>
		
		<td  colspan="2" align="center">	50 to below 60	</td>
		<td align="center">2.4	</td>
		<td align="center">C+</td>
		
	</tr>
	<tr>
		
		<td  colspan="2" align="center">	40 to below 50	</td>
		<td align="center">2.0	</td>
		<td align="center">C</td>
		
	</tr>
	<tr>
		
		<td  colspan="2" align="center">	20 to below 40	</td>
		<td align="center">1.6	</td>
		<td align="center">D</td>
		
	</tr>
	<tr>
		<td  colspan="2" align="center">	1 to below 20	</td>
		<td align="center">0.8	</td>
		<td align="center">E</td>
		
		
	</tr>
	<tr>

		<td  colspan="2" align="center">	0	</td>
		<td align="center">0	</td>
		<td align="center">N</td>
		
	</tr>
	</tfoot>
	
</table>
</div>
</div>
<input class="myPrint" type="button" value="Print" onclick="javascript:printDiv('printablediv')" />
</div>
<?php include('footer.php'); ?>
<?php
}


	

?>