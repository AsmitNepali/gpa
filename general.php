<?php include('header.php');?>
<div class="container">
<div class="insert">
<form action="gen.php" method="post">
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
</tr>
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
		<td >Mathmatics</td>
		<td align="center">100</td>
		<td align="center">&nbsp;</td>
		
		<td width="10%;"><input name="thmath" type="text" required class="texttag"  ></td>
		<td>&nbsp;</td>
	
	</tr>	

	
	<tr>
		<td align="center">2</td>
		<td align="left">Nepali</td>
		<td align="center">100</td>
		<td align="center">&nbsp;</td>
		
		<td width="10%;"><input name="thnepali" type="text" required class="texttag" ></td>
		<td>&nbsp;</td>
		
	</tr>
		<tr>
		<td align="center">3</td>
		<td align="left">Science</td>
		<td align="center">75</td>
		<td align="center">25</td>
		
		<td width="10%;"><input name="thscience" type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prscience" type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">4</td>
		<td align="left">English</td>
		<td align="center">75</td>
		<td align="center">25</td>
	
		<td width="10%;"><input name="thenglish" type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prenglish" type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">5</td>
		<td align="left">Social</td>
		<td align="center">75</td>
		<td align="center">25</td>
		
		<td width="10%;"><input name="thsocial" type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prsocial" type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">6</td>
		<td align="left">H.P.E</td>
		<td align="center">75</td>
		<td align="center">25</td>
		<td width="10%;"><input name="thhpe" type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prhpe" type="text" required class="texttag" ></td>
	</tr>
	
	
	<tr>
		<td align="center">7</td>
		<td align="left">Optional II(Cmp)</td>
		<td align="center">50</td>
		<td align="center">50</td>
		
		<td width="10%;"><input name="thcmp" type="text" required class="texttag" ></td>
		<td width="10%;"><input name="prcmp" type="text" required class="texttag" ></td>
	</tr>
	<tr>
		<td align="center">8</td>
		<td align="left">Optional I</td>
		<td align="center">100</td>
		<td align="center">&nbsp;</td>
	
		<td width="10%;"><input name="thopt" type="text" required class="texttag" ></td>
		<td width="10%;">&nbsp;</td>
		
	</tr>
</table>
<input type="submit"  value="Convert" class="click">
</form>
</div>
</div>