<?php include '../test.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Registration</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/style.css"/>
	<style>

	</style>
</head>
<body id="home">
<header>
    <?php echo $logo ?>
	<?php echo $nav2 ?>
</header>
<main>
	<section>
		<div class="circle">
			<h1>Register</h1>
			<h2>#PerfMatters Conference<br/>
			in Redwood City, CA <br/>on <strong><?php echo $date ?></strong></h2>
		</div>
	</section>
	<section class="reg" id="reg">
	<h1>Register for #PerfMatters Conference</h1>
	<p>March 27-28, 2018 at Cañada College</p>
	<table>
		<thead><tr>
			<th>Ticket Type</th>
			<th>Available Through</th>
			<th>Cost</th>
		</tr></thead>
		<tbody>
		<tr>
			<td><strike>Very Early Bird</strike></td>
			<td><strike>September 30, 2017</strike></td>
			<td><strike>$239</strike></td>
		</tr>
		<tr>
			<td>Early Bird</td>
			<td>November 30, 2017</td>
			<td>$329</td>
		</tr>
		<tr>
			<td>Regular Bird</td>
			<td>January 31, 2018</td>
			<td>$399</td>
		</tr>
		<tr>
			<td>Late Bird</td>
			<td>March 24, 2018</td>
			<td>$479</td>
		</tr>
		<tr>
			<td>Indecisive Bird</td>
			<td>At the venue</td>
			<td>$579</td>
		</tr>
		<tr>
			<td colspan="3"><a href="https://perfmattersconf.lilregie.com" title="Register Now" class="cta">Register Now</a></td>
		</tr>
	</tbody></table><p><small>Prices subject to change. No refunds. Tickets are transferable with notice. Getting tickets for a 5 or more people? Get $50 off for the fifth person and everyone thereafter. Group of 10 or more? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small>
</section>
	<!--<section>
		<h2>Convince Your Boss</h2>
	</section>
	<section>
		<h2>Benefits of Attending</h2>
	</section>-->
</main>
<footer>
	<?php echo $nav2 ?>x	
	<?php echo $footer ?>
</footer>
</body>
</html>