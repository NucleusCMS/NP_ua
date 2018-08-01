<?php 
class NP_ua extends NucleusPlugin { 
	function getName() { return 'NP_ua'; }
	function getMinNucleusVersion() { return 330; }
	function getAuthor()  { return 'yama'; }
	function getVersion() { return '0.2'; }
	function getURL() {return 'http://japan.nucleuscms.org/wiki/plugins:ua';}
	function getDescription() { return '<%if(ua,ie7)%>, <%if(ua,mac)%>...'; } 
	function supportsFeature($what) { return ($what=='SqlTablePrefix')?1:0; }

	function doIf($key='', $value='')
	{
		$ua = getenv('HTTP_USER_AGENT');
		switch($key)
		{
			case 'ie8':
				return strstr($ua, 'MSIE 8')    ? true : false;
			case 'ie7':
				return strstr($ua, 'MSIE 7')    ? true : false;
			case 'ie6':
				return (strstr($ua, 'MSIE 6') && !strstr($ua, 'MSIE 7'))    ? true : false;
			case 'ie':
				return strstr($ua, 'MSIE')      ? true : false;
			case 'fx3':
			case 'ff3':
				return strstr($ua, 'Firefox/3') ? true : false;
			case 'fx2':
			case 'ff2':
				return strstr($ua, 'Firefox/2') ? true : false;
			case 'fx':
			case 'ff':
				return strstr($ua, 'Firefox')   ? true : false;
			case 'chrome':
				return strstr($ua, 'Chrome') ? true : false;
			case 'baidu':
				return strstr($ua, 'Baidu') ? true : false;
			default:
				return strstr($ua, $key) ? true : false;
		}
	}
	
	function doSkinVar($p='')
	{
		$ua = getenv('HTTP_USER_AGENT');
		echo $ua;
	}
}
