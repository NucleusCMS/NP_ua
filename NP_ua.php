<?php 
class NP_ua extends NucleusPlugin { 
	function getName() { return 'NP_ua'; }
	function getMinNucleusVersion() { return 330; }
	function getAuthor()  { return 'yama.kyms'; }
	function getVersion() { return '0.1.1'; }
	function getURL() {return 'http://japan.nucleuscms.org/wiki/plugins:ua';}
	function getDescription() { return '<%if(ua,ie7)%>, <%if(ua,mac)%>...'; } 
	function supportsFeature($what) { return ($what=='SqlTablePrefix')?1:0; }

	function doIf($param)
	{
		$ua = getenv( "HTTP_USER_AGENT" );
		switch($param)
		{
			case 'ie':
				$result = strstr($ua, 'MSIE')      ? true : false;
				break;
			case 'ie8':
				$result = strstr($ua, 'MSIE 8')    ? true : false;
				break;
			case 'ie7':
				$result = strstr($ua, 'MSIE 7')    ? true : false;
				break;
			case 'ie6':
				$result = (strstr($ua, 'MSIE 6') and !strstr($ua, 'MSIE 7'))    ? true : false;
				break;
			case 'fx':
			case 'ff':
				$result = strstr($ua, 'Firefox')   ? true : false;
				break;
			case 'fx3':
			case 'ff3':
				$result = strstr($ua, 'Firefox/3') ? true : false;
				break;
			case 'fx2':
			case 'ff2':
				$result = strstr($ua, 'Firefox/2') ? true : false;
				break;
			case 'chrome':
				$result = strstr($ua, 'Chrome') ? true : false;
				break;
			case 'baidu':
				$result = strstr($ua, 'Baidu') ? true : false;
				break;
			default:
				$result = strstr($ua, $param) ? true : false;
		}
		return $result;
	}
	function doSkinVar()
	{
		$ua = getenv( "HTTP_USER_AGENT" );
		echo $ua;
	}
}
?>