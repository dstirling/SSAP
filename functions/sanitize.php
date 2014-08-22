<?php

//good idea to sanitize going in AND going out.

function escape($string) 
{
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
	//ENT_QUOTES converts both single and double quotes
	//default is ENT_NOQUOTES which leaves both double/single quotes unconverted
}

