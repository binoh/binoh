<?
header("content-type:text/html;charset=utf-8");
function mystrip_tags($string)
{
	$string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $string);
	$string = strip_tags($string);
	return $string;
}
function addslashes_all($value)
{
    if (empty($value))
    {
        return $value;
    }
    else
    {
		if (!get_magic_quotes_gpc())
		{
		$value=is_array($value) ? array_map('addslashes_all', $value) : addslashes($value);
		}
		$value=is_array($value) ? array_map('addslashes_all', $value) : mystrip_tags($value);
		return $value;
    }
}

?>