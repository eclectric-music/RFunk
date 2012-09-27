﻿<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="../easyTrad/translationFunk.js" ></script>
<title>unZipZipInZip</title>
<link type="text/css" rel="stylesheet" href="RFunk.css">
</head>

<h1>unZipZipInZip</h1>
<code><b>mixed</b> unZipZipInZip( <b>string</b> root_dir  [, <b>string</b> root_dest [, <b>bool</b> del_first_zip ]]])</code>
<h2>Description</h2>
As its barbaric name suggests it, <b> unZipZipInZip () </b>  unzip archives recursively. 
<br /> 
<br /> 

The method returns false if any other "sub-zip" was found in the first one or false if a sub-zip has not been able to be deleted <br /> 
for reasons and therefore unlikely to stop the recursion. <br />
If everything went well, an array with all the zips "dirname" recursively found is returned. 
<br /> 
<br /> 
<b> Warning </b> <br /> 
It cannot be obvious but the method is obliged to remove all the zips it finds after extract it (except the first), <br /> 
because as the function is called to whenever there is a zip in the extraction directory, <br /> 
if the zips were not removed the recursion would be infinite! <br /> 

Unlikely to <b> unZipFolders () </b>, no check is made on the weight of the source zip and weight of sub-files! <br /> 
You can provide first argument signature unZipZipInZip () which is an archive of a reasonable weight. 
<br /> 
<br /> 
<b> Warning </b> <br /> 
The first zip must be pointed by an absolute path, otherwise it will still be deleted because it is a regular expression <br /> 
allowing you to remove the other extracts zips by a relative path!
<h2>Example</h2>
<div class="doc-source">
<pre><code>
$o_rfunk= new RFunk;

$m_retour=$o_rfunk->unZipZipInZip('C:\Documents and Settings\pouet\Bureau\test\some_file.zip','rep_retour');

if(is_bool($m_retour))
{
	echo 'They were no other sub zip files in your source archive';
	
}elseif(is_array($m_retour))
{
		echo 'Here are the other zips =&gt;

		foreach($m_retour as $i_key =&gt; $s_value)
		{
				echo '&lt;br /&gt;'.$s_value;
		}

}
</code></pre>
</div>


<h2>See</h2>

<a href="unZipFolders.htm">unZipFolders()</a>.
<hr style="margin-top:1.5em">
<div style="text-align:center"><a href="index.php">Index</a></div>
</body>
</html>
