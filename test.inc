<?php 
	$date = "March 27-28, 2018";

	$wk_date = "March 26, 2018";

	$nav = 	"<ul>\r\n" .
			"<li><a href=\"/#speakers\">Speakers</a></li>\r\n" .
			"<li><a href=\"/talks\">Talks</a></li>\r\n" .
			"<li><a href=\"/sponsors\">Sponsors</a></li>\r\n" .
			"<li><a href=\"/venue\">Venue</a></li>\r\n" .
			"<li class=\"cta\"><a href=\"#reg\">Register</a></li>\r\n" .
		"</ul>\r\n";

		$nav2 = "<ul>\r\n" .
			"<li><a href=\"../#speakers\">Speakers</a></li>\r\n" .
			"<li><a href=\"../talks\">Talks</a></li>\r\n" .
			"<li><a href=\"/sponsors\">Sponsors</a></li>\r\n" .
			"<li><a href=\"/venue\">Venue</a></li>\r\n" .
			'<li class="cta"><a href="https://perfmattersconf.lilregie.com" title="Register Now">REGISTER</a></li>\r\n' .
		"</ul>\r\n";

	$footer = "<small>&copy; 2018 <a href=\"/\">#PerfMatters: Web Performance Conference</a> &middot; <a href=\"/code/\">Code of Conduct</a></small>";

	$logo = "	<figure class=\"logo\">\r\n<a href=\"/\">#PerfMatters</a><small>March 27 &amp; 28, 2018<br/>Redwood City, CA</small>\r\n</figure>";

	$form = "https://goo.gl/forms/iyRBhbcxpnjY2llW2";
	
	$reg = '<style>
		caption {
			color: white; 
			font-size: 2em; 
			font-weight: bold; 
			padding-top: 2em;
		} 
		tbody tr {
			opacity: 0.35;
			} 
		tr.active {
			opacity: 1;
		}
		.reg div {
			display: flex; 
			flex-flow: wrap; 
			justify-content: space-between;	
		}
		</style>
	<div>
		<a href="https://perfmattersconf.lilregie.com" title="Register Now" class="cta" style="margin: 1.5em auto">Register Now</a>
	<table>
	<caption>Conference</caption>
		<thead><tr>
			<th width="38%">Ticket Type</th>
			<th width="25%">Sale Ends</th>
			<th width="25%">Available</th>
			<th width="12%">Cost</th>
		</tr></thead>
		<tbody>
		<tr>
			<td><strike>Blind Bird</strike></td>
			<td><strike>September 30, 2017</strike></td>
			<td>EXPIRED</td>
			<td><strike>$239</strike></td>
		</tr>
		<tr>
			<td><strike>Very Early Bird</strike></td>
			<td><strike>November 30, 2017</strike></td>
			<td>EXPIRED</td>
			<td><strike>$329</strike></td>
		</tr>
		<tr class="active">
			<td>Early Bird</td>
			<td>January 31, 2018</td>
			<td>AVAILABLE</td>
			<td>$399</td>
		</tr>
		<tr>
			<td>Regular Ticket</td>
			<td>March 14, 2018</td>
			<td>February 1, 2018</td>
			<td>$479</td>
		</tr>
		<tr>
			<td>Conference Only</td>
			<td>March 28, 2018</td>
			<td>At the Venue</td>
			<td>$579</td>
		</tr>
	</tbody>
	</table>
<table>
	<caption>Workshop Only</caption>
		<thead>
		<tr>
			<th width="38%">Ticket Type</th>
			<th width="25%">Sale Ends</th>
			<th width="25%">Available</th>
			<th width="12%">Cost</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td><strike>Super Early Bird</strike></td>
			<td><strike>November 30, 2017</strike></td>
			<td>EXPIRED</td>
			<td>$199</td>
		</tr>
		<tr>
			<td><strike>Early Bird</strike></td>
			<td><strike>January 31, 2018</strike></td>
			<td>SOLD OUT</td>
			<td>$299</td>
		</tr>
		<tr class="active">
			<td>Discounted Regular Ticket</td>
			<td>January 31, 2018</td>
			<td>AVAILABLE</td>
			<td>$399</td>
		</tr>
		<tr class="active">
			<td>Early Bird Diversity Ticket</td>
			<td>January 31, 2018</td>
			<td>AVAILABLE</td>
			<td>$199</td>
		</tr>
		<tr>
			<td>Regular Ticket</td>
			<td>March 14, 2018</td>
			<td>February 1, 2018</td>
			<td>$479</td>
		</tr>
		<tr>
			<td>Diversity Ticket</td>
			<td>March 14, 2018</td>
			<td>February 1, 2018</td>
			<td>$239</td>
		</tr>
		</tbody>
	</table>
	
	<table>
	<caption>Conference &amp; Workshop</caption>
		<thead>
		<tr>
			<th width="38%">Ticket Type</th>
			<th width="25%">Sale Ends</th>
			<th width="25%">Available</th>
			<th width="12%">Cost</th>
		</tr>
		</thead>
		<tbody>		
		
		<tr class="active">
			<td>Workshop &amp; Conference</td>
			<td>January 31, 2018</td>
			<td>AVAILABLE</td>
			<td>$748</td>
		</tr>
		<tr class="active">
			<td>Diversity Workshop &amp; Conference</td>
			<td>January 31, 2018</td>
			<td>AVAILABLE</td>
			<td>$548</td>
		</tr>
		<tr>
			<td>Workshop &amp; Conference</td>
			<td>March 14, 2018</td>
			<td>February 1, 2018</td>
			<td>$908</td>
		</tr>
		<tr>
			<td>Diversity Workshop &amp; Conference</td>
			<td>March 14, 2018</td>
			<td>February 1, 2018</td>
			<td>$688</td>
		</tr>
		<tr>
			<td>Workshop &amp; Conference</td>
			<td>At the Venue</td>
			<td>March 15, 2018</td>
			<td>$1,108</td>
		</tr>
		<tr>
			<td>Diversity Workshop &amp; Conference</td>
			<td>At the venue</td>
			<td>March 15, 2018</td>
			<td>$868</td>
		</tr>
	
		</tbody>
	</table>
	</div>
		<a href="https://perfmattersconf.lilregie.com" title="Register Now" class="cta" style="margin: 1.5em auto 0">Register Now</a>';

?>