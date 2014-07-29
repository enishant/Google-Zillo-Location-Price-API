<html>
<head>
	<title>Zillo Map Search</title>
</head>
<body>
	<div style="float:left;">
		<table>
			<th>Cost</th>
			<th></th>
			<th>Provided By</th>
			<tr>
				<td>
				<?php
					$test = $_POST['search'];
					$a=str_replace(" ","-",$test);
					$b=str_replace(" ","+",$test);	
					$url = 'http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=X1-ZWz1dvdws344y3_1k6qj&address='.$a.'&citystatezip=-';
					$response_xml_data = file_get_contents($url);
					if($response_xml_data)
					{
						$data = simplexml_load_string($response_xml_data);  
						if($data->message->code == 0)
						{
							echo "$"."  ".$data->response->results->result->zestimate->amount;
						}
						else
						{
							echo "<b> Address Not Found in Database. </b>";
						}
					}
				?>
				</td>
				<td>
				</td>
				<td>
					<a href="http://www.zillow.com/"><img src="http://www.zillowstatic.com/static/images/badges/zillow-addict_trsm.png" alt="Real Estate Addict at Zillow"></img></a>
				</td>
			</tr>
		</table>
	</div>
	<div style="float:right;">
		<iframe width="425" 
				height="350" 
				frameborder="0" 
				scrolling="no" 
				marginheight="0" 
				marginwidth="0" 
				src="https://maps.google.com/maps?q=<?php echo $b ?>&amp;layer=c&amp;sll=49.043159,-122.261459&amp;cbp=13,146.23,,0,5.22&amp;cbll=49.043201,-122.261475&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $b ?>&amp;ll=49.043159,-122.261459&amp;spn=0.263444,0.441513&amp;t=m&amp;z=11&amp;iwloc=A&amp;panoid=4veifOa9RUHIkVxAaPFIKQ&amp;source=embed&amp;output=svembed"></iframe>
	</div>
</body>
</html>
