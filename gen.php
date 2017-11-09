<?php
include('header.php');
//error_reporting(0);
//theory marks
$thmath= $_POST['thmath'];
$thnepali= $_POST['thnepali'];
$thenglish= $_POST['thenglish'];
$thscience=$_POST['thscience'];
$thsocial=$_POST['thsocial'];
$thcmp=$_POST['thcmp'];
$thopt=$_POST['thopt'];
$thhpe=$_POST['thhpe'];

//practical marks
$prenglish= $_POST['prenglish'];
$prscience=$_POST['prscience'];
$prsocial=$_POST['prsocial'];
$prcmp=$_POST['prcmp'];
$prhpe=$_POST['prhpe'];

if($_POST)
{
	if($thmath <=100 && $thmath >= 90)
	{
		$mt=4.0;
	
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
		$np=4.0;
	
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
		$thSc=4.0;
	
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
		$thEng=4.0;
	
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


	//###################### 	This is for H.P.E #############################//


	$gpaHPE= ($thhpe+$prhpe);


	//for theory English

	if($gpaHPE <=100 && $gpaHPE >= 90)
	{
		$HPE=4;
	
	}
	else if ($gpaHPE < 90 && $gpaHPE >=80) 
	{
		$HPE= 3.6;
	}
	else if ($gpaHPE < 80 && $gpaHPE >=70) 
	{
		$HPE= 3.2;
	}
	else if ($gpaHPE < 70 && $gpaHPE >=60 ) 
	{
		$HPE= 2.8;
	}
	else if ($gpaHPE < 60 && $gpaHPE >= 50) 
	{
		$HPE= 2.4;
	}
	else if ($gpaHPE < 50 && $gpaHPE >= 40) 
	{
		$HPE= 2.0;
	}
	else if ($gpaHPE < 40 && $gpaHPE >= 20) 
	{
		$HPE= 1.6;
	}
	else if ($gpaHPE < 20 && $gpaHPE >= 1) 
	{
		$HPE= 0.8;
	}
	
	else 
	{
		$HPE= 0;
	}


	//###################### 	This is for Computer #############################//


	$gpaCmp= ($thcmp+$prcmp);


	if($gpaCmp <=100 && $gpaCmp >= 90)
	{
		$cmp=4;
	
	}
	else if ($gpaCmp < 90 && $gpaCmp >=80) 
	{
		$cmp= 3.6;
	}
	else if ($gpaCmp < 80 && $gpaCmp >=70) 
	{
		$cmp= 3.2;
	}
	else if ($gpaCmp < 70 && $gpaCmp >=60 ) 
	{
		$cmp= 2.8;
	}
	else if ($gpaCmp < 60 && $gpaCmp >= 50) 
	{
		$cmp= 2.4;
	}
	else if ($gpaCmp < 50 && $gpaCmp >= 40) 
	{
		$cmp= 2.0;
	}
	else if ($gpaCmp < 40 && $gpaCmp >= 20) 
	{
		$cmp= 1.6;
	}
	else if ($gpaCmp < 20 && $gpaCmp >= 1) 
	{
		$cmp= 0.8;
	}
	
	else
	{
		$cmp= 0;
	}

	//###################### 	This is for Social #############################//


	$gpaSocial= ($thsocial+$prsocial);


	if($gpaSocial <=100 && $gpaSocial >= 90)
	{
		$social=4;
	
	}
	else if ($gpaSocial < 90 && $gpaSocial >=80) 
	{
		$social= 3.6;
	}
	else if ($gpaSocial < 80 && $gpaSocial >=70) 
	{
		$social= 3.2;
	}
	else if ($gpaSocial < 70 && $gpaSocial >=60 ) 
	{
		$social= 2.8;
	}
	else if ($gpaSocial < 60 && $gpaSocial >= 50) 
	{
		$social= 2.4;
	}
	else if ($gpaSocial < 50 && $gpaSocial >= 40) 
	{
		$social= 2.0;
	}
	else if ($gpaSocial < 40 && $gpaSocial >= 20) 
	{
		$social= 1.6;
	}
	else if ($gpaSocial < 20 && $gpaSocial >= 1) 
	{
		$social= 0.8;
	}
	
	else
	{
		$social= 0;
	}

	//########################## This is for OptioanalI (math/eco)

	if($thopt <=100 && $thopt >= 90)
	{
		$opt=4;
	
	}
	else if ($thopt < 90 && $thopt >=80) 
	{
		$opt= 3.6;
	}
	else if ($thopt < 80 && $thopt >=70) 
	{
		$opt= 3.2;
	}
	else if ($thopt < 70 && $thopt >=60 ) 
	{
		$opt= 2.8;
	}
	else if ($thopt < 60 && $thopt >= 50) 
	{
		$opt= 2.4;
	}
	else if ($thopt < 50 && $thopt >= 40) 
	{
		$opt= 2.0;
	}
	else if ($thopt < 40 && $thopt >= 20) 
	{
		$opt= 1.6;
	}
	else if ($thopt < 20 && $thopt >= 1) 
	{
		$opt= 0.8;
	}
	
	else
	{
		$opt= 0;
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

	//#################### Formula Grade for HPE ###################//

	if ($HPE == 4.0) {
		$gpaHPE="A+";
	}
	if ($HPE== 3.6) {
		$gpaHPE="A";
	}
	if ($HPE== 3.2) {
		$gpaHPE="B+";
	}
	if ($HPE== 2.8) {
		$gpaHPE="B";
	}
	if ($HPE== 2.4) {
		$gpaHPE="C+";
	}
	if ($HPE== 2.0) {
		$gpaHPE="C";
	} 
	if ($HPE== 1.6) {
		$gpaHPE="D";
	}
	if ($HPE== 0.8) {
		$gpaHPE="E";
	}
	if ($HPE== 0) {
		$gpaHPE="N";
	}

	//#################### Formula Grade for social ###################//

	if ($social == 4.0) {
		$gpaSocial="A+";
	}
	if ($social== 3.6) {
		$gpaSocial="A";
	}
	if ($social== 3.2) {
		$gpaSocial="B+";
	}
	if ($social== 2.8) {
		$gpaSocial="B";
	}
	if ($social== 2.4) {
		$gpaSocial="C+";
	}
	if ($social== 2.0) {
		$gpaSocial="C";
	} 
	if ($social== 1.6) {
		$gpaSocial="D";
	}
	if ($social== 0.8) {
		$gpaSocial="E";
	}
	if ($social== 0) {
		$gpaSocial="N";
	}

	//#################### Formula Grade for Computer ###################//

	if ($cmp == 4.0) {
		$gpaSocial="A+";
	}
	if ($cmp== 3.6) {
		$gpaSocial="A";
	}
	if ($cmp== 3.2) {
		$gpacmp="B+";
	}
	if ($cmp== 2.8) {
		$gpacmp="B";
	}
	if ($cmp== 2.4) {
		$gpacmp="C+";
	}
	if ($cmp== 2.0) {
		$gpacmp="C";
	} 
	if ($cmp== 1.6) {
		$gpacmp="D";
	}
	if ($cmp== 0.8) {
		$gpacmp="E";
	}
	if ($cmp== 0) {
		$gpacmp="N";
	}

	//#################### Formula Grade for OPT ###################//

	if ($opt == 4.0) {
		$gpaopt="A+";
	}
	if ($opt== 3.6) {
		$gpaopt="A";
	}
	if ($opt== 3.2) {
		$gpaopt="B+";
	}
	if ($opt== 2.8) {
		$gpaopt="B";
	}
	if ($opt== 2.4) {
		$gpaopt="C+";
	}
	if ($opt== 2.0) {
		$gpaopt="C";
	} 
	if ($opt== 1.6) {
		$gpaopt="D";
	}
	if ($opt== 0.8) {
		$gpaopt="E";
	}
		if ($opt== 0) {
		$gpaopt="N";
	}


	$totalGpa=($np+$mt+$thSc+$thEng+$HPE+$social+$cmp+$opt)/8;
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
		<td align="center"><i><b><?php echo $mt;?> </b></i></td>
		
	
	
	</tr>	

	
	<tr>
		<td align="center">2</td>
		<td align="left">Nepali</td>
		<td align="center"><i><b><?php echo $gnp; ?> </b></i></td>
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
		<td align="left">H.P.E</td>
		<td align="center"><i><b><?php echo $gpaHPE; ?></b></i></td>
		<td align="center"><i><b><?php echo $HPE; ?></b></i></td>
		
	</tr>
	<tr>
		<td align="center">6</td>
		<td align="left">Social</td>
		<td align="center"><i><b><?php echo $gpaSocial; ?></b></i></td>
		<td align="center"><i><b><?php echo $social; ?></b></i></td>

	</tr>
	
	<tr>
		<td align="center">7</td>
		<td align="left">Optional I</td>
		<td align="center"><i><b><?php echo $gpacmp; ?></b></i></td>
		<td align="center"><i><b><?php echo $cmp; ?></b></i></td>
		
	</tr>
	<tr>
		<td align="center">8</td>
		<td align="left">Optional II</td>
		<td align="center"><i><b><?php echo $gpaopt; ?></b></i></td>
		<td align="center"><i><b><?php echo $opt; ?></b></i></td>
		
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