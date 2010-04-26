<?php
$content_type = (isset($_SERVER['HTTP_ACCEPT']) AND stristr($_SERVER['HTTP_ACCEPT'], 'application/xhtml+xml')) ? 'application/xhtml+xml' : 'text/html';
header('Content-Type: ' . $content_type . '; charset=UTF-8');
$basehref = ($_SERVER['HTTP_HOST'] == 'lucid.dev') ? 'http://lucid.dev' : 'http://lucid.pro';
$bodyid = ($_SERVER['SCRIPT_NAME'] == '/index.php') ? 'home' : substr($_SERVER['SCRIPT_NAME'], 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Lucid Learning - <?php print htmlspecialchars($pagetitle); ?></title>
<meta http-equiv="Content-Type" content="<?php print $content_type; ?>; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<base href="<?php print $basehref; ?>" />
</head>
<body id="<?php print $bodyid; ?>">
<div id="container">
<ul id="header">
 <li><a href="/"><img src="/images/lucid-logo-3x4.png" width="30" height="40" alt="Lucid Learning" />Lucid Learning</a></li>
<?php
$nav = array(
'about' => 'About',
'writing' => 'Writing Samples',
'projects' => 'Projects/Clients',
'contact' => 'Contact');
foreach($nav as $u => $s)
	{
	print ' <li>';
	if(strpos($_SERVER['SCRIPT_NAME'], "/$u") !== false)
		{
		print '<strong>' . $s . '</strong>';
		}
	else
		{
		print '<a href="/' . $u . '">' . $s . '</a>';
		}
	print "</li>\n";
	}
?>
</ul>

<div id="content">
<h1><?php print $pagetitle; ?></h1>

