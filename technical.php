<?php include('header.php'); ?>
<div class="container">
<div class="insert">
<form action="tech.php" method="post">
<table width="40%" cellpadding="0" cellspacing="0" border="1">
<thead>
	<tr>
	<th>School:</th>
	<th colspan="5"><input name="school" type="text" required class="texttag"></th>
</tr>
<tr>
<th>Name:</th>
<th><input name="stuName" type="text" required></th>
<th>Sy.No</th>
<th width="10%" colspan="2"><input name="stuRoll" type="text" required class="texttag"></th>
	<tr>
	<th align="center" rowspan="2">S.N</th>
	<th align="center" rowspan="2" width="40%">Subject</th>
	<th align="center" colspan="2">F.M</th>
	<th align="center" colspan="2">Obt.Marks</th>
	</tr>

	<tr>
	<th>Th</th>
	<th width="12%">Pr</th>
	<th>Th</th>
	<th>Pr</th>
	
	</tr>
</thead>

	
	



	

	<tr>
		<td align="center">1</td>
		<td align="left">Mathmatics</td>
		<td align="center">100</td>
		<td align="center">&nbsp;</td>
		
		<td width="10%;"><input name="thmath"  type="text" required class="texttag"  ></td>
		<td>&nbsp;</td>
	
	</tr>	

	
	<tr>
		<td align="center">2</td>
		<td align="left">Nepali</td>
		<td align="center">100</td>
		<td align="center">&nbsp;</td>
		
		<td width="10%;"><input name="thnepali"  type="text" required class="texttag" ></td>
		<td>&nbsp;</td>
		
	</tr>
		<tr>
		<td align="center">3</td>
		<td align="left">Science</td>
		<td align="center">75</td>
		<td align="center">25</td>
		
		<td width="10%;"><input name="thscience"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prscience"  type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">4</td>
		<td align="left">English</td>
		<td align="center">75</td>
		<td align="center">225</td>
	
		<td width="10%;"><input name="thenglish"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prenglish"  type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">5</td>
		<td align="left">DBMS</td>
		<td align="center">40</td>
		<td align="center">60</td>
		
		<td width="10%;"><input name="thdbms"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prdbms"  type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">6</td>
		<td align="left">Microprocessor</td>
		<td align="center">40</td>
		<td align="center">60</td>
		<td width="10%;"><input name="thmicro"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prmicro"  type="text" required class="texttag" ></td>
	</tr>
	
	<tr>
		<td align="center">7</td>
		<td align="left">C++</td>
		<td align="center">40</td>
		<td align="center">60</td>
		
		<td width="10%;"><input name="thcp"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prcp"  type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">8</td>
		<td align="left">CRM</td>
		<td align="center">40</td>
		<td align="center">60</td>
		
		<td width="10%;"><input name="thcrm"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prcrm"  type="text" required class="texttag" ></td>
	</tr>
	
	<tr>
		<td align="center">9</td>
		<td align="left">EDC</td>
		<td align="center">40</td>
		<td align="center">60</td>
		
		<td width="10%;"><input name="thedc"  type="text" required class="texttag"  ></td>
		<td width="10%;"><input name="predc"  type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">10</td>
		<td align="left">CN</td>
		<td align="center">40</td>
		<td align="center">60</td>
		
		<td width="10%;"><input name="thcn"  type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prcn"  type="text" required class="texttag" ></td>
	</tr>
	
</table>
<input type="submit"  value="Convert" class="click">
</form>
</div>
</div>
<?php include('footer.php'); ?>