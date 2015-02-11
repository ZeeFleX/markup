$(document).ready(function(){
	//jc_setfrmfld();
});

function jc_setfrmfld(a)
{

var rnd = Math.floor(Math.random()*10000);
document.write('<div id=jc_frm_'+rnd+'></div>');
var s=document.getElementById('jc_frm_'+rnd);
var a = s.parentNode;	
var inp = a.getElementsByTagName('input');
var td = inp.item(inp.length-1).parentNode;

var n='bvbvb',e='kardapolov@gmail.com',p='',c='';
if(a&&a.lead_name && n)a.lead_name.value=n;
if(a&&a.lead_email && e)a.lead_email.value=e;
if(a&&a.lead_phone && p)a.lead_phone.value=p;
if(a&&a.lead_city && c)a.lead_city.value=c;
        
}
function jc_chkscrfrm(a, phone, phone_req, city, city_req)
{
	if(a.lead_name && (a.lead_name.value=='' || a.lead_name.value.indexOf(" ваше ")>-1))
	{
		a.lead_name.focus();
		alert('Пожалуйста, введите ваше имя!');
		return false;
	}
	if(!a.lead_email)
	{
		alert('Отсутствует обязательное поле E-mail(lead_email)!');
		return false;
	}
	if(a.lead_email.value=='')
	{
		a.lead_email.focus();
		alert('Пожалуйста, введите ваш адрес E-mail!');
		return false;
	}
	else
	{
		var b=/^[a-z0-9_\-\.\+]+@([a-z0-9]+[\-\.])*[a-z0-9]+\.[a-z]{2,6}$/i;
		if(!b.test(a.lead_email.value))
		{
			a.lead_email.focus();
			alert('Пожалуйста, введите КОРРЕКТНЫЙ адрес E-mail!');
			return false;
		}
	}
	var oferta = document.getElementById('offerta_accept');
	if(oferta && !oferta.checked)
	{
		oferta.focus();
		alert('Вы должны принять условия оферты!');
		return false;
	}
	if(phone && phone_req && a.lead_phone && (a.lead_phone.value=='' || a.lead_phone.value.indexOf(" ваш ") >- 1))
	{
		a.lead_phone.focus();
		alert('Пожалуйста, введите ваш номер телефона!');
		return false;
	}
	if (city && city_req && a.lead_city && (a.lead_city.value == '' || a.lead_city.value.indexOf(" ваш ") >- 1))
	{
		a.lead_city.focus();
		alert('Пожалуйста, введите ваш город!');
		return false;
	}
	return true;
}
function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return(setStr);
}
if (getCookie('sitePreview') != '1') {
	var real_location = location.hostname;
	if (real_location.indexOf("justclick.ru")+1) {
		// мы на домене JC, заменим юзерскую оферту офертой JC
		var oferta_link = '/media/oferta.php';
		$('[id ^= "subscr-form-"]').find('tr[rel="oferta"]').remove();
		var oferta_element = '<tr rel="oferta">'+'<td align="right" style="padding-top: 15px;" colspan="2"><input id="offerta_accept" type="checkbox" checked="" name="offerta_accept"><span><small>Прочитал и согласен с <a class="oferta" target="_blank" href="'+oferta_link+'" onclick="window.open(\''+oferta_link+'\',\'Oferta\',\'toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=1,width=450,height=450\'); return false;">договором оферты</a></small></span></td>\n\t\t</tr>';
		$('[id ^= "subscr-form-"]').find('tr:last').before(oferta_element);
	}
}