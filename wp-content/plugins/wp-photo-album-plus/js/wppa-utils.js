// wppa-utils.js
//
// conatins common vars and functions
// 
var wppaJsUtilsVersion = '6.3.6';
var wppaDebug;

// Trim 
// @1 string to be trimmed
// @2 character, string, or array of characters or strings to trim off, 
//    default: trim spaces, tabs and newlines
function wppaTrim( str, arg ) {

	var result;
	
	result = wppaTrimLeft( str, arg );
	result = wppaTrimRight( result, arg );
	
	return result;
}

// Trim left
// @1 string to be trimmed
// @2 character, string, or array of characters or strings to trim off, 
//    default: trim spaces, tabs and newlines
function wppaTrimLeft( str, arg ) {

	var result;
	var strlen;
	var arglen;
	var argcount;
	var i;
	var done;
	var oldStr, newStr;
	
	switch ( typeof ( arg ) ) {
		case 'string':
			result = str;
			strlen = str.length;
			arglen = arg.length;
			while ( strlen >= arglen && result.substr( 0, arglen ) == arg ) {
				result = result.substr( arglen );
				strlen = result.length;
			}
			break;
		case 'object':
			done = false;
			newStr = str;
			while ( ! done ) {
				i = 0;
				oldStr = newStr;
				while ( i < arg.length ) {
					newStr = wppaTrimLeft( newStr, arg[i] );
					i++;
				}
				done = ( oldStr == newStr );
			}
			result = newStr;
			break;
		default:
			return str.replace( /^\s\s*/, '' );
	}

	return result;
}

// Trim right
// @1 string to be trimmed
// @2 character, string, or array of characters or strings to trim off, 
//    default: trim spaces, tabs and newlines
function wppaTrimRight( str, arg ) {

	var result;
	var strlen;
	var arglen;
	var argcount;
	var i;
	var done;
	var oldStr, newStr;
	
	switch ( typeof ( arg ) ) {
		case 'string':
			result = str;
			strlen = str.length;
			arglen = arg.length;
			while ( strlen >= arglen && result.substr( strlen - arglen ) == arg ) {
				result = result.substr( 0, strlen - arglen );
				strlen = result.length;
			}
			break;
		case 'object':
			done = false;
			newStr = str;
			while ( ! done ) {
				i = 0;
				oldStr = newStr;
				while ( i < arg.length ) {
					newStr = wppaTrimRight( newStr, arg[i] );
					i++;
				}
				done = ( oldStr == newStr );
			}
			result = newStr;
			break;
		default:
			return str.replace( /\s\s*$/, '' );
	}
	
	return result;
}

// Cookie handling
function wppa_setCookie(c_name,value,exdays) {
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

function wppa_getCookie(c_name) {
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
{
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
  return "";
}

// Change stereotype cookie
function wppaStereoTypeChange( newval ) {
	wppa_setCookie( 'stereotype', newval, 365 );
}

// Change stereoglass cookie
function wppaStereoGlassChange( newval ) {
	wppa_setCookie( 'stereoglass', newval, 365 );
}

// Console logging
function wppaConsoleLog( arg, force ) {

	if ( typeof( console ) != 'undefined' && ( wppaDebug || force == 'force' ) ) {
		console.log( arg );
	}
}

// Say we're in
wppaConsoleLog( 'wppa-utils.js version '+wppaJsUtilsVersion+' loaded.', 'force' );